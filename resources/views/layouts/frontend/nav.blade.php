<nav role="navigation" class="menuTopWrap topMenuStyleLine">
    <ul id="mainmenu" class="">
        <li class="menu-item {{ Route::currentRouteName()=='home' ? 'current-menu-item current_page_item menu-item-home' : '' }}">
            <a href="{!! url('/') !!}">Home</a>
        </li>
        <li class="menu-item {{ Route::currentRouteName()=='pricing' ? 'current-menu-item current_page_item menu-item-home' : '' }}">
            <a href="{!! url('/pricing') !!}">Pricing</a>
        </li>
        <li class="menu-item {{ Route::currentRouteName()=='ads' ? 'current-menu-item current_page_item menu-item-home' : '' }}">
            <a href="{!! url('/placeads') !!}">Place An Ad</a>
        </li>
        <li class="menu-item {{ Route::currentRouteName()=='articles' ? 'current-menu-item current_page_item menu-item-home' : '' }}">
            <a href="{!! url('/articles') !!}">Articles</a>
        </li>
        <li class="menu-item {{ Route::currentRouteName()=='about' ? 'current-menu-item current_page_item menu-item-home' : '' }}">
            <a href="{!! url('/about') !!}">About Us</a>
        </li>
        <li class="menu-item {{ Route::currentRouteName()=='contact' ? 'current-menu-item current_page_item menu-item-home' : '' }}">
            <a href="{!! url('/contact') !!}">Contact Us</a>
        </li>
    </ul>
</nav>