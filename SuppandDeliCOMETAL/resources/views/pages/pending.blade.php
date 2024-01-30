@extends('index')
@section('admin')

<!-- Begin: Content -->
    <section id="content" class="table-layout animated fadeIn">
        <!-- begin: .tray-center -->
        <div class="tray tray-center">


            <div class="row">
                <div class="col-md-12 grid-margin">
                    <!-- Tags -->
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                            <h1>Pending</h1>
                            <p class="mb-md-0"><code>Records</code></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- pending table --}}
            <div class="panel">
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                            <thead>
                                <tr class="bg-light">
                                    <th class="text-center">Delivery ID</th>
                                    <th class="">Stock Order ID</th>
                                    <th class="">Carrier Name</th>
                                    <th class="">Delivery Date and Time</th>
                                    <th class="">Exact Arrival</th>
                                    <th class="">Estimated Arrival</th>
                                    {{-- <th class="text-center">Status</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <!-- FIRST LINE -->
                                <tr>
                                    <td class="text-center">01234567890</td>
                                    <td class="">12345678901</td>
                                    <td class="">ABCD Inc.</td>
                                    <td class="">12/03/2014 12:51</td>
                                    <td class="">12/03/2014 12:51</td>
                                    <td class="">12/03/2014 12:51</td>
                                    <td class="text-center">
                                    </td>
                                </tr>
                                <!-- SECOND LINE -->
                                <tr>
                                    <td class="text-center">23456789012</td>
                                    <td class="">34567890123</td>
                                    <td class="">ABCD Inc.</td>
                                    <td class="">12/03/2014 12:52</td>
                                    <td class="">12/03/2014 12:52</td>
                                    <td class="">12/03/2014 12:52</td>
                                    <td class="text-center">
                                    </td>
                                </tr>
                                <!-- THIRD LINE -->
                                <tr>
                                    <td class="text-center">45678901234</td>
                                    <td class="">56789012345</td>
                                    <td class="">ABCD Inc.</td>
                                    <td class="">12/03/2014 12:53</td>
                                    <td class="">12/03/2014 12:53</td>
                                    <td class="">12/03/2014 12:53</td>
                                    <td class="text-center">
                                    </td>
                                </tr>
                                {{-- FOURTH LINE --}}
                                <tr>
                                    <td class="text-center">67890123456</td>
                                    <td class="">78901234567</td>
                                    <td class="">ABCD Inc.</td>
                                    <td class="">12/03/2014 12:54</td>
                                    <td class="">12/03/2014 12:54</td>
                                    <td class="">12/03/2014 12:54</td>
                                    <td class="text-center">
                                    </td>
                                </tr>
                                {{-- FIFTH LINE --}}
                                <tr>
                                    <td class="text-center">89012345678</td>
                                    <td class="">90123456789</td>
                                    <td class="">ABCD Inc.</td>
                                    <td class="">12/03/2014 12:55</td>
                                    <td class="">12/03/2014 12:55</td>
                                    <td class="">12/03/2014 12:55</td>
                                    <td class="text-center">
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
    <!-- // End: Content -->

@endsection
