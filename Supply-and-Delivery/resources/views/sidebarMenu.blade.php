 <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">EMPLOYEE</li>
            <li>
              <a class="accordion-toggle menu-open">
               <span class="glyphicon glyphicon-send"></span>
               <span class="sidebar-title">Deliveries</span>
               <span class="caret"></span>
              </a>
            <ul class="nav sub-nav">
              <li>
                <a href="{{url('employee_delivered')}}">
                  <span class="glyphicon glyphicon-ok-circle"></span> Delivered </a>
              </li>
              <li>
                <a href="{{url('employee_notyet')}}">
                  <span class="glyphicon glyphicon-remove-circle"></span> Not Yet Delivered </a>
              </li>
              <li>
                <a href="{{url('employee_returned')}}">
                  <span class="glyphicon glyphicon-circle-arrow-left"></span> Returned </a>
            </li>
            </ul>

            <li>
              <a class="accordion-toggle menu-open" href="{{url('employee_transactions')}}#">
               <span class="glyphicon glyphicon-file"></span>
               <span class="sidebar-title">Invoice</span>
               <span class="caret"></span>
              </a>
            <ul class="nav sub-nav">
              <li>
                <a href="{{url('employee_transactions')}}">
                  <span class="glyphicon glyphicon-refresh"></span> Transactions </a>
              </li>
            </ul>
            </li>
        </ul>

<!-- CHANGED THIS -->
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 

        <div class="sidebar-toggle-mini">
	        <a href="employee_pending#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
        <!-- End: Sidebar Menu -->