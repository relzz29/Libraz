<?php

namespace App\Exports;

use App\Models\Borrowing;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

class LaporanHarianExport implements FromArray, WithCustomStartCell, WithEvents, WithTitle, ShouldAutoSize
{
    protected string $date;
    protected string $adminName;
    protected $borrowings;
    protected int $totalCount = 0;
    protected int $uniqueUsers = 0;
    protected int $activeLoans = 0;
    protected int $returnedLoans = 0;

    public function __construct(string $date, string $adminName = 'Administrator')
    {
        $this->date = $date;
        $this->adminName = $adminName;

        Carbon::setLocale('id');

        // Fetch borrowings on this date
        $this->borrowings = Borrowing::with(['user', 'book'])
            ->whereDate('borrowed_at', $this->date)
            ->orderBy('borrowed_at', 'asc')
            ->get();

        $this->totalCount = $this->borrowings->count();
        $this->uniqueUsers = $this->borrowings->pluck('user_id')->unique()->count();
        $this->activeLoans = $this->borrowings->whereIn('status', ['approved', 'borrowed'])->whereNull('returned_at')->count();
        $this->returnedLoans = $this->borrowings->filter(function ($b) {
            return $b->status === 'returned' || !is_null($b->returned_at);
        })->count();
    }

    public function startCell(): string
    {
        return 'A10';
    }

    public function title(): string
    {
        return 'Laporan Harian ' . Carbon::parse($this->date)->format('d-m-Y');
    }

