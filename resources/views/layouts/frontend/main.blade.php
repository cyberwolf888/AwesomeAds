<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Awesome Ad | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{!! asset("/assets/frontend/images/icon/favicon.ico") !!}"/>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <!--[if lt IE 9]>
        {!! Helper::registerJs("/frontend/js/vendor/html5.js") !!}
    <![endif]-->
    {!! Helper::registerCss("/frontend/css/_packed.css") !!}
    {!! Helper::registerCss("/frontend/js/vendor/revslider/css/settings.css") !!}
    {!! Helper::registerCss("/frontend/css/fontello.css") !!}
    {!! Helper::registerCss("/frontend/css/style.css") !!}
    {!! Helper::registerCss("/frontend/css/shortcodes.css") !!}
    {!! Helper::registerCss("/frontend/css/general.css") !!}
    <style id="theme-skin-inline-css" type="text/css"></style>
    {!! Helper::registerCss("/frontend/css/responsive.css") !!}
    @stack('plugin_css')
</head>
<body class="home page wild top_panel_above top_panel_opacity_transparent theme_skin_general usermenu_show">
<!--[if lt IE 9]>
<div class="sc_infobox sc_infobox_style_error">
    <div style="text-align:center;">It looks like you're using an old version of Internet Explorer. For the best WordPress experience, please <a href="http://microsoft.com" style="color:#191919">update your browser</a> or learn how to <a href="http://browsehappy.com" style="color:#222222">browse happy</a>!</div>
</div>	<![endif]-->
<div class="main_content">
    <div class="boxedWrap">
        <header class="noFixMenu menu_right with_user_menu no_container_padding">
            <div class="topWrapFixed"></div>
            <div class="topWrap">
                <div class="usermenu_area">
                    <div class="container">
                        <div class="menuUsItem menuItemRight">
                            <ul class="usermenu_list" id="usermenu">
                                <li class="menu-item ">
                                    <a href="{!! url('/faq') !!}">Support &#038; FAQ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menuUsItem menuItemLeft">
                            <span class="icon-phone"></span>
                            082 247 464196
                            <span class="icon-email"></span>
                            <a href="#">
                                <span><span class="__cf_email__" data-cfemail="bad3d4dcd5fadfc2dbd7cad6df94d9d5d7">awesome.advertiser8@gmail.com</span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mainmenu_area">
                    <div class="container with_logo_left">
                        <div class="logo logo_left">
                            <a href="{!! url('/') !!}">
                                <img src="{!! asset("/assets/logo-web-300-min.png") !!}" class="logo_main" alt="">
                                <img src="{!! asset("/assets/logo-web-300-min.png") !!}" class="logo_fixed" alt="">
                                <span class="logo_slogan"></span>
                            </a>
                        </div>
                        <a href="#" class="openResponsiveMenu">Menu</a>
                        @include('layouts.frontend.nav')
                    </div>
                </div>
            </div>
        </header>

@yield('content')

        <div class="footerContentWrap">
            @include('layouts.frontend.footer')
        </div>
    </div>
</div>
<div id="preloader" class="preloader">
    <div class="preloader_image"></div>
</div>
{!! Helper::registerJs("/frontend/js/vendor/jquery.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/jquery-migrate.min.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/bootstrap.min.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/revslider/js/jquery.themepunch.tools.min.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/revslider/js/jquery.themepunch.revolution.min.js") !!}
{!! Helper::registerJs("/frontend/js/custom/_main.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/_packed.js") !!}
{!! Helper::registerJs("/frontend/js/custom/shortcodes_init.js") !!}
{!! Helper::registerJs("/frontend/js/custom/_front.js") !!}
@stack('plugin_script')

@stack('page_script')
</body>
</html>