<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Tour</title>
    <base href="{{asset('')}}">

    <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
    <script>
        new WOW().init();
    </script>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesomes.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/mytour.css" type="text/css">

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mytour.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            if($('span').hasClass('loiSodienthoai') || $('div').hasClass('loiDangKyKhach') || $('div').hasClass('thanhcongkhach')){
                $('#DangKyKhach').modal();
            }
            if($('span').hasClass('loiSodienthoaiHDV') || $('div').hasClass('loiDangKyHDV') || $('div').hasClass('thanhconghdv')){
                $('#DangKyHDV').modal();
            }
            if($('div').hasClass('loiLogin') || $('div').hasClass('loiDangNhap')){
                $('#DangNhap').modal();
            }
        }); 
    </script>
    

</head>
<body class="stretched no-transition no-superfish device-touch">

	@include('client.layout_client.header_client')
    @include('client.layout_client.modal_client')
    @yield('content')   
    
</body>
</html>