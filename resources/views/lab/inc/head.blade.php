<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title> Dashboard   </title>
    <link rel="apple-touch-icon" href="{{ $setting->favicon }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ $setting->favicon }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    @if(LaravelLocalization::getCurrentLocale() == 'en')

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/font-awesome-line-awesome/css/all.min.css"   />
    <link rel="stylesheet" type="text/css" href="{{ asset('main/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/pages/timeline.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/plugins/file-uploaders/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/pages/dashboard-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/fonts/feather/style.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/style.css')}}">

    @else

    <link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css-rtl/plugins/forms/switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css-rtl/core/colors/palette-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css-rtl/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css-rtl/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css-rtl/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css-rtl/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css-rtl/custom-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css-rtl/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/style-rtl.css')}}">
@endif
    @stack('css')
  </head>
