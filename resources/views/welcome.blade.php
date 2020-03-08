@extends('layoutFinal')
@section('main')
<head>
    <style>
            #content{
                text-align: center;
                margin-top: 3%;
            }
            .comment{
                text-align: center;
            }
            img{
                width: 30%;
                height: 30%;
            }
    </style>
</head>
<body>
    <div id="content">
        <h1 id="tieude">Trang xem điểm thi nhanh nhất</h1>
        <div class="comment">Được cập nhật từ trang của trung tâm khảo thí</div>
        <img src="{{asset('images/la.png')}}" alt="">
        <a href="">ahihi</a>
    </div>
</body>
@endsection
