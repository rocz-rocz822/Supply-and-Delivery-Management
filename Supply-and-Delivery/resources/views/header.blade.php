    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top">
      <div class="navbar-branding">
    <!-- Logo -->
        <a class="navbar-brand" href="{{url('employee_dashboard')}}">          
          <img class="upperlogo" src="assets/img/logos/logo.png" alt="COMET.AL" width="150">
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
        
    <!-- Full Screen -->
      <ul class="nav navbar-nav navbar-left">
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="{{url('employee_dashboard')}}#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>

     <!-- Admin Info -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="{{url('employee_dashboard')}}#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <img src="assets/img/avatars/Sto. Domingo.jpg" alt="avatar" class="mw30 br64 mr15"> <b class="surnamebold">Admin</b>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">


<!-- hrefs to be changed -->
            <li class="list-group-item">
              <a href="{{url('/')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-power-off"></span> Logout </a>
            </li>
          </ul>
        </li>
      </ul>

    </header>
    <!-- End: Header -->