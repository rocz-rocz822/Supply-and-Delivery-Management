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
								<h1>Defective</h1>
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
								@forelse ($returnees as $returned)
								<tr>
									<td class="text-center">{{ $returned->tracking_number }}</td>
									<td class="text-center">{{ $returned->supplier->getName() }}</td>
									<td class="text-center">{{ $returned->transaction->transaction_number }}</td>
									<td class="text-center">{{ $returned->delivery->courier_name }}</td>
									<td class="text-center">{{ $returned->estimated_delivery_at->format('M d, Y') }}</td>
									<td class="text-center">{{ $returned->getStatus() }}</td>
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
