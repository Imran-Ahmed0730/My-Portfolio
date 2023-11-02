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

<div class="container-fluid">
    <div class="row header">
        <div class="col-md-12">
            @include('front-end.include.header')
        </div>
    </div>

    <main>
       <div class="container">
           @yield('content')
       </div>
    </main>

    <div class="row footer">
        <div class="col-md-12">
            @include('front-end.include.footer')
        </div>
    </div>

</div>
@include('front-end.include.script')
</body>
</html>
