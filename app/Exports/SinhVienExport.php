<?php

namespace App\Exports;

use App\sinhvien;
use Maatwebsite\Excel\Concerns\FromCollection;

class SinhVienExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return sinhvien::all();
    }
}
