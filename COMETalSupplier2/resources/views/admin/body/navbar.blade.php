<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
            
            <!-- Logo -->
            <a class="navbar-brand brand-logo" 
               href="/dashboard">
                <img class="upperlogo" 
                     src="{{ asset('admin/images/logo/logo.png') }}" 
                     alt="logo" 
                     style="width: 170px; height: 31px;"/>
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
            <span class="nav-profile-name">{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

            <!-- Profile -->
            <a class="dropdown-item">
            <i class="mdi mdi-account-circle text-primary"></i>
            Profile
            </a>

            <!-- Settings -->
            <a class="dropdown-item">
            <i class="mdi mdi-settings text-primary"></i>
            Settings
            </a>

            <!-- Logout -->
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            <i class="mdi mdi-logout text-primary"></i> {{ __('Log Out') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
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