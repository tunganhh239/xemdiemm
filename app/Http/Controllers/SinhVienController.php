<?php

namespace App\Http\Controllers;

use App\Exports\SinhVienExport;
use App\Imports\SinhVienImport;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SinhVienController extends Controller
{
    public function index(){
        $data= DB::table('sinhviens')->paginate(10);
        return view('SinhVienImport',compact('data'));
    }

    public function import(Request $request){
        $request->validate([
            'file' => 'required|mimes:xlsx',

        ]);
        Excel::import(new SinhVienImport,request()->file('file'));
        return back();
    }

    public function export(){
        return Excel::download(new SinhVienExport,'sinhvien.xlsx');
    }
}
