<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" id="csrf-token" content="{{csrf_token()}}">
    <title>Интернет-магазин</title>
    <link rel="icon" type="image/x-icon" href="{{$header->favicon}}">
    <link rel="stylesheet" type="text/css" href="/template/styles/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/template/styles/css/styles.css">
    <script rel="script" type="text/javascript" src="/template/js/jQuery/jquery-3.1.0.js"></script>
    <script rel="script" type="text/javascript" src="/template/js/fixed_hover.js"></script>
    <script rel="script" type="text/javascript" src="/template/js/uploadProducts.js"></script>
    <script rel="script" type="text/javascript" src="/template/js/functions.js"></script>
</head>
<body>
<div class="wrapper-header">
    <div class="header-user">
        <div class="mid">
            <a href="{{route('admin')}}"><i class="fa fa-sign-in fa-lg"></i> Админпанель</a>
            <a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-lg"></i> На сайт</a>
        </div>
    </div>
    <div class="mid">
        <header class="header">

        </header>
    </div>
</div>
<div class="wrapper-content">
    <div class="mid">
        @yield('content')
    </div>
</div>
<div class="wrapper-footer">
    <div class="mid">
        <footer class="footer">

        </footer>
    </div>
</div>
</body>
</html>