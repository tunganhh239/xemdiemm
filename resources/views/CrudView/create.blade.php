@extends('layoutFinal')

@section('main')
    <form action="{{route('monhoc.store') }}" method="post" enctype="multipart/form-data" class="container" style="margin-top:5px;">
        @csrf
        <div class="form-group">
            <label>Mã môn</label>
            <input name="mmh" placeholder="Mã môn" class="form-control input-lg">
        </div>
        <div class="form-group">
            <label>Tên môn học</label>
            <input name="ten_mh" placeholder="Tên môn" class="form-control input-lg">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
