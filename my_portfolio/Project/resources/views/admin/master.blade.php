
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{asset('/')}}/admin-assets/assets/images/favicon.ico">
    @include('admin.include.style')
</head>
<body id="body">
<!-- leftbar-tab-menu -->
@include('admin.include.sidenavbar')
@include('admin.include.header')
<div class="page-wrapper">
    <div class="page-content-tab">
        <div class="container-fluid">
            @yield('content')
        </div>
        @include('admin.include.footer')
    </div>
</div>
@include('admin.include.script')
</body>
</html>
