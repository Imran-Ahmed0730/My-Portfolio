
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from mannatthemes.com/metrica/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 10:04:32 GMT -->
<head>


    <meta charset="utf-8" />
    <title>Metrica - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}/admin-assets/assets/images/favicon.ico">



    <!-- App css -->
    <link href="{{asset('/')}}/admin-assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}/admin-assets/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}/admin-assets/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-image: url('{{asset('/')}}/admin-assets/assets/images/p-1.png'); background-size: cover; background-position: center center;">
<!-- Log In page -->
<div class="container-md">
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="#" class="logo logo-admin">
                                        <img src="{{asset('/')}}/admin-assets/assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started Metrica</h4>
                                    <p class="text-muted  mb-0">Sign up to continue to Metrica.</p>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form class="my-4" action="{{route('register')}}" method="post">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="useremail">Email Address</label>
                                        <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter Email Address">
                                    </div><!--end form-group-->

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                    </div><!--end form-group-->

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="Confirmpassword">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="Confirmpassword" placeholder="Enter Confirm password">
                                    </div><!--end form-group-->


                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="d-grid mt-3">
                                                <button class="btn btn-primary" type="submit">Sign Up <i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                                <div class="m-3 text-center text-muted">
                                    <p class="mb-0">Already have an account ? <a href="{{route('login')}}" class="text-primary ms-2">Log in</a></p>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->
<!-- vendor js -->

<script src="{{asset('/')}}/admin-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}/admin-assets/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}/admin-assets/assets/libs/feather-icons/feather.min.js"></script>
<!-- App js -->
<script src="{{asset('/')}}/admin-assets/assets/js/app.js"></script>

</body>
</html>
