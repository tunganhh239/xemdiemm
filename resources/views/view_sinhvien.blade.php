@extends('layoutFinal')

@section('main')
  <body>

  <div class="container box">
   <h3 align="center">Thông tin sinh viên</h3><br />
   <div class="panel panel-default">

    <div class="panel-body">
        @foreach ($data as $row)
            <div class="">tên sinh viên: {{ $row->ho." ".$row->ten }}</div>
            @break
        @endforeach

     <div class="table-responsive">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                 <th>Môn</th>
                 <th>Điểm chuyên cần</th>
                 <th>Điểm trung bình kiểm tra</th>
                 <th>Điểm bài tập lớn</th>
                 <th>Điểm thi</th>
                 <th>Điểm tổng kết</th>
                 <th>Xếp loại</th>
                 <th>Ghi chú</th>
                </tr>
               </thead>
               <tbody>
             @foreach($data as $row)
                <tr>
                 <td>{{ $row->ten_mh }}</td>
                 <td>{{ $row->diem_cc }}</td>
                 <td>{{ $row->diem_tbkt }}</td>
                 <td>{{ $row->diem_btl }}</td>
                 <td>{{ $row->diem_thi }}</td>
                 <td>{{ $row->diem_tk }}</td>
                 <td>{{ $row->xeploai }}</td>
                 <td>{{ $row->note }}</td>
                </tr>
             @endforeach
               </tbody>
        </table>


     </div>
    </div>
   </div>
  </div>
</body>
@endsection
