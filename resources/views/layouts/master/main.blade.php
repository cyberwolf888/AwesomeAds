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

    <title>Master | @yield('title')</title>


    <!-- uikit -->
    {!! Helper::registerCss("/master/bower_components/uikit/css/uikit.almost-flat.min.css") !!}

    <!-- flag icons -->
    {!! Helper::registerCss("/master/icons/flags/flags.min.css") !!}

    <!-- style switcher -->
    {!! Helper::registerCss("/master/css/style_switcher.min.css") !!}

    <!-- altair admin -->
    {!! Helper::registerCss("/master/css/main.min.css") !!}

    <!-- themes -->
    {!! Helper::registerCss("/master/css/themes/themes_combined.min.css") !!}

    @stack('plugin_css')

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
    {!! Helper::registerJs("/master/bower_components/matchMedia/matchMedia.js") !!}
    {!! Helper::registerJs("/master/bower_components/matchMedia/matchMedia.addListener.js") !!}
    {!! Helper::registerCss("/master/css/ie.css") !!}
    <![endif]-->

    @stack('page_css')

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
<!-- main header -->
<header id="header_main">
    <div class="header_main_content">
        <nav class="uk-navbar">

            <!-- main sidebar switch -->
            <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                <span class="sSwitchIcon"></span>
            </a>

            <!-- secondary sidebar switch -->
            <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                <span class="sSwitchIcon"></span>
            </a>

            <div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
                <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                    <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                    <div class="uk-dropdown uk-dropdown-width-3">
                        <div class="uk-grid uk-dropdown-grid">
                            <div class="uk-width-2-3">
                                <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-bottom uk-text-center">
                                    <a href="page_mailbox.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-light-green-600">&#xE158;</i>
                                        <span class="uk-text-muted uk-display-block">Mailbox</span>
                                    </a>
                                    <a href="page_invoices.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-purple-600">&#xE53E;</i>
                                        <span class="uk-text-muted uk-display-block">Invoices</span>
                                    </a>
                                    <a href="page_chat.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-cyan-600">&#xE0B9;</i>
                                        <span class="uk-text-muted uk-display-block">Chat</span>
                                    </a>
                                    <a href="page_scrum_board.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-red-600">&#xE85C;</i>
                                        <span class="uk-text-muted uk-display-block">Scrum Board</span>
                                    </a>
                                    <a href="page_snippets.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-blue-600">&#xE86F;</i>
                                        <span class="uk-text-muted uk-display-block">Snippets</span>
                                    </a>
                                    <a href="page_user_profile.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-orange-600">&#xE87C;</i>
                                        <span class="uk-text-muted uk-display-block">User profile</span>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-width-1-3">
                                <ul class="uk-nav uk-nav-dropdown uk-panel">
                                    <li class="uk-nav-header">Components</li>
                                    <li><a href="components_accordion.html">Accordions</a></li>
                                    <li><a href="components_buttons.html">Buttons</a></li>
                                    <li><a href="components_notifications.html">Notifications</a></li>
                                    <li><a href="components_sortable.html">Sortable</a></li>
                                    <li><a href="components_tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav user_actions">
                    <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>

                    <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="user_action_image"><img class="md-user-image" src="{{ url('/assets/master/img/avatars/avatar_11_tn.png') }}" alt=""/></a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav js-uk-prevent">
                                <li><a href="page_user_profile.html">My profile</a></li>
                                <li><a href="page_settings.html">Settings</a></li>
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header><!-- main header end -->
<!-- main sidebar -->
<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="index-2.html" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="{{ url('/assets/logo-web-300-min.png') }}" alt="" height="15" width="71"/>
                <img class="logo_light" src="{{ url('/assets/logo-web-300-min.png') }}" alt="" height="15" width="71"/>
            </a>
            <a href="index-2.html" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="{{ url('/assets/logo-web-300-min.png') }}" alt="" height="32" width="32"/>
                <img class="logo_light" src="{{ url('/assets/logo-web-300-min.png') }}" alt="" height="32" width="32"/>
            </a>
        </div>
    </div>

    <!-- Menu -->
    @include('layouts.master.menu')
</aside><!-- main sidebar end -->

@yield('content')

<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:400,300,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<!-- common functions -->
{!! Helper::registerJs("/master/js/common.min.js") !!}
<!-- uikit functions -->
{!! Helper::registerJs("/master/js/uikit_custom.min.js") !!}
<!-- altair common functions/helpers -->
{!! Helper::registerJs("/master/js/altair_admin_common.min.js") !!}

@stack('plugin_script')

@stack('page_script')
<script>
    $(function() {
        if(isHighDensity) {
            // enable hires images
            altair_helpers.retina_images();
        }
        if(Modernizr.touch) {
            // fastClick (touch devices)
            FastClick.attach(document.body);
        }
    });
    $window.load(function() {
        // ie fixes
        altair_helpers.ie_fix();
    });
</script>
</body>
</html>