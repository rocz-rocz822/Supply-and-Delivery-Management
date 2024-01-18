<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>COMET.AL</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

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

<body class="invoice-page">

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

      <!-- Begin: Content -->
      <section id="content" class="">

        <div class="panel invoice-panel">
          <div class="panel-heading">
            <span class="panel-title">
              <span class="glyphicon glyphicon-print"></span> Printable Invoice</span>
            <div class="panel-header-menu pull-right mr10">
              <button type="button" class="btn btn-xs btn-default btn-gradient mr5">
                <i class="fa fa-plus-square pr5"></i> New Invoice</button>
              <a href="javascript:window.print()" class="btn btn-xs btn-default btn-gradient mr5">
                <i class="fa fa-print fs13"></i>
              </a>
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-default btn-gradient dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-cog"></span>
                </button>
                <ul class="dropdown-menu checkbox-persist pull-right text-left" role="menu">
                  <li>
                    <a>
                      <i class="fa fa-user"></i> View Profile </a>
                  </li>
                  <li>
                    <a>
                      <i class="fa fa-envelope-o"></i> Message </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel-body p20" id="invoice-item">

            <div class="row mb30">
              <div class="col-md-4">
                <div class="pull-left">
                  <h1 class="lh10 mt10"> INVOICE </h1>
                  <h5 class="mn"> Created: Nov 23 2013 </h5>
                  <h5 class="mn"> Status:
                    <b class="text-success">Paid - On Time</b>
                  </h5>
                </div>
              </div>
              <div class="col-md-4"> <img src="assets/img/logos/logo.png" class="img-responsive center-block mt10 mw200 hidden-xs" alt="AdminDesigns"> </div>
              <div class="col-md-4">
                <div class="pull-right text-right">
                  <h2 class="invoice-logo-text hidden lh10">AdminDesigns</h2>
                  <h5> Sales Rep:
                    <b class="text-primary">Michael Ronny</b>
                  </h5>
                </div>
              </div>
            </div>
            <div class="row" id="invoice-info">
              <div class="col-md-4">
                <div class="panel panel-alt">
                  <div class="panel-heading">
                    <span class="panel-title">
                      <i class="fa fa-user"></i> Bill To: </span>
                    <div class="panel-btns pull-right ml10">
                      <span class="panel-title-sm"> Edit</span>
                    </div>
                  </div>
                  <div class="panel-body">
                    <address>
                      <strong>Cannon Camera</strong>
                      <br> 151 Sandy Ave, Suite 200
                      <br> San Jose, CA 91503
                      <br>
                      <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-alt">
                  <div class="panel-heading">
                    <span class="panel-title">
                      <i class="fa fa-location-arrow"></i> Ship To:</span>
                    <div class="panel-btns pull-right ml10">
                      <span class="panel-title-sm"> Edit</span>
                    </div>
                  </div>
                  <div class="panel-body">
                    <address>
                      <strong>Amazon, Inc.</strong>
                      <br> 795 Folsom Ave, Suite 600
                      <br> San Francisco, CA 94107
                      <br>
                      <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-alt">
                  <div class="panel-heading">
                    <span class="panel-title">
                      <i class="fa fa-info"></i> Invoice Details: </span>
                    <div class="panel-btns pull-right ml10"> </div>
                  </div>
                  <div class="panel-body">
                    <ul class="list-unstyled">
                      <li>
                        <b>Invoice #:</b> 58126332</li>
                      <li>
                        <b>Invoice Date:</b> 10 Oct 2013</li>
                      <li>
                        <b>Due Date:</b> 21 Dec 2013</li>
                      <li>
                        <b>Terms:</b> Ten Forty</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="invoice-table">
              <div class="col-md-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Item</th>
                      <th>Description</th>
                      <th style="width: 135px;">#</th>
                      <th>Rate</th>
                      <th class="text-right pr10">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <b>3</b>
                      </td>
                      <td>Net Code Revamp</td>
                      <td>Worked on Design and Structure (per hour)</td>
                      <td>16</td>
                      <td>$35.00</td>
                      <td class="text-right pr10">$560.00</td>
                    </tr>
                    <tr>
                      <td>
                        <b>1</b>
                      </td>
                      <td>Developer Newsletter </td>
                      <td>Year Subscription X2</td>
                      <td>2</td>
                      <td>$12.99</td>
                      <td class="text-right pr10">$25.98</td>
                    </tr>
                    <tr>
                      <td>
                        <b>3</b>
                      </td>
                      <td>Admin Dashboard</td>
                      <td>Design and implemention(per hour)</td>
                      <td>16</td>
                      <td>$35.00</td>
                      <td class="text-right pr10">$560.00</td>
                    </tr>
                    <tr>
                      <td>
                        <b>3</b>
                      </td>
                      <td>Web Development</td>
                      <td>Worked on Design and Structure (per hour)</td>
                      <td>23</td>
                      <td>$30.00</td>
                      <td class="text-right pr10">$690.00</td>
                    </tr>
                    <tr>
                      <td>
                        <b>1</b>
                      </td>
                      <td>Developer Newsletter </td>
                      <td>Year Subscription X2</td>
                      <td>2</td>
                      <td>$12.99</td>
                      <td class="text-right pr10">$25.98</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row" id="invoice-footer">
              <div class="col-md-12">
                <div class="pull-left mt20 fs15 text-primary"> Thank you for your business.</div>
                <div class="pull-right">
                  <table class="table" id="invoice-summary">
                    <thead>
                      <tr>
                        <th>
                          <b>Sub Total:</b>
                        </th>
                        <th>$1375.98</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <b>Payments</b>
                        </td>
                        <td>(-)0.00</td>
                      </tr>
                      <tr>
                        <td>
                          <b>Total</b>
                        </td>
                        <td>$230.00</td>
                      </tr>
                      <tr>
                        <td>
                          <b>Balance Due:</b>
                        </td>
                        <td>$1375.98</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="clearfix"></div>
                <div class="invoice-buttons">
                  <a href="javascript:window.print()" class="btn btn-default mr10">
                    <i class="fa fa-print pr5"></i> Print Invoice</a>
                  <button class="btn btn-primary btn-gradient" type="button">
                    <i class="fa fa-floppy-o pr5"></i> Save Invoice</button>
                </div>
              </div>
            </div>

          </div>
        </div>

      </section>
      <!-- End: Content -->

    </section>

    <!-- Start: Right Sidebar -->
    <aside id="sidebar_right" class="nano affix">

      <!-- Start: Sidebar Right Content -->
      <div class="sidebar-right-content nano-content p15">
          <h5 class="title-divider text-muted mb20"> Server Statistics
            <span class="pull-right"> 2013
              <i class="fa fa-caret-down ml5"></i>
            </span>
          </h5>
          <div class="progress mh5">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
              <span class="fs11">DB Request</span>
            </div>
          </div>
          <div class="progress mh5">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
              <span class="fs11 text-left">Server Load</span>
            </div>
          </div>
          <div class="progress mh5">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
              <span class="fs11 text-left">Server Connections</span>
            </div>
          </div>
          <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
          <div class="row">
            <div class="col-xs-5">
              <h3 class="text-primary mn pl5">132</h3>
            </div>
            <div class="col-xs-7 text-right">
              <h3 class="text-success-dark mn">
                <i class="fa fa-caret-up"></i> 13.2% </h3>
            </div>
          </div>
          <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
          <div class="row">
            <div class="col-xs-5">
              <h3 class="text-primary mn pl5">212</h3>
            </div>
            <div class="col-xs-7 text-right">
              <h3 class="text-success-dark mn">
                <i class="fa fa-caret-up"></i> 25.6% </h3>
            </div>
          </div>
          <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
          <div class="row">
            <div class="col-xs-5">
              <h3 class="text-primary mn pl5">82.5</h3>
            </div>
            <div class="col-xs-7 text-right">
              <h3 class="text-danger mn">
                <i class="fa fa-caret-down"></i> 17.9% </h3>
            </div>
          </div>
          <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
            <span class="pull-right text-primary fw600">USA</span>
          </h5>
        </div>
        
    </aside>
    <!-- End: Right Sidebar -->

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

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

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>
