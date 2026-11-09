<?php

namespace App\Exports\Sheets;

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

class LaporanBulananTransaksiSheet implements FromArray, WithCustomStartCell, WithEvents, WithTitle, ShouldAutoSize
{
    protected int $month;
    protected int $year;
    protected string $adminName;
    protected $borrowings;
    protected int $totalCount = 0;

    public function __construct(int $month, int $year, string $adminName = 'Administrator')
    {
        $this->month = $month;
        $this->year = $year;
        $this->adminName = $adminName;

        Carbon::setLocale('id');

        // Fetch all transactions in this month
        $this->borrowings = Borrowing::with(['user', 'book'])
            ->whereYear('borrowed_at', $this->year)
            ->whereMonth('borrowed_at', $this->month)
            ->orderBy('borrowed_at', 'asc')
            ->get();

        $this->totalCount = $this->borrowings->count();
    }

    public function startCell(): string
    {
        return 'A8';
    }

    public function title(): string
    {
        return 'Rincian Transaksi Sirkulasi';
    }

    public function array(): array
    {
        $rows = [];

        // Header Row at A8
        $rows[] = [
            'NO',
            'ID RESI',
            'NIS PEMINJAM',
            'NAMA LENGKAP SISWA',
            'ROLE / KELAS',
            'JUDUL BUKU',
            'KATEGORI',
            'TANGGAL PINJAM',
            'BATAS KEMBALI',
            'TANGGAL KEMBALI',
            'STATUS SIRKULASI',
            'DENDA / KETERANGAN',
        ];

        if ($this->borrowings->isEmpty()) {
            $rows[] = ['-', '-', '-', 'Tidak ada data transaksi peminjaman pada bulan ini.', '-', '-', '-', '-', '-', '-', '-', '-'];
            return $rows;
        }

        $no = 1;
        $now = now();
        foreach ($this->borrowings as $b) {
            $statusText = strtoupper($b->status ?? 'PENDING');
            $keterangan = '-';

            if ($b->status === 'approved' || $b->status === 'borrowed') {
                if ($b->due_date && Carbon::parse($b->due_date)->isPast() && is_null($b->returned_at)) {
                    $statusText = 'TERLAMBAT';
                    $daysLate = Carbon::parse($b->due_date)->diffInDays($now);
                    $fine = $daysLate * 1000;
                    $keterangan = 'Terlambat ' . $daysLate . ' hari (Denda Rp ' . number_format($fine, 0, ',', '.') . ')';
                } else {
                    $statusText = 'SEDANG DIPINJAM';
                    $keterangan = 'Peminjaman Aktif';
                }
            } elseif ($b->status === 'returned' || !is_null($b->returned_at)) {
                $statusText = 'DIKEMBALIKAN';
                $keterangan = 'Telah Dikembalikan';
            } elseif ($b->status === 'lost' || $b->status === 'hilang') {
                $statusText = 'BUKU HILANG';
                $keterangan = 'Perlu Penggantian Buku';
            } elseif ($b->status === 'rejected') {
                $statusText = 'DITOLAK';
                $keterangan = 'Permintaan Ditolak';
            } elseif ($b->status === 'pending') {
                $statusText = 'MENUNGGU PERSETUJUAN';
                $keterangan = 'Menunggu Verifikasi Petugas';
            }

            $tglPinjam = $b->borrowed_at 
                ? Carbon::parse($b->borrowed_at)->timezone('Asia/Jakarta')->translatedFormat('d M Y, H:i') . ' WIB'
                : '-';

            $batasKembali = $b->due_date 
                ? Carbon::parse($b->due_date)->translatedFormat('d M Y')
                : '-';

            $tglKembali = $b->returned_at 
                ? Carbon::parse($b->returned_at)->timezone('Asia/Jakarta')->translatedFormat('d M Y, H:i') . ' WIB'
                : '-';

            $rows[] = [
                $no++,
                '#' . $b->id,
                (string)($b->user->nis ?? '-'),
                $b->user->name ?? 'User Tidak Diketahui',
                $b->user->role ?? 'Siswa',
                $b->book->title ?? 'Buku Tidak Diketahui',
                $b->book->category ?? 'Umum',
                $tglPinjam,
                $batasKembali,
                $tglKembali,
                $statusText,
                $keterangan,
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
                $monthDate = Carbon::createFromDate($this->year, $this->month, 1);
                $periodName = strtoupper($monthDate->translatedFormat('F Y'));

                // 1. Primary Title Banner (A1:L1)
                $sheet->mergeCells('A1:L1');
                $sheet->setCellValue('A1', 'PERPUSTAKAAN LIBRAZ - LOG RINCIAN TRANSAKSI SIRKULASI SISWA');
                $sheet->getStyle('A1')->getFont()->setName('Arial')->setSize(15)->setBold(true)->getColor()->setRGB('FFFFFF');
                $sheet->getStyle('A1:L1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('4338CA'); // Indigo-700
                $sheet->getStyle('A1:L1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getRowDimension(1)->setRowHeight(32);

                // 2. Subtitle Banner (A2:L2)
                $sheet->mergeCells('A2:L2');
                $sheet->setCellValue('A2', 'SMK NEGERI 1 CIOMAS - PERIODE BULAN: ' . $periodName . ' | TOTAL TRANSAKSI: ' . $this->totalCount . ' TRANSAKSI');
                $sheet->getStyle('A2')->getFont()->setName('Arial')->setSize(10)->setItalic(true)->getColor()->setRGB('FFFFFF');
                $sheet->getStyle('A2:L2')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('4F46E5'); // Indigo-600
                $sheet->getStyle('A2:L2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getRowDimension(2)->setRowHeight(20);

                // 3. Metadata Information (Rows 4 - 5)
                $sheet->setCellValue('A4', 'Periode Laporan Bulanan');
                $sheet->setCellValue('C4', ': ' . $monthDate->translatedFormat('F Y'));
                $sheet->setCellValue('I4', 'Waktu Cetak / Unduh');
                $sheet->setCellValue('K4', ': ' . now()->timezone('Asia/Jakarta')->translatedFormat('d F Y, H:i') . ' WIB');

                $sheet->setCellValue('A5', 'Penanggung Jawab / Admin');
                $sheet->setCellValue('C5', ': ' . $this->adminName);
                $sheet->setCellValue('I5', 'Total Transaksi Sirkulasi');
                $sheet->setCellValue('K5', ': ' . $this->totalCount . ' Catatan Peminjaman');

                $sheet->getStyle('A4:A5')->getFont()->setBold(true)->getColor()->setRGB('334155');
                $sheet->getStyle('I4:I5')->getFont()->setBold(true)->getColor()->setRGB('334155');

                // 4. Table Header Row (A8:L8)
                $sheet->getStyle('A8:L8')->getFont()->setName('Arial')->setSize(10)->setBold(true)->getColor()->setRGB('FFFFFF');
                $sheet->getStyle('A8:L8')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('1E293B'); // Slate-800
                $sheet->getStyle('A8:L8')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getRowDimension(8)->setRowHeight(28);

                // 5. Data Rows Formatting
                $dataRowCount = max($this->totalCount, 1);
                $startDataRow = 9;
                $lastDataRow = $startDataRow + $dataRowCount - 1;

                $sheet->getStyle("A8:L{$lastDataRow}")->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->getColor()->setRGB('CBD5E1');

                for ($row = $startDataRow; $row <= $lastDataRow; $row++) {
                    $sheet->getRowDimension($row)->setRowHeight(24);
                    if ($row % 2 === 0) {
                        $sheet->getStyle("A{$row}:L{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('F8FAFC');
                    }

                    // Format NIS as Text so leading zeroes are preserved
                    $nisVal = $sheet->getCell("C{$row}")->getValue();
                    if ($nisVal && $nisVal !== '-') {
                        $sheet->getCell("C{$row}")->setValueExplicit($nisVal, DataType::TYPE_STRING);
                    }

                    // Highlight Status Column (Col K) with print-friendly soft badge tints
                    $statusVal = strtoupper(trim((string)$sheet->getCell("K{$row}")->getValue()));
                    if ($statusVal === 'SEDANG DIPINJAM') {
                        $sheet->getStyle("K{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('FEF3C7');
                        $sheet->getStyle("K{$row}")->getFont()->setBold(true)->getColor()->setRGB('92400E');
                    } elseif ($statusVal === 'DIKEMBALIKAN') {
                        $sheet->getStyle("K{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('D1FAE5');
                        $sheet->getStyle("K{$row}")->getFont()->setBold(true)->getColor()->setRGB('065F46');
                    } elseif ($statusVal === 'BUKU HILANG') {
                        $sheet->getStyle("K{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('FFE4E6');
                        $sheet->getStyle("K{$row}")->getFont()->setBold(true)->getColor()->setRGB('9F1239');
                    } elseif ($statusVal === 'TERLAMBAT') {
                        $sheet->getStyle("K{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('FEE2E2');
                        $sheet->getStyle("K{$row}")->getFont()->setBold(true)->getColor()->setRGB('991B1B');
                    }
                }

                // Alignments & Text Wrapping
                $sheet->getStyle("A9:C{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("D9:D{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("E9:E{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("F9:F{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)->setVertical(Alignment::VERTICAL_CENTER)->setWrapText(true);
                $sheet->getStyle("G9:G{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("H9:K{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("L9:L{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)->setVertical(Alignment::VERTICAL_CENTER)->setWrapText(true);

                // 6. Footer Total Row
                $summaryRow = $lastDataRow + 1;
                $sheet->mergeCells("A{$summaryRow}:J{$summaryRow}");
                $sheet->setCellValue("A{$summaryRow}", "TOTAL CATATAN SIRKULASI PADA BULAN INI :");
                $sheet->setCellValue("K{$summaryRow}", $this->totalCount . " TRANSAKSI");
                $sheet->getStyle("A{$summaryRow}:L{$summaryRow}")->getFont()->setBold(true)->getColor()->setRGB('0F172A');
                $sheet->getStyle("A{$summaryRow}:J{$summaryRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_RIGHT)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("K{$summaryRow}:L{$summaryRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("A{$summaryRow}:L{$summaryRow}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('E2E8F0');
                $sheet->getStyle("A{$summaryRow}:L{$summaryRow}")->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->getColor()->setRGB('94A3B8');
                $sheet->getRowDimension($summaryRow)->setRowHeight(25);

                // 7. Signature Block (Format Resmi Siap Cetak)
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

                $sheet->setCellValue("J{$sigDateRow}", "Ciomas, " . now()->translatedFormat('d F Y'));
                $sheet->setCellValue("J{$sigTitleRow}", "Petugas Administrator");
                $sheet->setCellValue("J{$sigSpaceRow}", "( " . $this->adminName . " )");
                $sheet->setCellValue("J{$sigNipRow}", "Petugas Layanan Sirkulasi");
                $sheet->getStyle("J{$sigSpaceRow}")->getFont()->setBold(true)->setUnderline(true);
                $sheet->getStyle("J{$sigNipRow}")->getFont()->setSize(9)->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color('475569'));

                // Explicit Column Widths (Print-Optimized Dimensions)
                $sheet->getColumnDimension('A')->setAutoSize(false)->setWidth(6);
                $sheet->getColumnDimension('B')->setAutoSize(false)->setWidth(12);
                $sheet->getColumnDimension('C')->setAutoSize(false)->setWidth(16);
                $sheet->getColumnDimension('D')->setAutoSize(false)->setWidth(26);
                $sheet->getColumnDimension('E')->setAutoSize(false)->setWidth(14);
                $sheet->getColumnDimension('F')->setAutoSize(false)->setWidth(32);
                $sheet->getColumnDimension('G')->setAutoSize(false)->setWidth(15);
                $sheet->getColumnDimension('H')->setAutoSize(false)->setWidth(20);
                $sheet->getColumnDimension('I')->setAutoSize(false)->setWidth(16);
                $sheet->getColumnDimension('J')->setAutoSize(false)->setWidth(20);
                $sheet->getColumnDimension('K')->setAutoSize(false)->setWidth(20);
                $sheet->getColumnDimension('L')->setAutoSize(false)->setWidth(30);

                // 8. CONFIGURATION FOR PERFECT PRINTING (TINGGAL CETAK / A4 LANDSCAPE)
                $pageSetup = $sheet->getPageSetup();
                $pageSetup->setPaperSize(PageSetup::PAPERSIZE_A4);
                $pageSetup->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);
                $pageSetup->setFitToPage(true);
                $pageSetup->setFitToWidth(1);
                $pageSetup->setFitToHeight(0); // Automatic vertical pages without horizontal distortion
                $pageSetup->setRowsToRepeatAtTopByStartAndEnd(8, 8); // Table header repeats on every printed page

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
                $headerFooter->setOddHeader('&L&BPERPUSTAKAAN LIBRAZ - LOG SIRKULASI TRANSAKSI&B&R&BPeriode: ' . $periodName . '&B');
                $headerFooter->setOddFooter('&LSistem Informasi Perpustakaan Digital Libraz &C&RHal &P dari &N');
            }
        ];
    }
}

