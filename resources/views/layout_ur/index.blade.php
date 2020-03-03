<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Demo Laravel</title>

    <!-- Favicon -->
    <link rel="icon" href="asset/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="asset/style.css">

</head>
<body>


{{--Header--}}
@include('layout_ur.header')


{{--CONTENT--}}
@yield('contents')

{{--FOLLOW IG--}}
@include('layout_ur.follow-ig')
{{--Footer--}}
@include('layout_ur.footer')




<script src="asset/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="asset/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="asset/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="asset/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="asset/js/active.js"></script>
@yield('script')

</body>

</html>