    public function array(): array
    {
        $rows = [];

        // Header Row at A10
        $rows[] = [
            'NO',
            'ID RESI',
            'NIS PEMINJAM',
            'NAMA LENGKAP SISWA',
            'ROLE / KELAS',
            'JUDUL BUKU',
            'KATEGORI',
            'WAKTU PINJAM',
            'BATAS KEMBALI',
            'STATUS PEMINJAMAN',
        ];

        if ($this->borrowings->isEmpty()) {
            $rows[] = ['-', '-', '-', 'Tidak ada transaksi peminjaman buku pada tanggal ini.', '-', '-', '-', '-', '-', '-'];
            return $rows;
        }

        $no = 1;
        $now = now();
        foreach ($this->borrowings as $b) {
            $statusText = strtoupper($b->status ?? 'PENDING');
            if ($b->status === 'approved' || $b->status === 'borrowed') {
                if ($b->due_date && Carbon::parse($b->due_date)->isPast() && is_null($b->returned_at)) {
                    $statusText = 'TERLAMBAT';
                } else {
                    $statusText = 'SEDANG DIPINJAM';
                }
            } elseif ($b->status === 'returned' || !is_null($b->returned_at)) {
                $statusText = 'DIKEMBALIKAN';
            } elseif ($b->status === 'lost' || $b->status === 'hilang') {
                $statusText = 'BUKU HILANG';
            } elseif ($b->status === 'rejected') {
                $statusText = 'DITOLAK';
            } elseif ($b->status === 'pending') {
                $statusText = 'MENUNGGU PERSETUJUAN';
            }

            $waktuPinjam = $b->borrowed_at 
                ? Carbon::parse($b->borrowed_at)->timezone('Asia/Jakarta')->translatedFormat('d M Y, H:i') . ' WIB'
                : '-';

            $batasKembali = $b->due_date 
                ? Carbon::parse($b->due_date)->translatedFormat('d M Y')
                : '-';

            $rows[] = [
                $no++,
                '#' . $b->id,
                (string)($b->user->nis ?? '-'),
                $b->user->name ?? 'User Tidak Diketahui',
                $b->user->role ?? 'Siswa',
                $b->book->title ?? 'Buku Tidak Diketahui',
                $b->book->category ?? 'Umum',
                $waktuPinjam,
                $batasKembali,
                $statusText,
            ];
        }

        return $rows;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                Carbon::setLocale('id');
                $formattedDate = Carbon::parse($this->date)->translatedFormat('l, d F Y');

                // 1. Primary Title Banner (A1:J1)
                $sheet->mergeCells('A1:J1');
                $sheet->setCellValue('A1', 'PERPUSTAKAAN LIBRAZ - LAPORAN PEMINJAMAN BUKU HARIAN');
                $sheet->getStyle('A1')->getFont()->setName('Arial')->setSize(15)->setBold(true)->getColor()->setRGB('FFFFFF');
                $sheet->getStyle('A1:J1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('4338CA'); // Indigo-700
                $sheet->getStyle('A1:J1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getRowDimension(1)->setRowHeight(32);

                // 2. Subtitle Banner (A2:J2)
                $sheet->mergeCells('A2:J2');
                $sheet->setCellValue('A2', 'SMK NEGERI 1 CIOMAS - SISTEM INFORMASI PERPUSTAKAAN DIGITAL');
                $sheet->getStyle('A2')->getFont()->setName('Arial')->setSize(10)->setItalic(true)->getColor()->setRGB('FFFFFF');
                $sheet->getStyle('A2:J2')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('4F46E5'); // Indigo-600
                $sheet->getStyle('A2:J2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getRowDimension(2)->setRowHeight(20);

                // 3. Metadata Information (Rows 4 - 5)
                $sheet->setCellValue('A4', 'Hari & Tanggal Laporan');
                $sheet->setCellValue('C4', ': ' . $formattedDate);
                $sheet->setCellValue('G4', 'Waktu Cetak / Unduh');
                $sheet->setCellValue('I4', ': ' . now()->timezone('Asia/Jakarta')->translatedFormat('d F Y, H:i') . ' WIB');

                $sheet->setCellValue('A5', 'Dicetak Oleh');
                $sheet->setCellValue('C5', ': ' . $this->adminName);
                $sheet->setCellValue('G5', 'Total Transaksi Hari Ini');
                $sheet->setCellValue('I5', ': ' . $this->totalCount . ' Buku Dipinjam');

                $sheet->getStyle('A4:A5')->getFont()->setBold(true)->getColor()->setRGB('334155');
                $sheet->getStyle('G4:G5')->getFont()->setBold(true)->getColor()->setRGB('334155');

                // 4. KPI Summary Badges Box (Rows 7 - 8)
                $sheet->mergeCells('A7:B7');
                $sheet->setCellValue('A7', 'TOTAL DIPINJAM');
                $sheet->mergeCells('A8:B8');
                $sheet->setCellValue('A8', $this->totalCount . ' Buku');

                $sheet->mergeCells('C7:D7');
                $sheet->setCellValue('C7', 'SISWA PEMINJAM');
                $sheet->mergeCells('C8:D8');
                $sheet->setCellValue('C8', $this->uniqueUsers . ' Siswa');

                $sheet->mergeCells('E7:G7');
                $sheet->setCellValue('E7', 'SEDANG DIPINJAM (AKTIF)');
                $sheet->mergeCells('E8:G8');
                $sheet->setCellValue('E8', $this->activeLoans . ' Buku');

                $sheet->mergeCells('H7:J7');
                $sheet->setCellValue('H7', 'SUDAH DIKEMBALIKAN');
                $sheet->mergeCells('H8:J8');
                $sheet->setCellValue('H8', $this->returnedLoans . ' Buku');

                $summaryHeaderStyle = [
                    'font' => ['bold' => true, 'size' => 9, 'color' => ['rgb' => '475569']],
                    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical' => Alignment::VERTICAL_CENTER],
                    'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'F1F5F9']],
                ];
                $summaryValueStyle = [
                    'font' => ['bold' => true, 'size' => 13, 'color' => ['rgb' => '1E293B']],
                    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical' => Alignment::VERTICAL_CENTER],
                    'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'E2E8F0']],
                ];

                $sheet->getStyle('A7:J7')->applyFromArray($summaryHeaderStyle);
                $sheet->getStyle('A8:J8')->applyFromArray($summaryValueStyle);
                $sheet->getStyle('A7:J8')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->getColor()->setRGB('CBD5E1');
                $sheet->getRowDimension(7)->setRowHeight(18);
                $sheet->getRowDimension(8)->setRowHeight(24);

                // 5. Table Header Row (A10:J10)
                $sheet->getStyle('A10:J10')->getFont()->setName('Arial')->setSize(10)->setBold(true)->getColor()->setRGB('FFFFFF');
                $sheet->getStyle('A10:J10')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('1E293B'); // Slate-800
                $sheet->getStyle('A10:J10')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getRowDimension(10)->setRowHeight(26);

                // 6. Data Rows Formatting
                $dataRowCount = max($this->totalCount, 1);
                $startDataRow = 11;
                $lastDataRow = $startDataRow + $dataRowCount - 1;

                $sheet->getStyle("A10:J{$lastDataRow}")->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->getColor()->setRGB('CBD5E1');

                // Zebra striping, row styling, status badges
                for ($row = $startDataRow; $row <= $lastDataRow; $row++) {
                    $sheet->getRowDimension($row)->setRowHeight(24);
                    if ($row % 2 === 0) {
                        $sheet->getStyle("A{$row}:J{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('F8FAFC');
                    }

                    // Explicitly format NIS column as Text so leading zeroes are never truncated
                    $nisValue = $sheet->getCell("C{$row}")->getValue();
                    if ($nisValue && $nisValue !== '-') {
                        $sheet->getCell("C{$row}")->setValueExplicit($nisValue, DataType::TYPE_STRING);
                    }

                    // Highlight Status Column (Col J) with print-friendly soft badge tints
                    $statusVal = strtoupper(trim((string)$sheet->getCell("J{$row}")->getValue()));
                    if ($statusVal === 'SEDANG DIPINJAM') {
                        $sheet->getStyle("J{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('FEF3C7'); // Soft Amber
                        $sheet->getStyle("J{$row}")->getFont()->setBold(true)->getColor()->setRGB('92400E');
                    } elseif ($statusVal === 'DIKEMBALIKAN') {
                        $sheet->getStyle("J{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('D1FAE5'); // Soft Emerald
                        $sheet->getStyle("J{$row}")->getFont()->setBold(true)->getColor()->setRGB('065F46');
                    } elseif ($statusVal === 'BUKU HILANG') {
                        $sheet->getStyle("J{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('FFE4E6'); // Soft Rose
                        $sheet->getStyle("J{$row}")->getFont()->setBold(true)->getColor()->setRGB('9F1239');
                    } elseif ($statusVal === 'TERLAMBAT') {
                        $sheet->getStyle("J{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('FEE2E2'); // Soft Red
                        $sheet->getStyle("J{$row}")->getFont()->setBold(true)->getColor()->setRGB('991B1B');
                    }
                }

                // Alignments & Text Wrapping
                $sheet->getStyle("A11:C{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("D11:D{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("E11:E{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("F11:F{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)->setVertical(Alignment::VERTICAL_CENTER)->setWrapText(true);
                $sheet->getStyle("G11:G{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("H11:J{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);

                // 7. Footer Total Row
                $summaryRow = $lastDataRow + 1;
                $sheet->mergeCells("A{$summaryRow}:I{$summaryRow}");
                $sheet->setCellValue("A{$summaryRow}", "TOTAL BUKU DIPINJAM PADA TANGGAL INI :");
                $sheet->setCellValue("J{$summaryRow}", $this->totalCount . " BUKU");
                $sheet->getStyle("A{$summaryRow}:J{$summaryRow}")->getFont()->setBold(true)->getColor()->setRGB('0F172A');
                $sheet->getStyle("A{$summaryRow}:I{$summaryRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_RIGHT)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("J{$summaryRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("A{$summaryRow}:J{$summaryRow}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('E2E8F0');
                $sheet->getStyle("A{$summaryRow}:J{$summaryRow}")->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->getColor()->setRGB('94A3B8');
                $sheet->getRowDimension($summaryRow)->setRowHeight(25);

                // 8. Signature Block (Format Resmi Siap Cetak)
                $sigDateRow = $summaryRow + 3;
                $sigTitleRow = $sigDateRow + 1;
                $sigSpaceRow = $sigTitleRow + 4;
                $sigNipRow = $sigSpaceRow + 1;

                $sheet->setCellValue("B{$sigDateRow}", "Mengetahui,");
                $sheet->setCellValue("B{$sigTitleRow}", "Kepala Perpustakaan Libraz");
                $sheet->setCellValue("B{$sigSpaceRow}", "( Farell Giekady, S.Pd )");
                $sheet->setCellValue("B{$sigNipRow}", "NIP. 19780512 200501 1 008");
                $sheet->getStyle("B{$sigSpaceRow}")->getFont()->setBold(true)->setUnderline(true);
                $sheet->getStyle("B{$sigNipRow}")->getFont()->setSize(9)->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color('475569'));

                $sheet->setCellValue("H{$sigDateRow}", "Ciomas, " . now()->translatedFormat('d F Y'));
                $sheet->setCellValue("H{$sigTitleRow}", "Petugas Administrator");
                $sheet->setCellValue("H{$sigSpaceRow}", "( " . $this->adminName . " )");
                $sheet->setCellValue("H{$sigNipRow}", "Petugas Layanan Sirkulasi");
                $sheet->getStyle("H{$sigSpaceRow}")->getFont()->setBold(true)->setUnderline(true);
                $sheet->getStyle("H{$sigNipRow}")->getFont()->setSize(9)->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color('475569'));

                // Explicit Column Widths (Print-Optimized Dimensions)
                $sheet->getColumnDimension('A')->setAutoSize(false)->setWidth(6);
                $sheet->getColumnDimension('B')->setAutoSize(false)->setWidth(12);
                $sheet->getColumnDimension('C')->setAutoSize(false)->setWidth(16);
                $sheet->getColumnDimension('D')->setAutoSize(false)->setWidth(26);
                $sheet->getColumnDimension('E')->setAutoSize(false)->setWidth(14);
                $sheet->getColumnDimension('F')->setAutoSize(false)->setWidth(34);
                $sheet->getColumnDimension('G')->setAutoSize(false)->setWidth(16);
                $sheet->getColumnDimension('H')->setAutoSize(false)->setWidth(22);
                $sheet->getColumnDimension('I')->setAutoSize(false)->setWidth(16);
                $sheet->getColumnDimension('J')->setAutoSize(false)->setWidth(22);

                // 9. CONFIGURATION FOR PERFECT PRINTING (TINGGAL CETAK / A4 LANDSCAPE)
                $pageSetup = $sheet->getPageSetup();
                $pageSetup->setPaperSize(PageSetup::PAPERSIZE_A4);
                $pageSetup->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);
                $pageSetup->setFitToPage(true);
                $pageSetup->setFitToWidth(1);
                $pageSetup->setFitToHeight(0); // Automatic vertical pages without horizontal distortion
                $pageSetup->setRowsToRepeatAtTopByStartAndEnd(10, 10); // Table header repeats on every printed page

                // Print Gridlines
                $sheet->setShowGridlines(true);
                $sheet->setPrintGridLines(true);

                // Clean Margins (Narrow: 0.5 in)
                $margins = $sheet->getPageMargins();
                $margins->setTop(0.5);
                $margins->setRight(0.4);
                $margins->setLeft(0.4);
                $margins->setBottom(0.6);
                $margins->setHeader(0.3);
                $margins->setFooter(0.3);

                // Header & Footer for Print
                $headerFooter = $sheet->getHeaderFooter();
                $headerFooter->setOddHeader('&L&BPERPUSTAKAAN LIBRAZ SMK NEGERI 1 CIOMAS&B&R&BDicetak: &D &T&B');
                $headerFooter->setOddFooter('&LSistem Informasi Perpustakaan Digital Libraz &C&RHal &P dari &N');
            }
        ];
    }
}

