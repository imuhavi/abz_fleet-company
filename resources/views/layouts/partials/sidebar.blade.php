<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="#">
            <div class="logo-img">
                ABZ
               {{-- <img width="40" height="40" src="{{ asset('img/logo.png') }}" class="header-brand-img" alt="lavalite"> --}}
            </div>
            <span class="text">&nbsp; Fleet System</span>
        </a>
        {{-- <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button> --}}
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item active">
                    <a href=""><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                </div>
                
                <div class="nav-lavel">User</div>
                <div class="nav-item has-sub ">
                @auth
                    @role('admin')
                    <a href="javascript:void(0)"><i class="ik ik-user"></i><span>Manage Admins </span> </a>
                    <div class="submenu-content">
                        
                    </div>
                    @endrole
                @endauth
                </div>
                <div class="nav-item has-sub ">
                    <a href="javascript:void(0)"><i class="ik ik-users"></i><span>Manage Customers </span> </a>
                    <div class="submenu-content">
                        
                    </div>
                </div>
                <div class="nav-lavel">Vehicle</div>
                <div class="nav-item has-sub ">
                    <a href="#"><i class="ik ik-box"></i><span>Manage Category</span></a>
                    <div class="submenu-content">
                        <a href="" class="menu-item  ">Create</a>
                        <a href="" class="menu-item  ">List</a>
                    </div>
                </div>
                <div class="nav-item has-sub ">
                    <a href="#"><i class="ik ik-truck"></i><span>Register Vehicles</span> </a>
                    <div class="submenu-content">
                        
                        <a href="" class="menu-item  ">List</a>
                    </div>
                </div>

                <div class="nav-item has-sub {{ request()->routeIs('vehiclesIn*') || request()->routeIs('vehiclesOut*')  ? 'open' : ''}}">
                    <a href="#"><i class="ik ik-gitlab"></i><span>Manage Vehicles</span> </a>
                    <div class="submenu-content">
                        <a href="" class="menu-item  ">In Vehicles</a>
                        <a href="" class="menu-item  ">Out Vehicle</a>
                    </div>
                </div>
                @auth
                    @role('cashier')
                <div class="nav-lavel">Reports Section</div>
                <div class="nav-item has-sub">
                    <a href=""><i class="ik ik-edit"></i><span>Report</span></a>
                    {{-- <div class="submenu-content">
                        <a href="pages/form-components.html" class="menu-item">Components</a>
                        <a href="pages/form-addon.html" class="menu-item">Add-On</a>
                        <a href="pages/form-advance.html" class="menu-item">Advance</a>
                    </div> --}}
                </div>
                @endrole
                @endauth
            </nav>
        </div>
    </div>
</div>
