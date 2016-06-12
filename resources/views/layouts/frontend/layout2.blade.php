<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from seo-html.axiomthemes.com/features_pages_contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2016 17:19:44 GMT -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Awesome Ads | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{!! asset("/assets/frontend/images/icon/favicon.ico") !!}"/>
    <!--[if lt IE 9]>
    {!! Helper::registerJs("/frontend/js/vendor/html5.js") !!}
    <![endif]-->
    {!! Helper::registerCss("/frontend/css/_packed.css") !!}
    @stack('plugin_css')
    {!! Helper::registerCss("/frontend/css/fontello.css") !!}
    {!! Helper::registerCss("/frontend/css/style.css") !!}
    {!! Helper::registerCss("/frontend/css/shortcodes.css") !!}
    {!! Helper::registerCss("/frontend/css/general.css") !!}
    <style id="theme-skin-inline-css" type="text/css"></style>
    {!! Helper::registerCss("/frontend/css/responsive.css") !!}

</head>
<body class="page wide top_panel_above top_panel_opacity_solid theme_skin_general usermenu_hide">
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
                                    <a href="#">Register for FREE!</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="#">Support &#038; FAQ</a>
                                </li>
                                <li class="usermenu_login">
                                    <a href="#user-popUp" class="user-popup-link">Login</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menuUsItem menuItemLeft">
                            <span class="icon-phone"></span>
                            0800 123 4567
                            <span class="icon-email"></span>
                            <a href="#">
                                <span><span class="__cf_email__" data-cfemail="0e676068614e6b766f637e626b206d6163">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></span>
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
                        <div class="search" title="Open/close search form">
                        </div>
                        <a href="#" class="openResponsiveMenu">Menu</a>
                        @include('layouts.frontend.nav')
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="footerContentWrap">
            <footer class="footerWrap footerStyleDark">
                <div class="container footerWidget widget_area">
                    <aside class="col-md-4 col-sm-12 widgetWrap widget widget_text">
                        <h3 class="title">Follow us</h3>
                        <div class="textwidget">
                            <p>Don't miss our news, debates, and inspiring stories. Find us on social networks!
                            <ul class="sc_social">
                                <li>
                                    <a class="social_icons social_facebook" target="_blank" href="http://facebook.com/"> </a>
                                </li>
                                <li>
                                    <a class="social_icons social_pinterest" target="_blank" href="http://pinterest.com/"> </a>
                                </li>
                                <li>
                                    <a class="social_icons social_twitter" target="_blank" href="http://twitter.com/"> </a>
                                </li>
                                <li>
                                    <a class="social_icons social_gplus" target="_blank" href="http://gplus.com/"> </a>
                                </li>
                                <li>
                                    <a class="social_icons social_linkedin" target="_blank" href="http://linkedin.com/"> </a>
                                </li>
                                <li>
                                    <a class="social_icons social_vimeo" target="_blank" href="http://vimeo.com/"> </a>
                                </li>
                            </ul>
                            <p>
                                <a href="http://themeforest.net/user/axiomthemes/portfolio">Axiom</a>
                                &copy; 2015 All rights reserved.
                                <a href="#">Terms of Use</a>
                                and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </aside>
                    <aside class="col-md-4 col-sm-6 widgetWrap widget widget_nav_menu">
                        <h3 class="title">General Information</h3>
                        <div class="menu-general-information-container">
                            <ul id="menu-general-information" class="menu">
                                <li class="menu-item ">
                                    <a href="#">Plans &#038; Pricing</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="#">Free SEO Tools</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="#">Support and FAQ</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="#">Blog &#038; Articles</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="#">Company &#038; Contact Info</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="#">Terms of Service</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="col-md-4 col-sm-6 widgetWrap widget widget_text">
                        <h3 class="title">Request a free quote</h3>
                        <div class="textwidget">
                            <p>Looking for SEO consultation?
                            <div class="sc_button sc_button_style_global sc_button_size_huge squareButton global huge">
                                <a href="#" class="">SEND REQUEST</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </footer>
        </div>
    </div>
</div>
<div id="preloader" class="preloader">
    <div class="preloader_image"></div>
</div>
{!! Helper::registerJs("/frontend/js/vendor/jquery.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/jquery-migrate.min.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/bootstrap.min.js") !!}
{!! Helper::registerJs("/frontend/js/custom/_main.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/_packed.js") !!}
{!! Helper::registerJs("/frontend/js/custom/shortcodes_init.js") !!}
{!! Helper::registerJs("/frontend/js/custom/_front.js") !!}
@stack('plugin_script')

@stack('page_script')
<script>
    $(document).ready(function() {
        $('.search').hide();
    })
</script>
</body>
</html>