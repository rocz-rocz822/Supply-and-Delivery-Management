@extends('index')

@section('admin')

<!-- Begin: Content -->
    <section id="content" class="table-layout animated fadeIn">
        <!-- begin: .tray-center -->
        <div class="tray tray-center">
            <!-- Tags -->
            <div class="d-flex align-items-end flex-wrap">
                <div class="me-md-3 me-xl-5">
                    <h1>Cancelled</h1>
                    <p><code>Records</code></p>
                </div>
            </div>
            <!-- End of Tags -->

            <div class="panel">
                <div class="panel-body pn">
                     <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="bg-light">
                                    <th class="text-center">Transaction ID</th>
                                    <th class="">Delivery ID</th>
                                    <th class="">Returned Quantity</th>
                                    <th class="">Date Returned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="">#20202020202</td>
                                    <td class="">10</td>
                                    <td class="">May 15, 2023</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="">#10102030402</td>
                                    <td class="">2</td>
                                    <td class="">July 1, 2023</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="">#45959392931</td>
                                    <td class="">5</td>
                                    <td class="">Apr 12, 2023</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="">#10294053201</td>
                                    <td class="">1</td>
                                    <td class="">May 15, 2023</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="">#20405060201</td>
                                    <td class="">2</td>
                                    <td class="">May 03, 2023</td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td class="">#10204050691</td>
                                    <td class="">3</td>
                                    <td class="">April 05, 2022</td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td class="">#10103050691</td>
                                    <td class="">4</td>
                                    <td class="">June 16, 2023</td>
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
