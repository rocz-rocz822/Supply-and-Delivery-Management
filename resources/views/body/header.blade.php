    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top">
      <div class="navbar-branding">
    <!-- Logo -->
        <a class="navbar-brand" href="{{route('dashboard')}}">
          <img class="upperlogo" src="{{ asset('admin/images/logo/logo.png')}}" alt="COMET.AL" width="135">
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>

    <!-- Full Screen -->
      <ul class="nav navbar-nav navbar-left">
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>

    <!-- Notifications -->
     <ul class="nav navbar-nav navbar-right">
        {{-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('+sup')}}#">
            <span class="glyphicon glyphicon-bell fs18"></span>
          </a>
          <ul class="dropdown-menu media-list w350 animated animated-shorter fadeIn" role="menu">
            <li class="dropdown-header">
              <span class="dropdown-title"> Notifications</span>
              <span class="label label-warning">3</span>
            </li>
          </ul>
        </li> --}}

     <!-- Admin Info -->
        <li class="dropdown">
          <a class="dropdown-toggle fw600 p15" data-toggle="dropdown">
            <img src="{{ asset('admin/images/faces/Milan.jpg')}}" alt="avatar" class="mw30 br64 mr15">
                <b class="surnamebold">Admin</b>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="list-group-item">
                <i class="mdi mdi-logout text-primary"></i>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Log Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
          </ul>
        </li>
      </ul>

    </header>
    <!-- End: Header -->
