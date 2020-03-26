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
            .back {
                position: fixed;
                padding: 0;
                margin: 0;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: white;
                animation-name: backdiv;
                animation-duration: 1s;
                animation-iteration-count: infinite;
                z-index: -2;
              }

              .heart {
                position: absolute;
                margin: auto;
                top: 800px;
                right: 0;
                bottom: 0;
                left: 0;
                background-color: pink;
                height: 50px;
                width: 50px;
                transform: rotate(-45deg);
                animation-name: beat;
                animation-duration: 1s;
                 animation-iteration-count: infinite;
                 z-index: -1;
              }
              .heart:after {
                background-color: pink;
                content: "";
                border-radius: 50%;
                position: absolute;
                width: 50px;
                height: 50px;
                top: 0px;
                left: 25px;
              }
              .heart:before {
                background-color: pink;
                content: "";
                border-radius: 50%;
                position: absolute;
                width: 50px;
                height: 50px;
                top: -25px;
                left: 0px;
              }

              @keyframes backdiv {
                50% {
                  background: #ffe6f2;
                }
              }

              @keyframes beat {
                0% {
                  transform: scale(1) rotate(-45deg);
                }
                50% {
                  transform: scale(0.6) rotate(-45deg);
                }
              }
    </style>
</head>
<body>
    <div id="content">
        <h1 id="tieude">Trang xem điểm thi nhanh nhất</h1>
        <div class="comment">Được cập nhật từ trang của trung tâm khảo thí</div>
        <img src="{{asset('images/la.png')}}" alt="">
        <br>
        <br>
        <br>

        <div class="back"></div>
        <div class="heart"></div>
    </div>
</body>
@endsection
