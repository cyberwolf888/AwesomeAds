<div class="menu_section">
    <ul>
        <li title="Dashboard" class="@if(Route::currentRouteName()=='master.dashboard') current_section @endif">
            <a href="{{ route('master.dashboard') }}">
                <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                <span class="menu_title">Dashboard</span>
            </a>
        </li>
        <li title="Inquiry" class="@if(str_is('*.inquiry.*', Route::currentRouteName())) current_section @endif">
            <a href="{{ route('master.inquiry.index') }}">
                <span class="menu_icon"><i class="material-icons">&#xE8B0;</i></span>
                <span class="menu_title">Inquiry</span>
            </a>
        </li>
        <li title="Price" class="@if(Route::currentRouteName()=='master.price') current_section @endif">
            <a href="page_invoices.html">
                <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                <span class="menu_title">Price</span>
            </a>
        </li>
        <li title="Messages" class="@if(Route::currentRouteName()=='master.messages') current_section @endif">
            <a href="page_chat.html">
                <span class="menu_icon"><i class="material-icons">&#xE158;</i></span>
                <span class="menu_title">Messages</span>
            </a>
        </li>
        <li title="Article" class="@if(Route::currentRouteName()=='master.article') current_section @endif">
            <a href="page_user_profile.html">
                <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                <span class="menu_title">Article</span>
            </a>
        </li>
        <li title="User Profile" class="@if(Route::currentRouteName()=='master.profile') current_section @endif">
            <a href="page_user_profile.html">
                <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                <span class="menu_title">User Profile</span>
            </a>
        </li>
        <li title="Logout">
            <a href="{{ url('/logout') }}">
                <span class="menu_icon"><i class="material-icons">&#xE15E;</i></span>
                <span class="menu_title">Logout</span>
            </a>
        </li>
    </ul>
</div>