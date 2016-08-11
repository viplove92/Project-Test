<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Script-Type" content="text/JavaScript" />
<meta charset="utf-8" />
<title>Easymanage @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

@include('includes.apple-logo')
<meta id="token" name="token" value="{{ csrf_token() }}">

@include('includes.cssimport')

<script type="text/javascript">
window.onload = function()
{
// fix for windows 8
if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="../assets/easy/pages/css/windows.chrome.fix.css" />'
}
</script>

</head>

<body class="fixed-header">

@include('includes.sidebar')

<!-- START PAGE-CONTAINER -->
<div class="page-container">
<!-- START PAGE HEADER WRAPPER -->

<!-- START HEADER -->
<div class="header ">

@include('includes.mobileresponsive')

@include('includes.blacklogo')

@include('includes.notificationbar')

@include('includes.searchbar')

</div>
</div>

{{--@include('includes.pullright')--}}

    <div class=" pull-right">
        @include('includes.userinfo')
    </div>
</div>
<!-- END HEADER -->
<!-- END PAGE HEADER WRAPPER -->

<!-- START PAGE CONTENT WRAPPER -->
<div class="page-content-wrapper">
<!-- START PAGE CONTENT -->
<div class="content">

<!-- START CONTAINER FLUID -->
<div class="container-fluid container-fixed-lg">
<!-- BEGIN PlACE PAGE CONTENT HERE -->

    @yield('content')

<!-- END PLACE PAGE CONTENT HERE -->
</div>
<!-- END CONTAINER FLUID -->
</div>
<!-- END PAGE CONTENT -->

@include('includes.brandfooter')

</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->

{{--@include('includes.quickviewchat')--}}

{{--@include('includes.searchoverlay')--}}

{{-- import JavaScripts--}}
@include('includes.jsimport')

@yield('footer')

</body>
</html>