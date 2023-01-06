<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset("assets-dash/images/logo-icon.png")}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{_(env("APP_NAME"))}}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li>
                    <a href="index.html"><i class="bx bx-right-arrow-alt"></i>overview</a>
                </li>
            </ul>
        </li>
        
        <x-User.Sidebar.Profile />

        <li class="menu-label">UI Elements</li>
        <li>
            <a href="widgets.html">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Widgets</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
