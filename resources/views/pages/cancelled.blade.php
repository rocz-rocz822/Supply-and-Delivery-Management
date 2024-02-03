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
								<h1>Cancelled</h1>
								<p><code>Records</code></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- cancelled table --}}
			<div class="panel">
				<div class="panel-body pn">
					<div class="table-responsive">
						<table class="table admin-form theme-warning tc-checkbox-1 fs13">
							<thead>
								<tr class="bg-light">
									<th class="text-center">Tracking No.</th>
									<th class="text-center">Supplier</th>
									<th class="text-center">Order No.</th>
									<th class="text-center">Carrier Name</th>
									<th class="text-center">Estimated Arrival</th>
									<th class="text-center">Status</th>
								</tr>
							</thead>

							<tbody>
								@forelse ($cancellations as $cancelled)
								<tr>
									<td class="text-center">{{ $cancelled->tracking_number }}</td>
									<td class="text-center">{{ $cancelled->supplier->getName() }}</td>
									<td class="text-center">{{ $cancelled->transaction->transaction_number }}</td>
									<td class="text-center">{{ $cancelled->delivery->courier_name }}</td>
									<td class="text-center">{{ $cancelled->estimated_delivery_at->format('M d, Y') }}</td>
									<td class="text-center">{{ $cancelled->getStatus() }}</td>
								</tr>
								@empty
								<tr>
									<td colspan="6" class="text-center">No pending records</td>
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
