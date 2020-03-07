@extends('layoutFinal')

@section('main')
<body>

<div class="container" style="margin-top:10px;">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card bg-light mt-3">
        <div class="card-header">
            Sinh viên ptit
        </div>
        <div class="card-body">
            <form action="{{ route('svimport') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Sinh Vien Data</button>
                <a class="btn btn-warning" href="{{ route('svexport') }}">Export Sinh Vien Data</a>
            </form>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                 <th>ma sinh vien</th>
                 <th>ho</th>
                 <th>Ten</th>
                </tr>
               </thead>
               <tbody>
               @foreach($data as $row)
                <tr>
                 <td>{{ $row->msv }}</td>
                 <td>{{$row->ho}}</td>
                 <td>{{ $row->ten }}</td>
                </tr>
               @endforeach
               </tbody>
        </table>
    </div>
</div>
{!! $data->links() !!}
</body>
@endsection
