<?php

namespace App\Exports;

use App\Exports\Sheets\LaporanBulananKoleksiSheet;
use App\Exports\Sheets\LaporanBulananTransaksiSheet;
use Maatwebsite\Excel\Concerns\Export;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class LaporanBulananExport implements WithMultipleSheets, Export
{
    protected int $month;
    protected int $year;
    protected string $adminName;

    public function __construct(int $month, int $year, string $adminName = 'Administrator')
    {
        $this->month = $month;
        $this->year = $year;
        $this->adminName = $adminName;
    }

    public function sheets(): array
    {
        return [
            new LaporanBulananKoleksiSheet($this->month, $this->year, $this->adminName),
            new LaporanBulananTransaksiSheet($this->month, $this->year, $this->adminName),
        ];
    }
}

