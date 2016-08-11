<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Easymanage @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />

    {{--<link href="../assets/easy/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="../assets/easy/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="../assets/easy/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="../assets/easy/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />--}}
    {{--<link href="../assets/easy/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />--}}
    {{--<link href="../assets/easy/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />--}}
    {{--<link href="../assets/easy/pages/css/pages-icons.css" rel="stylesheet" type="text/css">--}}
    {{--<link class="main-stylesheet" href="../assets/easy/pages/css/pages.css" rel="stylesheet" type="text/css" />--}}

    {{-- import CSS--}}
    @include('includes.cssimport')


    <!--[if lte IE 9]>
        <link href="../assets/easy/pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="../assets/easy/pages/css/windows.chrome.fix.css" />'
    }
    </script>
    @yield('head')
</head>

  <body class="fixed-header   ">
    <!-- START PAGE-CONTAINER -->
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">

        <!-- START Background Pic-->
        <img src="../images/logo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src="../images/logo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src-retina="../images/logo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">
        <!-- END Background Pic-->

        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
					Easymanage make it easy to enjoy what matters the most in the life</h2>
          <p class="small">
            Everything is moving on cloud, why not Society and Home Management. Answer is easymanage. © {{ date("Y") }} TECHKAPS.
          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->

      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          {{--<img src="../images/logo.png" alt="logo" data-src="../images/logo.png" data-src-retina="../assets/img/logo_2x.png">--}}
          {{--{!! HTML::image('../images/easymanagelogo-black.png', 'logo', array( 'width' => 120, 'height' => 32 )) !!}--}}
          {!! HTML::image('../images/logo/easymanagelogo-black.png', 'logo') !!}



          @yield('content')

        </div>
      </div>
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- BEGIN VENDOR JS -->
    {{--<script src="../assets/easy/assets/plugins/pace/pace.min.js" type="text/javascript"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/modernizr.custom.js" type="text/javascript"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/jquery-bez/jquery.bez.min.js"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/jquery-actual/jquery.actual.min.js"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>--}}
    {{--<script type="text/javascript" src="../assets/easy/assets/plugins/bootstrap-select2/select2.min.js"></script>--}}
    {{--<script type="text/javascript" src="../assets/easy/assets/plugins/classie/classie.js"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>--}}
    {{--<script src="../assets/easy/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>--}}
    <!-- END VENDOR JS -->

    {{-- import JavaScripts--}}
    @include('includes.jsimport')


    <!-- BEGIN CORE TEMPLATE JS -->
    {{--<script src="../plugins/pages/js/pages.min.js"></script>--}}
    <!-- END CORE TEMPLATE JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    {{--<script src="../plugins/js/scripts.js" type="text/javascript"></script>--}}
    <!-- END PAGE LEVEL JS -->

    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>

    @yield('footer')

  </body>
</html>