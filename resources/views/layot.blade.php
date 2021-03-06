<!doctype html>
<html lang="ru">
<head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href='img/icon.png' type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<!-- *****************Header************** -->
@include('layots.header')
{{----------------------sendmail modal window-------------------}}
@include('layots.mail')
<!-- ***************content****************************** -->
<main>

    @yield('content')

</main>
<!-- ******************footer************************ -->

@include('layots.footer')

{{--connections//////////////////////////--}}

<link rel="stylesheet" href='css/style.css'>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href='css/bootstrap.min.css'>
<!-- fonts -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
{{--<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>--}}
<!-- Animate CSS + WoW.JS -->
<link rel="stylesheet" href='css/animate.css'>
<script src='js/wow.min.js'></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='js/jquery-3.2.1.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src='js/bootstrap.min.js'></script>
<script src='js/script.js'></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcQMSM28AVgOM92kGziX8UQjjBO5AhqEU&callback=initMap"
        async defer></script>

</body>
</html>