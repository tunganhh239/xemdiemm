@extends('layoutFinal')

@section('main')
<div class="container">
    <table class="table table-striped">
        <a href="{{route('monhoc.create')}}" class="btn btn-primary" style="margin:10px;">Thêm môn học</a>
        <thead>
          <tr>
            <th >Mã môn</th>
            <th >Tên môn học</th>
            <th >alallala</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
          <tr>

                <td>{{ $row->mmh }}</th>
                <td>{{ $row->ten_mh }}</td>


            <td>
                <a  class="btn btn-primary">Sửa</a>
                <form action="{{route('monhoc.destroy',$row->mmh)}}" method="POST" style="float:left;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>

            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
</div>

@endsection

