<?php

namespace App\Exports\Sheets;

use App\Models\Book;
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

class LaporanBulananKoleksiSheet implements FromArray, WithCustomStartCell, WithEvents, WithTitle, ShouldAutoSize
{
    protected int $month;
    protected int $year;
    protected string $adminName;
    protected $books;
    protected int $totalStock = 0;
    protected int $totalActive = 0;
    protected int $totalOverdue = 0;
    protected int $totalReturned = 0;
    protected int $totalLost = 0;
    protected int $totalCirculations = 0;

    public function __construct(int $month, int $year, string $adminName = 'Administrator')
    {
        $this->month = $month;
        $this->year = $year;
        $this->adminName = $adminName;

        Carbon::setLocale('id');
        $now = now();

        // Query all books with counts specific to this month and year
        $this->books = Book::select('id', 'title', 'author', 'category', 'rack', 'isbn', 'stock')
            ->withCount([
                'borrowings as total_loans' => function ($q) {
                    $q->whereYear('borrowed_at', $this->year)->whereMonth('borrowed_at', $this->month);
                },
                'borrowings as active_loans' => function ($q) use ($now) {
                    $q->whereYear('borrowed_at', $this->year)->whereMonth('borrowed_at', $this->month)
                      ->whereIn('status', ['approved', 'borrowed'])
                      ->whereNull('returned_at');
                },
                'borrowings as overdue_loans' => function ($q) use ($now) {
                    $q->whereYear('borrowed_at', $this->year)->whereMonth('borrowed_at', $this->month)
                      ->whereIn('status', ['approved', 'borrowed'])
                      ->whereNull('returned_at')
                      ->where('due_date', '<', $now);
                },
                'borrowings as returned_loans' => function ($q) {
                    $q->whereYear('borrowed_at', $this->year)->whereMonth('borrowed_at', $this->month)
                      ->where(function ($sub) {
                          $sub->where('status', 'returned')->orWhereNotNull('returned_at');
                      });
                },
                'borrowings as lost_loans' => function ($q) {
                    $q->whereYear('borrowed_at', $this->year)->whereMonth('borrowed_at', $this->month)
                      ->whereIn('status', ['lost', 'hilang']);
                },
            ])
            ->orderBy('title', 'asc')
            ->get();

        $this->totalStock = Book::sum('stock');
        $this->totalActive = $this->books->sum('active_loans');
        $this->totalOverdue = $this->books->sum('overdue_loans');
        $this->totalReturned = $this->books->sum('returned_loans');
        $this->totalLost = $this->books->sum('lost_loans');
        $this->totalCirculations = $this->books->sum('total_loans');
    }

    public function startCell(): string
    {
        return 'A10';
    }

    public function title(): string
    {
        return 'Rekap Ketersediaan & Koleksi';
    }

