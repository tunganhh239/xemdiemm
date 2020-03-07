<?php

namespace App\Http\Controllers;

use App\Imports\SinhVienImport;
use App\Imports\ThisImport;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

//import diem controller
class xemdiemController extends Controller
{
    public function index()
    {
       $data= DB::table('this')
            ->join('monhocs','this.mmh','=','monhocs.mmh')
            ->join('sinhviens','this.msv','=','sinhviens.msv')
            ->select('monhocs.*','sinhviens.*','this.diem_cc','this.diem_tbkt','this.diem_btl','this.diem_thi','this.diem_tk','this.xeploai','this.note')
            ->paginate(10);
       return view('importDiem',compact('data'));
    }

    public function import(Request $request){
        $request->validate([
            'file' => 'required|mimes:xlsx',

        ]);
        Excel::import(new ThisImport,request()->file('file'));
        return back();
    }
}
