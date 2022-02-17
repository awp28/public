<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="{{ asset('assets/icons/logo_site.svg') }}">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Qashqadaryo</title>

    <link rel="stylesheet" href="{{ asset('/vendor/icofont/icofont.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> --}}
    @yield('css')
</head>
<body>
<div class="management">
<div class="container-fluid">
@include('front.layouts.includes.header-top')
@include('front.layouts.includes.header-main')
@include('front.layouts.includes.main_photo')
@yield('content')
@include('front.layouts.includes.footer')



</div>
</div>
@yield('js')
<script src="{{ asset('js/bootstrap.js')  }}"></script>
<script src="{{ asset('js/popper.min.js')  }}"></script>
<script src="{{ asset('js/jquery-3.3.1.slim.min.js')  }}"></script>
<script src="{{ asset('js/jquery-3.1.1.min.js')  }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
