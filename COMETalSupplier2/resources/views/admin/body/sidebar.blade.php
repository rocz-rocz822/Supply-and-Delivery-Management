<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="/dashboard">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.supplies')}}">
            <i class="mdi mdi-package-up menu-icon"></i>
            <span class="menu-title">Supplies</span>
        </a>
        </li>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#delivery" aria-expanded="false" aria-controls="delivery">
            <i class="mdi mdi-truck-delivery menu-icon"></i>
            <span class="menu-title">Returns</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="delivery">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.returned')}}">Returned Items</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.defectives')}}">Defective Items</a></li>
            </ul>
        </div>
         </li>
        <!-- <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Form Elements</span>
        </a>  -->
        <!-- </li>
        <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Charts</span>
        </a>
        </li> -->       
        <!-- <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Icons</span>
        </a>
        </li> -->
        <!-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
            </ul>
        </div>
        </li> -->
        <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.transaction')}}">
            <i class="mdi mdi-file-document-box menu-icon"></i>
            <span class="menu-title">Transaction</span>
        </a>
        </li>
    </ul>
</nav>