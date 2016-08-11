<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Easymanage @yield('title')</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

    {{-- CSS Sheets --}}
    <link rel="stylesheet" href="assets/land/css/normalize.min.css">
    <link rel="stylesheet" href="assets/land/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/land/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/land/css/flexslider.css">
    <link rel="stylesheet" href="assets/land/css/styles.css">
    <link rel="stylesheet" href="assets/land/css/queries.css">
    <link rel="stylesheet" href="assets/land/css/etline-font.css">
    <link rel="stylesheet" href="assets/land/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    {{-- Scripts --}}
    <script src="assets/land/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


<section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="{{ route('public.home')  }}"><img src="assets/backend/img/logo.png" alt="easymanage logo" height="35" width="220"></a></div>
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <li><a href="#features">Features</a></li>
                                <li><a href="#assets">Assets</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#download">Download</a></li>
                            </ul>

                            <ul class="member-actions">

                                {{--Check if Login or render drop down--}}
                                @include('...includes.checklogin')

                            </ul>

                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>

        <div class="container">
            {{--<div class="row">--}}
                {{--<div class="col-md-10 col-md-offset-1">--}}
                    {{--<div class="hero-content text-center">--}}
                        {{--<h1>Design, collaborate, win!</h1>--}}
                        {{--<p class="intro">Introducing “Sedna”. A responsive one page website, designed & developed by Peter Finlan, exclusively for Codrops.</p>--}}
                        {{--<a href="#" class="btn btn-fill btn-large btn-margin-right">Download</a> <a href="#" class="btn btn-accent btn-large">Learn more</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

            @yield('content')

        <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
    </section>



     <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="footer-links">
                            <ul class="footer-group">
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Sign up</a></li>
                                {{--<li><a href="http://tympanus.net/codrops/licensing/">Licence</a></li>--}}
                                {{--<li><a href="http://tympanus.net/codrops/">Codrops</a></li>--}}
                                {{--<li><a href="http://www.peterfinlan.com/">Peter Finlan</a></li>--}}
                            </ul>
                            <p>Copyright © 2015 <a href="#">Easymanage.in</a><br>
                            <a href="http://easymanage.in/license">Licence</a> | Crafted with <span class="fa fa-heart pulse2"></span> by <a href="http://www.techkaps.com/">Techkaps</a>.</p>
                        </div>
                    </div>

                    <div class="social-share">
                        <p>Share easymanage with your friends</p>
                        <a href="https://twitter.com/techkapsofficial" class="twitter-share"><i class="fa fa-twitter"></i></a> <a href="#" class="facebook-share"><i class="fa fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="assets/land/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
            <script src="assets/land/bower_components/retina.js/dist/retina.js"></script>
            <script src="assets/land/js/jquery.fancybox.pack.js"></script>
            <script src="assets/land/js/vendor/bootstrap.min.js"></script>
            <script src="assets/land/js/scripts.js"></script>
            <script src="assets/land/js/jquery.flexslider-min.js"></script>
            <script src="assets/land/bower_components/classie/classie.js"></script>
            <script src="assets/land/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>