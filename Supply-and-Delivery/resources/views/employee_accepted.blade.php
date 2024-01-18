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

<body class="employee-page">

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
              <a href="{{url('employee_pending')}}">Pending</a>
            </li>
            <li class="active">
              <a href="{{url('employee_accepted')}}">Accepted</a>
            </li>
            <li>
              <a href="{{url('employee_declined')}}">Declined</a>
            </li>
            <li>
              <a href="{{url('employee_cancelled')}}">Cancelled</a>
            </li>
            <li class="">
              <a href="{{url('employee_returned')}}">Returned</a>
            </li>
          </ul>
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
                      <th class="">Delivery ID</th>
                      <th class="">Stock Order ID</th>
                      <th class="">Carrier Name</th>
                      <th class="">Delivery Date and Time</th>
                      <th class="">Exact Arrival</th>
                      <th class="">Estimated Arrival</th>
                      <th class="text-center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
  <!-- FIRST LINE -->
                      <td class="text-center">
                      <a href="{{url('pages_invoice')}}#">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open  
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">01234567890</td>
                      <td class="">12345678901</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
  <!-- SECOND LINE -->
                    <td class="text-center">
                      <a href="{{url('pages_invoice')}}#">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open  
                      <span class="fa fa-angle-right"></span></a>
                      </button>
                      </td>
                      <td class="">23456789012</td>
                      <td class="">34567890123</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
  <!-- THIRD LINE -->
                      <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open 
                      <span class="fa fa-angle-right"></span>
                      </button>
                      </td>
                      <td class="">45678901234</td>
                      <td class="">56789012345</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                    <td class="text-center">
                    <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open
                    <span class="fa fa-angle-right"></span>
                      </button>
                      </td>
                      <td class="">67890123456</td>
                      <td class="">78901234567</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open 
                      <span class="fa fa-angle-right"></span>
                      </button>
                      </td>
                      <td class="">89012345678</td>
                      <td class="">90123456789</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open 
                      <span class="fa fa-angle-right"></span>
                      </button>
                      </td>
                      <td class="">74108520963</td>
                      <td class="">85209630741</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open 
                      <span class="fa fa-angle-right"></span>
                      </button>
                      </td>
                      <td class="">78965412307</td>
                      <td class="">35715984260</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open 
                      <span class="fa fa-angle-right"></span>
                      </button>
                      </td>
                      <td class="">74123698502</td>
                      <td class="">96308520741</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    
                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open 
                      <span class="fa fa-angle-right"></span>
                      </button>
                      </td>
                      <td class="">98765432109</td>
                      <td class="">45632178905</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open 
                      <a href="{{url('employee_transactions')}}#"></a>
                      <span class="fa fa-angle-right"></span>
                      </button>
                      </td>
                      <td class="">15963247803</td>
                      <td class="">84267951305</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                    <td class="text-center">
                      <button type="button" class="btn btn-rounded btn-default btn-block btn-xs fs12"> Open 
                      <span class="fa fa-angle-right"></span>
                      </button>
                      </td>
                      <td class="">31649785209</td>
                      <td class="">01346798520</td>
                      <td class="">ABCD Inc.</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="">12/03/2014 12:51</td>
                      <td class="text-center">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12"> Accepted
                          </button>
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

  <!-- Admin Forms JS -->
  <script src="assets/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js"></script>

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

    // Init datepicker widget
    $('#filter-datepicker').datepicker({
      numberOfMonths: 1,
      showOn: 'both',
      buttonText: '<i class="fa fa-calendar-o"></i>',
      prevText: '<i class="fa fa-chevron-left"></i>',
      nextText: '<i class="fa fa-chevron-right"></i>',
      beforeShow: function(input, inst) {
        var newclass = 'admin-form';
        var themeClass = $(this).parents('.admin-form').attr('class');
        var smartpikr = inst.dpDiv.parent();
        if (!smartpikr.hasClass(themeClass)) {
          inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
        }
      }
    });

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
</body>

</html>
