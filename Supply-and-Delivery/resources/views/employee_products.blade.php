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
    </aside>
    <!-- End: Sidebar Left Content -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar -->
      <header id="topbar" class="ph10">
        <div class="topbar-left">
          <ul class="nav nav-list nav-list-topbar pull-left">
            <li class="active">
              <a href="{{url('employee_pending')}}">Inventory</a>
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
            <div class="panel-menu p12 admin-form theme-primary">

            <!-- TABLE INFO -->
            <div class="panel-body pn">
              <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                  <thead>
                    <tr class="bg-light">
                      <th class="text-center">Image</th>
                      <th class="">Product Title</th>
                      <th class="">Product ID</th>
                      <th class="">Price</th>
                      <th class="">Stock</th>
                      <th class="">Supplier</th>
                    </tr>
                  </thead>
                  <tbody>
  <!-- FIRST PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Bracelet3.png">
                      </td>
                      <td class="">Astra Armilla</td>
                      <td class="">#21362</td>
                      <td class="">$215</td>
                      <td class="">1,400</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- SECOND PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Necklace1.png">
                      </td>
                      <td class="">Astra Monile</td>
                      <td class="">#15262</td>
                      <td class="">$455</td>
                      <td class="">2,100</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- THIRD PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Ring5.png">
                      </td>
                      <td class="">Terra Annulus</td>
                      <td class="">#66362</td>
                      <td class="">$1699</td>
                      <td class="">6,100</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- FOURTH PRODUCT -->
                    <tr>
                    <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/set_astra.png">
                      </td>
                      <td class="">Earth and Stars Package Set</td>
                      <td class="">#51362</td>
                      <td class="">$1299</td>
                      <td class="">5,200</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- FIFTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Bracelet4.png">
                      </td>
                      <td class="">Caelum Armilla</td>
                      <td class="">#4132</td>
                      <td class="">$995</td>
                      <td class="">11,000</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- SIXTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Necklace2.png">
                      </td>
                      <td class="">Caelum Monile</td>
                      <td class="">#21362</td>
                      <td class="">$1,150</td>
                      <td class="">4,300</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- SEVENTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Ring3.png">
                      </td>
                      <td class="">Caelum Annulus</td>
                      <td class="">#15262</td>
                      <td class="">$455</td>
                      <td class="">145</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- EIGHTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/set_caelum.png">
                      </td>
                      <td class="">Sunkissed Sky Package Set</td>
                      <td class="">#21362</td>
                      <td class="">$1299</td>
                      <td class="">180</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- NINTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Bracelet1.png">
                      </td>
                      <td class="">Luna Armilla</td>
                      <td class="">#4132</td>
                      <td class="">$995</td>
                      <td class="">0 - Sold Out</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- TENTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Necklace5.png">
                      </td>
                      <td class="">Luna Monile</td>
                      <td class="">#66362</td>
                      <td class="">$1699</td>
                      <td class="">0 - Sold Out</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- ELEVENTH PRODUCT -->
                     <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Ring1.png">
                      </td>
                      <td class="">Luna Annulus</td>
                      <td class="">#4132</td>
                      <td class="">$995</td>
                      <td class="">11,000</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- TWELFTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/set_luna.png">
                      </td>
                      <td class="">Iridescent Moon Package Set</td>
                      <td class="">#21362</td>
                      <td class="">$1,150</td>
                      <td class="">4,300</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- THIRTEENTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Bracelet2.png">
                      </td>
                      <td class="">Sol Armilla</td>
                      <td class="">#15262</td>
                      <td class="">$455</td>
                      <td class="">145</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- FOURTEENTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Necklace3.png">
                      </td>
                      <td class="">Sol Monile</td>
                      <td class="">#21362</td>
                      <td class="">$1299</td>
                      <td class="">180<</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- FIFTEENTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Ring2.png">
                      </td>
                      <td class="">Sol Annulus</td>
                      <td class="">#4132</td>
                      <td class="">$995</td>
                      <td class="">0 - Sold Out</td>
                      <td class="">COMET.AL</td>
                    </tr>
    <!-- SIXTEENTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/set_sol.png">
                      </td>
                      <td class="">Incandescent Sun Package Set</td>
                      <td class="">#66362</td>
                      <td class="">$1699</td>
                      <td class="">0 - Sold Out</td>
                      <td class="">COMET.AL</td>
                    </tr>
    <!-- SEVENTEENTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Bracelet5.png">
                      </td>
                      <td class="">Noctis Armilla</td>
                      <td class="">#51362</td>
                      <td class="">$1299</td>
                      <td class="">0 - Sold Out</td>
                      <td class="">COMET.AL</td>
                    </tr> 
  <!-- EIGHTEENTH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Necklace4.png">
                      </td>
                      <td class="">Noctis Monile</td>
                      <td class="">#51362</td>
                      <td class="">$1299</td> 
                      <td class="">0 - Sold Out</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- NINETEENTH PRODUCT -->
                     <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/Ring4.png">
                      </td>
                      <td class="">Noctis Annulus</td>
                      <td class="">#21362</td>
                      <td class="">$215</td>
                      <td class="">1,400</td>
                      <td class="">COMET.AL</td>
                    </tr>
  <!-- TWENTIETH PRODUCT -->
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/set_noctis.png">
                      </td>
                      <td class="">Moonlit Night Package Set</td>
                      <td class="">#15262</td>
                      <td class="">$455</td>
                      <td class="">2,100</td>
                      <td class="">COMET.AL</td>
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

  <!-- Tagmanager JS -->
  <script src="vendor/plugins/tagsinput/tagsinput.min.js"></script>

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

    // select list dropdowns - placeholder like creation
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

    // Init TagsInput plugin
    $("input#tagsinput").tagsinput({
      tagClass: function(item) {
        return 'label bg-primary light';
      }
    });

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>
