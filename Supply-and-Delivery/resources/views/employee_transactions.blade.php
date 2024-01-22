<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>COMET.AL Delivery Management</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="ecom-products-page">

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
      @include('header')
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">
        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
          @include('sidebarMenu')
        <!-- End: Sidebar Menu -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar -->
      <header id="topbar" class="ph10">
        <div class="topbar-left">
          <ul class="nav nav-list nav-list-topbar pull-left">
            <li>
            <li class="active">
              <a href="{{url('employee_transactions')}}">Transactions</a>
            </li>
            </li>
          </ul>
        </div>
        <div class="topbar-right hidden-xs hidden-sm">
          <a href="{{url('employee_orders')}}" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-plus pr5"></span> New Invoice</a>
          <a href="{{url('employee_customers')}}" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-plus pr5"></span> Edit Invoice</a>
          <a href="{{url('employee_customers')}}" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-user pr5"></span> Delete Invoice</a>
        </div>
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">

        <!-- begin: .tray-center -->
        <div class="tray tray-center">

            <!-- recent orders table -->
          <div class="panel">
            <div class="panel-body pn">
              <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                  <thead>
                    <tr class="bg-light">
                      <th class="text-center">View</th>
                      <th class="">Transaction ID</th>
                      <th class="">Stock Order ID</th>
                      <th class="">Delivery ID</th>
                      <th class="">Notes</th>
                      <th class="text-center">Order Status</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Louis Renold</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Louis Renold</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Sara Loft</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Frank Roles</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739 </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Michael Runes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Amanda Marshall</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Michael Runes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Amanda Marshall</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Amanda Marshall</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('employee_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('employee_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('employee_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> 
                         <a href="{{url('pages_invoice')}}#"> Open
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">#165498739</td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="employee_orders#">Edit</a>
                            </li>
                            <li>
                              <a href="employee_orders#">Delete</a>
                            </li>
                            <li>
                              <a href="employee_orders#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="employee_orders#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="employee_orders#">Pending</a>
                            </li>
                            <li>
                              <a href="employee_orders#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- end: .tray-center -->
      </section>
      <!-- End: Content -->
    </section>
  </div>
  <!-- End: Main -->


  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- FileUpload JS -->
  <script src="vendor/plugins/fileupload/fileupload.js"></script>
  <script src="vendor/plugins/holder/holder.min.js"></script>

  <!-- Theme Javascript -->
  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS  
    Demo.init();

    // select dropdowns - placeholder like creation
    var selectList = $('.admin-form select');
    selectList.each(function(i, e) {
      $(e).on('change', function() {
        if ($(e).val() == "0") $(e).addClass("empty");
        else $(e).removeClass("empty")
      });
    });
    selectList.each(function(i, e) {
      $(e).change();
    });

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>
