<?php

namespace App\Imports;

use App\sinhvien;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SinhVienImport implements ToModel,WithHeadingRow,SkipsOnError
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable,SkipsErrors;

    public function model(array $row)
    {

        return new sinhvien([
             'msv' => $row['msv'],
             'ho'  => $row['ho'],
             'ten' => $row['ten'],

        ]);


    }


}
