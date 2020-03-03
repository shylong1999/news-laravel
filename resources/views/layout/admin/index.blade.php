<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://project.dev.com/myproject/public/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="admin_asset/style.css">
</head>

<body>

    {{--Header--}}
    @include('layout.admin.header')


    {{--CONTENT--}}
    @yield('content')

    {{--Footer--}}
    @include('layout.admin.footer')



    <script type="text/javascript" language="JavaScript" src="admin_asset/ckeditor/ckeditor.js"></script>
    @yield('script')
</body>
</html>