    public function array(): array
    {
        $rows = [];

        // Header Row at A10
        $rows[] = [
            'NO',
            'KODE / ISBN',
            'JUDUL BUKU',
            'PENGARANG',
            'KATEGORI',
            'LOKASI RAK',
            'STOK TERSEDIA',
            'SEDANG DIPINJAM',
            'BELUM KEMBALI (TERLAMBAT)',
            'SUDAH DIKEMBALIKAN',
            'BUKU HILANG',
            'TOTAL SIRKULASI',
        ];

        if ($this->books->isEmpty()) {
            $rows[] = ['-', '-', 'Tidak ada data buku dalam katalog perpustakaan.', '-', '-', '-', 0, 0, 0, 0, 0, 0];
            return $rows;
        }

        $no = 1;
        foreach ($this->books as $b) {
            $rows[] = [
                $no++,
                (string)($b->isbn ?: 'LIB-' . str_pad($b->id, 4, '0', STR_PAD_LEFT)),
                $b->title,
                $b->author,
                $b->category,
                $b->rack ?: 'Rak Utama',
                (int)$b->stock,
                (int)$b->active_loans,
                (int)$b->overdue_loans,
                (int)$b->returned_loans,
                (int)$b->lost_loans,
                (int)$b->total_loans,
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
                $sheet->setCellValue('A1', 'PERPUSTAKAAN LIBRAZ - LAPORAN BULANAN KETERSEDIAAN & SIRKULASI KOLEKSI');
                $sheet->getStyle('A1')->getFont()->setName('Arial')->setSize(15)->setBold(true)->getColor()->setRGB('FFFFFF');
                $sheet->getStyle('A1:L1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('4338CA'); // Indigo-700
                $sheet->getStyle('A1:L1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getRowDimension(1)->setRowHeight(32);

                // 2. Subtitle Banner (A2:L2)
                $sheet->mergeCells('A2:L2');
                $sheet->setCellValue('A2', 'SMK NEGERI 1 CIOMAS - PERIODE LAPORAN: ' . $periodName);
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
                $sheet->setCellValue('I5', 'Total Judul Buku');
                $sheet->setCellValue('K5', ': ' . $this->books->count() . ' Judul Koleksi');

                $sheet->getStyle('A4:A5')->getFont()->setBold(true)->getColor()->setRGB('334155');
                $sheet->getStyle('I4:I5')->getFont()->setBold(true)->getColor()->setRGB('334155');

                // 4. KPI Summary Badges Box (Rows 7 - 8)
                // 5 Badges across columns A-L
                $sheet->mergeCells('A7:B7');
                $sheet->setCellValue('A7', 'BUKU TERSEDIA');
                $sheet->mergeCells('A8:B8');
                $sheet->setCellValue('A8', $this->totalStock . ' Eks');

                $sheet->mergeCells('C7:D7');
                $sheet->setCellValue('C7', 'SEDANG DIPINJAM');
                $sheet->mergeCells('C8:D8');
                $sheet->setCellValue('C8', $this->totalActive . ' Eks');

                $sheet->mergeCells('E7:G7');
                $sheet->setCellValue('E7', 'BELUM KEMBALI (TERLAMBAT)');
                $sheet->mergeCells('E8:G8');
                $sheet->setCellValue('E8', $this->totalOverdue . ' Eks');

                $sheet->mergeCells('H7:I7');
                $sheet->setCellValue('H7', 'SUDAH DIKEMBALIKAN');
                $sheet->mergeCells('H8:I8');
                $sheet->setCellValue('H8', $this->totalReturned . ' Eks');

                $sheet->mergeCells('J7:L7');
                $sheet->setCellValue('J7', 'BUKU HILANG');
                $sheet->mergeCells('J8:L8');
                $sheet->setCellValue('J8', $this->totalLost . ' Eks');

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

                $sheet->getStyle('A7:L7')->applyFromArray($summaryHeaderStyle);
                $sheet->getStyle('A8:L8')->applyFromArray($summaryValueStyle);
                $sheet->getStyle('A7:L8')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->getColor()->setRGB('CBD5E1');
                $sheet->getRowDimension(7)->setRowHeight(18);
                $sheet->getRowDimension(8)->setRowHeight(24);

                // 5. Table Header Row (A10:L10)
                $sheet->getStyle('A10:L10')->getFont()->setName('Arial')->setSize(10)->setBold(true)->getColor()->setRGB('FFFFFF');
                $sheet->getStyle('A10:L10')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('1E293B'); // Slate-800
                $sheet->getStyle('A10:L10')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getRowDimension(10)->setRowHeight(28);

                // 6. Data Rows Formatting
                $dataRowCount = max($this->books->count(), 1);
                $startDataRow = 11;
                $lastDataRow = $startDataRow + $dataRowCount - 1;

                $sheet->getStyle("A10:L{$lastDataRow}")->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->getColor()->setRGB('CBD5E1');

                for ($row = $startDataRow; $row <= $lastDataRow; $row++) {
                    $sheet->getRowDimension($row)->setRowHeight(24);
                    if ($row % 2 === 0) {
                        $sheet->getStyle("A{$row}:L{$row}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('F8FAFC');
                    }

                    // Format ISBN column as Text so digits aren't mangled
                    $isbnVal = $sheet->getCell("B{$row}")->getValue();
                    if ($isbnVal && $isbnVal !== '-') {
                        $sheet->getCell("B{$row}")->setValueExplicit($isbnVal, DataType::TYPE_STRING);
                    }
                }

                // Alignments & Text Wrapping
                $sheet->getStyle("A11:B{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("C11:C{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)->setVertical(Alignment::VERTICAL_CENTER)->setWrapText(true);
                $sheet->getStyle("D11:E{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("F11:L{$lastDataRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);

                // 7. Footer Total Row
                $summaryRow = $lastDataRow + 1;
                $sheet->mergeCells("A{$summaryRow}:F{$summaryRow}");
                $sheet->setCellValue("A{$summaryRow}", "TOTAL REKAPITULASI SELURUH BUKU :");
                $sheet->setCellValue("G{$summaryRow}", "=SUM(G11:G{$lastDataRow})");
                $sheet->setCellValue("H{$summaryRow}", "=SUM(H11:H{$lastDataRow})");
                $sheet->setCellValue("I{$summaryRow}", "=SUM(I11:I{$lastDataRow})");
                $sheet->setCellValue("J{$summaryRow}", "=SUM(J11:J{$lastDataRow})");
                $sheet->setCellValue("K{$summaryRow}", "=SUM(K11:K{$lastDataRow})");
                $sheet->setCellValue("L{$summaryRow}", "=SUM(L11:L{$lastDataRow})");

                $sheet->getStyle("A{$summaryRow}:L{$summaryRow}")->getFont()->setBold(true)->getColor()->setRGB('0F172A');
                $sheet->getStyle("A{$summaryRow}:F{$summaryRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_RIGHT)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("G{$summaryRow}:L{$summaryRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER)->setVertical(Alignment::VERTICAL_CENTER);
                $sheet->getStyle("A{$summaryRow}:L{$summaryRow}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('E2E8F0');
                $sheet->getStyle("A{$summaryRow}:L{$summaryRow}")->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->getColor()->setRGB('94A3B8');
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

                $sheet->setCellValue("J{$sigDateRow}", "Ciomas, " . now()->translatedFormat('d F Y'));
                $sheet->setCellValue("J{$sigTitleRow}", "Petugas Administrator");
                $sheet->setCellValue("J{$sigSpaceRow}", "( " . $this->adminName . " )");
                $sheet->setCellValue("J{$sigNipRow}", "Petugas Pengelola Koleksi");
                $sheet->getStyle("J{$sigSpaceRow}")->getFont()->setBold(true)->setUnderline(true);
                $sheet->getStyle("J{$sigNipRow}")->getFont()->setSize(9)->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color('475569'));

                // Explicit Column Widths (Print-Optimized Dimensions)
                $sheet->getColumnDimension('A')->setAutoSize(false)->setWidth(6);
                $sheet->getColumnDimension('B')->setAutoSize(false)->setWidth(16);
                $sheet->getColumnDimension('C')->setAutoSize(false)->setWidth(34);
                $sheet->getColumnDimension('D')->setAutoSize(false)->setWidth(22);
                $sheet->getColumnDimension('E')->setAutoSize(false)->setWidth(16);
                $sheet->getColumnDimension('F')->setAutoSize(false)->setWidth(14);
                $sheet->getColumnDimension('G')->setAutoSize(false)->setWidth(15);
                $sheet->getColumnDimension('H')->setAutoSize(false)->setWidth(16);
                $sheet->getColumnDimension('I')->setAutoSize(false)->setWidth(22);
                $sheet->getColumnDimension('J')->setAutoSize(false)->setWidth(18);
                $sheet->getColumnDimension('K')->setAutoSize(false)->setWidth(14);
                $sheet->getColumnDimension('L')->setAutoSize(false)->setWidth(16);

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
                $headerFooter->setOddHeader('&L&BPERPUSTAKAAN LIBRAZ - REKAP KOLEKSI BULANAN&B&R&BPeriode: ' . $periodName . '&B');
                $headerFooter->setOddFooter('&LSistem Informasi Perpustakaan Digital Libraz &C&RHal &P dari &N');
            }
        ];
    }
}

