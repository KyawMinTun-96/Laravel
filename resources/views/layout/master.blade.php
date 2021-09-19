<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- fontawsome -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>

    @include('layout.navbar')
    @yield('content')


    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    
</body>
</html>