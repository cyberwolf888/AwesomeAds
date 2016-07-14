<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{{ url('/assets/master/img/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ url('/assets/master/img/favicon-32x32.png') }}" sizes="32x32">

    <title>Awesome Ad - Login Page</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href=""/>
    {!! Helper::registerCss("/master/bower_components/uikit/css/uikit.almost-flat.min.css") !!}
    <!-- altair admin login page -->
    {!! Helper::registerCss("/master/css/login_page.min.css") !!}

</head>
<body class="login_page">

<div class="login_page_wrapper">
    @yield('content')
</div>

<!-- common functions -->
{!! Helper::registerJs("/master/js/common.min.js") !!}
<!-- uikit functions -->
{!! Helper::registerJs("/master/js/uikit_custom.min.js") !!}
<!-- altair core functions -->
{!! Helper::registerJs("/master/js/altair_admin_common.min.js") !!}

<!-- altair login page functions -->
{!! Helper::registerJs("/master/js/pages/login.min.js") !!}

<script>
    // check for theme
    if (typeof(Storage) !== "undefined") {
        var root = document.getElementsByTagName( 'html' )[0],
                theme = localStorage.getItem("altair_theme");
        if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
            root.className += ' app_theme_dark';
        }
    }
</script>
</html>