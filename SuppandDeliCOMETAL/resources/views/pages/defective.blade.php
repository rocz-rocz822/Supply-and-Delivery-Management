@extends('index')

@section('admin')

<!-- Begin: Content -->
    <section id="content" class="table-layout animated fadeIn">
        <!-- begin: .tray-center -->
        <div class="tray tray-center">
            <!-- Tags -->
            <div class="d-flex align-items-end flex-wrap">
                <div class="me-md-3 me-xl-5">
                    <h1>Defective</h1>
                    <p><code>Records</code></p>
                </div>
            </div>
            <!-- End of Tags -->

            <div class="panel">
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="bg-light">
                                    <th class="text-center">Transaction ID</th>
                                    <th class="">Delivery ID</th>
                                    <th class="">Defective Quantity</th>
                                    <th class="">Date Returned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="">Herman Becky</td>
                                    <td class=""></td>
                                    <td class="">May 15, 2015</td>
                                    <td class="">
                                        <div class="btn-group text-center">
                                            <button type="button" class="btn btn-default light" title="Dispose">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="">Messy Adams</td>
                                    <td class=""></td>
                                    <td class="">July 1, 2015</td>
                                    <td class="">
                                         <div class="btn-group text-center">
                                            <button type="button" class="btn btn-default light" title="Dispose">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="">John Richards</td>
                                    <td class=""></td>
                                    <td class="">Apr 12, 2015</td>
                                    <td class="">
                                     <div class="btn-group text-center">
                                            <button type="button" class="btn btn-default light" title="Dispose">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="">Peter Meggik</td>
                                    <td class=""></td>
                                    <td class="">May 15, 2015</td>
                                    <td class="">
                                         <div class="btn-group text-center">
                                            <button type="button" class="btn btn-default light" title="Dispose">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="">Edward</td>
                                    <td class=""></td>
                                    <td class="">May 03, 2015</td>
                                    <td class="">
                                         <div class="btn-group text-center">
                                            <button type="button" class="btn btn-default light" title="Dispose">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td class="">John Doe</td>
                                    <td class=""></td>
                                    <td class="">April 05, 2015</td>
                                    <td class="">
                                         <div class="btn-group text-center">
                                            <button type="button" class="btn btn-default light" title="Dispose">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td class="">Henry Tom</td>
                                    <td class=""></td>
                                    <td class="">June 16, 2015</td>
                                    <td class="">
                                         <div class="btn-group text-center">
                                            <button type="button" class="btn btn-default light" title="Dispose">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @include('body.footer')
        </div>
        <!-- end: .tray-center -->

    </section>

@endsection
