<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('front-end.include.style')
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row m-5">
        <div class="col-md-4">
            <div class="row my-3">
                <div class="col-md-12">
                    <img src="{{asset('/')}}/front-end-assets/img/profile.png" alt="" class="rounded-circle" height="200px" width="200px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Contact Info</h3>
            </div>
        </div>
        <div class="col-md-8"></div>
    </div>
</div>
@include('front-end.include.script')
</body>
</html>
