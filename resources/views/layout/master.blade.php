<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrap-->
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="sortcut icon" href="{{ url('img/main/ban-131994968036235681.png') }}" type="image/x-icon" />

    <title>Document</title>
</head>

<body class="bg-bg-home">

    <style>
        .img-responsive {
            max-width: 540px;
        }
    </style>
    <!--top-->
    <section id="top"></section>
    <!--/top-->

    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-card-headers">
            @yield('card-headers')
        </ol>
    </nav>
    <div class="d-flex justify-content-end mr-2">
        <a class="nav-item text-info" href="#bottom">[Bottom]</a>
    </div>

    <hr>


    @yield('header')
    @yield('content')


    <hr>
    <div class="nav justify-content-end mr-2">
        <a class="nav-item text-info" href="#top">[Top]</a>
    </div>
    <!--bottom-->
    <section id="bottom"></section>
    <!--/bottom-->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>
