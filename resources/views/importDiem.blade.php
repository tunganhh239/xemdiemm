@extends('layoutFinal')

@section('main')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger" style="margin-top:10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card bg-light mt-3">
        <div class="card-header">
            Điểm thi
        </div>
        <div class="card-body">
            <form action="{{route('import')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import to database</button>
            </form>
        </div>


        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                 <th>ma sinh vien</th>
                 <th>Ho sinh vien</th>
                 <th>ten sinh vien</th>
                 <th>ma mon hoc</th>
                 <th>ten mon hoc</th>
                 <th>Diem chuyen can</th>
                 <th>diem kiem tra</th>
                 <th>diem btl</th>
                 <th>diem thi</th>
                 <th>diem tk</th>
                 <th>Xếp loại</th>
                 <th>Ghi chú</th>
                </tr>
               </thead>
               <tbody>
               @foreach($data as $row)
                <tr>
                    <td>{{$row->msv}}</td>
                    <td>{{$row->ho}}</td>
                    <td>{{$row->ten}}</td>
                    <td>{{$row->mmh}}</td>
                    <td>{{$row->ten_mh}}</td>
                    <td>{{$row->diem_cc}}</td>
                    <td>{{$row->diem_tbkt}}</td>
                    <td>{{$row->diem_btl}}</td>
                    <td>{{$row->diem_thi}}</td>
                    <td>{{ $row->diem_tk }}</td>
                    <td>{{ $row->xeploai }}</td>
                    <td>{{ $row->note }}</td>
                </tr>
               @endforeach
               </tbody>
        </table>
</div>
</div>
   {!! $data->links() !!}
@endsection
