@extends('index')

@section('admin')

<!-- Begin: Content -->
<section id="content" class="">

    <div class="panel invoice-panel">
        {{-- <div class="panel-heading">
            <span class="panel-title">
            <span class="glyphicon glyphicon-print"></span> Printable Invoice</span>
            <div class="panel-header-menu pull-right mr10">
            <!-- <button type="button" class="btn btn-xs btn-default btn-gradient mr5">
                <i class="fa fa-plus-square pr5"></i> New Invoice</button> -->
            <!-- <a href="javascript:window.print()" class="btn btn-xs btn-default btn-gradient mr5">
                <i class="fa fa-print fs13"></i>
            </a> -->
            <!-- <div class="btn-group">
                <button type="button" class="btn btn-xs btn-default btn-gradient dropdown-toggle" data-toggle="dropdown">
                <span class="fa fa-times"></span>
                </button>
            </div> -->
            </div>
        </div> --}}

        <div class="panel-body p20" id="invoice-item">

            <div class="row mb30">
                <div class="col-md-12">
                    <div>
                        <img src="{{ asset('admin/images/logo/logo.png')}}"
                            class="img-responsive center-block mt10 mw200 hidden-xs"
                            alt="COMET.AL">
                        <h1 class="lh10 mt25 text-center"> INVOICE </h1>
                        <h5 class="mn text-center"> Status:
                            <b class="text-info">Delivered</b>
                        </h5>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <img src="{{ asset('admin/images/logo/logo.png')}}"
                            class="img-responsive center-block mt10 mw200 hidden-xs"
                            alt="COMET.AL">
                </div> --}}
                {{-- <div class="col-md-4">
                    <div class="pull-right text-right">
                        <h2 class="invoice-logo-text hidden lh10">COMET.AL</h2>
                        <!-- <h5> Sales Rep:
                            <b class="text-primary">Michael Ronny</b>
                        </h5> -->
                    </div>
                </div> --}}
            </div>
            <!-- BILLING INFO -->
            <div class="row" id="invoice-info">

                {{-- <div class="col-md-4">
                    <div class="panel panel-alt">
                        <div class="panel-heading">
                            <span class="panel-title">
                                <i class="fa fa-user"></i> Bill To:
                            </span>
                            <div class="panel-btns pull-right ml10">
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
                </div> --}}

                <div class="col-md-6">
                    <div class="panel panel-alt">
                        <div class="panel-heading">
                            <span class="panel-title">
                                <i class="fa fa-location-arrow"></i> Ship To:
                            </span>
                            <div class="panel-btns pull-right ml10">
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

                <div class="col-md-6">
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
            <!-- TABLE HEADER -->
            <div class="row" id="invoice-table">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Product Name</th>
                                <th style="width: 135px;">Stock Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- FIRST ROW -->
                            <tr>
                                <td><b>3</b></td>
                                <td>Bracelet</td>
                                <td>Caelum Armilla</td>
                                <td class="text-center pr10">16</td>
                            </tr>
                            <tr>
                                <td><b>1</b></td>
                                <td>Necklace</td>
                                <td>Caelum Monile</td>
                                <td class="text-center pr10">2</td>
                            </tr>
                            <tr>
                                <td><b>3</b></td>
                                <td>Package Set</td>
                                <td>Incandescent Sun Package Set</td>
                                <td class="text-center pr10">16</td>
                            </tr>
                            <tr>
                                <td><b>3</b></td>
                                <td>Rings</td>
                                <td>Noctis Annulus</td>
                                <td class="text-center pr10">23</td>
                            </tr>
                            <tr>
                                <td><b>1</b></td>
                                <td>Necklace</td>
                                <td>Sol Monile</td>
                                <td class="text-center pr10">2</td>
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
                                    <b>Total Quantity:</b>
                                    </th>
                                    <th class="text-left">59</th>
                                </tr>
                                </thead>
                            </table>
                            <br>
                            <br>
                        </div>
                    <div class="clearfix"></div>
                    <div class="invoice-buttons">
                        <a href="javascript:window.print()" class="btn btn-default mr10">
                            <i class="fa fa-print pr5"></i> Print Invoice
                        </a>
                        {{-- <button class="btn btn-primary btn-gradient" type="button">
                            <i class="fa fa-floppy-o pr5"></i> Save Invoice
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('body.footer')
</section>
<!-- End: Content -->


@endsection
