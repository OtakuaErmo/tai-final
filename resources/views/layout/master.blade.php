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


    <ul class="nav justify-content-end">
        <li class="nav-item ">[<a class="text-info" href="#bottom">Bottom</a>]</li>
    </ul>
    <hr>

    <section id="top"></section>
        @yield('content')
    <section id="bottom"></section>

    <hr>
    <ul class="nav justify-content-end">
        <li class="nav-item ">[<a class="text-info" href="#top">Top</a>]</li>
    </ul>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>
