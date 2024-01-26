<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <!-- Deliveries -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#supply" aria-expanded="false" aria-controls="delivery">
                <i class="mdi mdi-truck-delivery menu-icon"></i>
                <span class="menu-title">Supplies</span>
                <i class="menu-arrow"></i>
            </a>
            <!-- Histories -->
            <div class="collapse" id="supply">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.supply')}}">Delivered Items</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.returned')}}">Returned Items</a></li>
                </ul>
            </div>
         </li>
         <!-- Transaction -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.transaction')}}">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Transaction</span>
            </a>
        </li>
    </ul>
</nav>