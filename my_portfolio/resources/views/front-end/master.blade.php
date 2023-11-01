<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('front-end.include.style')
</head>
<body>
@include('front-end.include.header')
<div class="container-fluid">

    <main>
        @yield('content')
    </main>

    @include('front-end.include.footer')

</div>
@include('front-end.include.script')
</body>
</html>
