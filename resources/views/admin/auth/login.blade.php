<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Login  </title>
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/plugins/forms/switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/core/colors/palette-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/pages/login-register.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/assets/css/style.css')}}">


  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-color="bg-gradient-x-purple-red" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="text-center mb-1">
                            <img src="{{ $setting->logo }}" alt="branding logo">
                    </div>
                    <div class="font-large-1  text-center">
                        Member Login
                    </div>
                </div>
                <div class="card-content">

                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('dashboard.postlogin') }}" novalidate method="POST">
                            @csrf

                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="email" class="form-control round" id="user-name" placeholder="Your email" name="email" required>
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                            </fieldset>

                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control round" id="user-password" name="password" placeholder="Enter Password" required>
                                <div class="form-control-position">
                                    <i class="ft-lock"></i>
                                </div>
                            </fieldset>

                            <div class="form-group row">
                                <div class="col-md-6 col-12 text-center text-sm-left">

                                </div>

                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Login</button>
                            </div>

                        </form>
                    </div>


                 </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <script src="{{ asset('main/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('main/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('main/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('main/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript"></script>
    <script src="{{ asset('main/js/core/app-menu.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('main/js/core/app.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('main/js/scripts/forms/form-login-register.min.js')}}" type="text/javascript"></script>

  </body>

 </html>
