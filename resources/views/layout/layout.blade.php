<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>@yield('page_title')</title>
</head>
<body>
    <div class="wrapper">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </div>
</body>
</html>
