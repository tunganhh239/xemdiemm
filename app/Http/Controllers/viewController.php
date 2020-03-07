<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index($id){

        $data= DB::table('this')
        ->join('monhocs','this.mmh','=','monhocs.mmh')
        ->join('sinhviens','this.msv','=','sinhviens.msv')
        ->select('monhocs.*','sinhviens.*','this.diem_cc','this.diem_tbkt','this.diem_btl','this.diem_thi','this.diem_tk','this.xeploai','this.note')
        ->where('this.msv','=',$id)
        ->get();
        return view('view_sinhvien',compact('data'));
    }
}
