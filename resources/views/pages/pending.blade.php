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
                                    <th class="tyext-center">Tracking No.</th>
                                    <th class="tyext-center">Supplier</th>
									<th class="tyext-center">Order No.</th>
                                    <th class="tyext-center">Carrier Name</th>
                                    <th class="tyext-center">Estimated Arrival</th>
                                    <th class="tyext-center">Status</th>
                                    <th class="tyext-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
								@forelse ($pendings as $pending)
                                <tr>
                                    <td class="text-center">{{ $pending->tracking_number }}</td>
                                    <td class="">{{ $pending->supplier->getName() }}</td>
                                    <td class="">{{ $pending->transaction->transaction_number }}</td>
                                    <td class="">{{ $pending->delivery->courier_name }}</td>
                                    <td class="">{{ $pending->estimated_delivery_at->format('M d, Y') }}</td>
                                    <td class="">{{ $pending->getStatus() }}</td>
                                    <td class=""></td>
                                </tr>
								@empty
								<tr>
									<td colspan="5" class="text-center">No pending records</td>
								</tr>
								@endforelse
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
