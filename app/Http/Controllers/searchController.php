<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Response;
use URL;

class searchController extends Controller
{
    function index()
    {
     return view('welcome');
    }

    function xemtrangcanhan(){
        return view('view_sinhvien');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('sinhviens')
         ->where('ten', 'like', '%'.$query.'%')
         ->orWhere('msv','like','%'.$query.'%')
         ->orWhere('ho','like','%'.$query.'%')->limit(10)
         ->get();


      }
      else
      {

      }
      $total_row = $data->count();
      $moe= url("/view/");
      if($total_row > 0)
      {
       foreach($data as $row)
       {

            // $output .='
            //     <a href="http://127.0.0.1:8000/view/'.$row->msv.' "> <li class="list-group-item">'.$row->ten.','.$row->msv.'</li> </a >
            // ';
            $output .='
                <a href="'.$moe.'/'.$row->msv.' "> <div class="item">'.$row->ho.' '.$row->ten.','.$row->msv.'</div> </a >
            ';
       }
      }
      else
      {
        $output .='
            <div class="item">Khong tim thay sinh vien</div>
        ';

      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      return Response($data);
     }
    }
}
