<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('backend/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" type="image/x-icon">

    <title>DSA Academy</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/select2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/dropzone.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('backend/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/responsive.css')}}">
</head>

  <body onload="startTime()">
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"> <span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      @include('AdminDashboard.header')
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        @include('AdminDashboard.sidebar')

        <div class="page-body">
            @yield('content')
        </div>
        @include('AdminDashboard.footer')
      </div>
    </div>
    <!-- latest jquery-->
    <!-- JavaScript Files -->
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <script src="{{asset('backend/assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('backend/assets/js/scrollbar/custom.js')}}"></script>
    <script src="{{asset('backend/assets/js/config.js')}}"></script>
    <script src="{{asset('backend/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('backend/assets/js/sidebar-pin.js')}}"></script>
    <script src="{{asset('backend/assets/js/clock.js')}}"></script>
    <script src="{{asset('backend/assets/js/slick/slick.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/slick/slick.js')}}"></script>
    <script src="{{asset('backend/assets/js/header-slick.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart/apex-chart/moment.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/dashboard/default.js')}}"></script>
    <script src="{{asset('backend/assets/js/notify/index.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead/handlebars.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead/typeahead.custom.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead-search/handlebars.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead-search/typeahead-custom.js')}}"></script>
    <script src="{{asset('backend/assets/js/height-equal.js')}}"></script>
    <script src="{{asset('backend/assets/js/animation/wow/wow.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/script.js')}}"></script>

    <script src="{{asset('backend/assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('backend/assets/js/dropzone/dropzone-script.js')}}"></script>
    <script src="{{asset('backend/assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('backend/assets/js/editors/quill.js')}}"></script>
    <script src="{{asset('backend/assets/js/custom-add-product4.js')}}"></script>
    <script src="{{asset('backend/assets/js/form-validation-custom.js')}}"></script>

    <script src="{{asset('backend/assets/js/script.js')}}"></script>

    <script>new WOW().init();</script>
    @yield('script')

  </body>
</html>
