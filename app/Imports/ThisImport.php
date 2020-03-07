<?php

namespace App\Imports;

use App\thi;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ThisImport implements ToModel,WithHeadingRow,SkipsOnError
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable, SkipsErrors;
    public function model(array $row)
    {
        return new thi([
            'msv' => $row['msv'],
            'mmh' => $row['mmh'],
            'diem_cc' => $row['diem_cc'],
            'diem_tbkt' => $row['diem_tbkt'],
            'diem_btl' =>   $row['diem_btl'],
            'diem_thi' => $row['diem_thi'],
            'diem_tk'  => $row['diem_tk'],
            'xeploai'  => $row['xeploai'],
            'note'     => $row['note'],
        ]);
    }
}
