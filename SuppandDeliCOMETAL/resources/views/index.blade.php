<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>COMET.AL | Supply and Delivery Mgmt</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/admin-tools/admin-forms/css/admin-forms.css') }}">

  <!-- Select2 Plugin CSS  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/plugins/select2/css/core.css')}}">

  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <!-- End plugin css for this page -->

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/skin/default_skin/css/theme.css')}}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('admin/images/logo/favicon.ico')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body>

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
    @include('body.header')
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
        @include('body.sidebarMenu')
        <!-- End: Sidebar Menu -->

      </div>
      <!-- End: Sidebar Left Content -->
    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
        @yield('admin')
    </section>
  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- plugins:js -->
  <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->

  <!-- Plugin js for this page-->
  <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <!-- End plugin js for this page-->

  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/js/template.js') }}"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="{{ asset('admin/js/dashboard.js') }}"></script>
  <script src="{{ asset('admin/js/data-table.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/js/dataTables.bootstrap4.js') }}"></script>
  <!-- End custom js for this page-->

  <script src="{{ asset('admin/js/jquery.cookie.js') }}" type="text/javascript"></script>

  <!-- jQuery -->
  <script src="{{ asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
  <script src="{{ asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

  <!-- Select2 Plugin Plugin -->
  <script src="{{ asset('vendor/plugins/select2/select2.min.js')}}"></script>

  <script src="{{ asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
  <script src="{{ asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

  <!-- Datatables -->
  <script src="{{ asset('vendor/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>

  <!-- Datatables Tabletools addon -->
  <script src="{{ asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>

  <!-- Datatables ColReorder addon -->
  <script src="{{ asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>

  <!-- Datatables Bootstrap Modifications  -->
  <script src="{{ asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>

  <!-- Admin Forms JS -->
  <script src="{{ asset('admin/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js')}}"></script>

  <!-- Theme Javascript -->
  <script src="{{ asset('admin/js/utility/utility.js')}}"></script>
  <script src="{{ asset('admin/js/demo/demo.js')}}"></script>
  <script src="{{ asset('admin/js/main.js')}}"></script>
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

    // Init Boostrap Multiselects
    $('#multiselect1').multiselect();

    $('#multiselect2').multiselect({
      buttonClass: 'multiselect dropdown-toggle btn btn-default btn-primary'
    });

    "use strict";

    // Init Theme Core
    Core.init();

    // Init Demo JS
    Demo.init();

    // Init DataTables
     $('#datatable').dataTable({
       "sDom": '',
       "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
       }
    });

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
</body>

</html>
