<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xem điểm ptit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e086935aa2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <style>
        .header-item{
            float: right;
            padding-top: 10px;
        }
        .header{
            position: relative;
            padding: 10px 10px;
            background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
            height: 250px;

        }
        .header a{
            padding: 10px;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            color:whitesmoke;
            border-radius: 5px;
        }

        .header-item a:hover{
            background-color: #FFDEAD;

        }
        .logo img{
            width: 50px;
            height: 50px;
        }
        div .search-bar {
            position: absolute;
            top: 60%;
            left: 50%;
            height: 50px;
            border-radius: 40px;
            padding: 10px;
            background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
            color: #fad0c4;
            transform: translate(-50%, -50%);
            width: 700px;
            z-index:1;
        }


        .search-logo{
            float: right;
            justify-content: center;
            align-items: center;

        }
        .search-txt{
            border: none;
            background:none;

            float:left;
            font-size: 20px;
            width: 620px;

        }
        ::placeholder{
            color: #fad0c4;
        }

        .item{
            border: groove ;
            border-color: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
            color: #FFF0F5;
            border-radius: 30px;
            padding: 10px;
        }

        #lalala{
            position: absolute;
            border: none;
            border-top: none;
            border-bottom: none;
            border-radius: 30px;
            width: 700px;
            top: 100%;
            left: 0%;
            box-shadow: 0 4px 6px 0;
            background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);

        }

        footer{
            background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
        }


    </style>

</head>
<body>
    <div class="header">
        <a href="{{route('home')}}" class="logo"><img src="{{asset('images/ptit.png')}}" alt="Ảnh logo"></a>
        <div class="header-item">
            <a href="{{route('importdiem')}}">Import điểm</a>
            <a href="{{route('home').'\monhoc'}}">Import môn</a>
            <a href="{{route('importsinhvien')}}">Import sinhvien</a>
        </div>
        <h3 align="center">Total Data : <span id="total_records"></span></h3>
          <div class="search-bar">
            <input type="text" name="search" class="search-txt" id="searchh" placeholder="Nhập tên hoặc mã sinh viên vào đây">
            <div class="search-logo"><i class="fas fa-search-plus"></i></div>
            <div id="lalala">

            </div>

          </div>


    </div>

        <div>
            @yield('main')
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small indigo">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!">Very long link 1</a>
                </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!">Link 1</a>
                </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!">Link 1</a>
                </li>
                </ul>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!">Link 1</a>
                </li>
                </ul>

            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

        </footer>
<!-- Footer -->
</body>
</html>

<script>
    $(document).ready(function(){

     fetch_data();

     function fetch_data(query = '')
     {
      $.ajax({
       url:"{{ route('tk') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('#lalala').html(data.table_data);
        $('#total_records').text(data.total_data);

       }
      })
     }

     $(document).on('keyup', '#searchh', function(){
      var query = $(this).val();
      fetch_data(query);
     });
    });
    </script>
