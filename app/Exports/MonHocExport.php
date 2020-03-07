<?php

namespace App\Exports;

use App\monhoc;
use Maatwebsite\Excel\Concerns\FromCollection;

class MonHocExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return monhoc::all();
    }
}
