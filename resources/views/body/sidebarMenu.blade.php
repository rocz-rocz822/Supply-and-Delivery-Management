<!-- Start: Sidebar Menu -->
    <ul class="nav sidebar-menu">
        {{-- <li class="sidebar-label pt20">EMPLOYEE</li> --}}
        <li>
            <a href="{{route('dashboard')}}">
                <span class="fa-solid fa-house"></span>
                <span class="sidebar-title">Dashbooard</span>
                {{-- <span class="caret"></span> --}}
            </a>
        </li>
        <li>
            <a class="accordion-toggle menu-open">
                <span class="glyphicon glyphicon-shopping-cart"></span>
                <span class="sidebar-title">Ecommerce</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="{{ url('pages/supply')}}">
                        <span class="glyphicon glyphicon-inbox"></span>
                        <span class="sidebar-title">Supply</span>
                    </a>
                </li>
                <li>
                    <a class="accordion-toggle">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                        <span class="sidebar-title">Delivery</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav sub-nav">
                        <li>
                            <a href="{{url('pages/delivered')}}">
                            <span class="glyphicon glyphicon-ok-circle"></span>  Delivered </a>
                        </li>
                        <li>
                            <a href="{{url('pages/pending')}}">
                            <span class="glyphicon glyphicon-time"></span>  Pending</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span>
                        <span class="sidebar-title"> Returns</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav sub-nav">
                        <li>
                            <a href="{{url('pages/cancelled')}}">
                            <span class="glyphicon glyphicon-remove-circle"></span>  Cancelled </a>
                        </li>
                        <li>
                            <a href="{{url('pages/defective')}}">
                            <span class="glyphicon glyphicon-time"></span>  Defective </a>
                        </li>
                    </ul>
                </li>
            </ul>

        <li>
            <a href="{{url('pages/receipt')}}">
                <span class="fa fa-file-invoice"></span>
                <span class="sidebar-title"> Transactions</span>
                {{-- <span class="caret"></span> --}}
            </a>
        </li>
    </ul>

<!-- CHANGED THIS -->
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

    {{-- <div class="sidebar-toggle-mini">
        <a href="employee_pending#">
            <span class="fa fa-sign-out"></span>
        </a>
    </div> --}}
<!-- End: Sidebar Menu -->
