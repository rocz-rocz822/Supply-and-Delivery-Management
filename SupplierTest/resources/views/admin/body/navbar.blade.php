<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-start">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">   
            <!-- Logo -->
            <a class="navbar-brand brand-logo" 
               href="{{ route('admin.index') }}">
                <img class="upperlogo" 
                     src="{{ asset('admin/images/logo/comet_al three.png') }}" 
                     alt="logo" 
                     style="margin: 0; width: 60px; height: 61px;"/>
                <b style="font-size: 24px;">COMET</b>
                .al</span>
            </a>
            <button class="navbar-toggler navbar-toggler align-self-center" 
                    type="button" 
                    data-toggle="minimize">
                <span class="mdi mdi-sort-variant"></span>
            </button>
        </div>  
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <!-- Header -->
        <ul class="navbar-nav navbar-nav-right">
            
            <!-- Profile -->
            <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="{{ asset('admin/images/faces/Milan.jpg') }}" alt="profile"/>
                <span class="nav-profile-name">Supplier Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">


                <!-- Logout -->
                <a href="{{route('login')}}" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i> 
                Log Out
                </a>
            </div>
            </li>
        </ul>

        <!-- Toggle Hide Sidebar Button -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" 
                type="button" 
                data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>