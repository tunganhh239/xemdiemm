<?php

namespace App\Imports;

use App\monhoc;
use Maatwebsite\Excel\Concerns\ToModel;

class MonHocImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new monhoc([
            //
        ]);
    }
}
