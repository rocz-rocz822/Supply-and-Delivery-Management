@extends('index')

@section('admin')
	<!-- Begin: Content  -->
	<section id="content" class="table-layout animated fadeIn">
		<!-- begin: .tray-center  -->
		<div class="tray tray-center">
			<div class="row">
				<div class="col-md-12 grid-margin">
					<!-- Tags -->
					<div class="d-flex justify-content-between flex-wrap">
						<div class="d-flex align-items-end flex-wrap">
							<div class="me-md-3 me-xl-5">
								<h1>Transactions</h1>
								<p class="mb-md-0">COMET.al Transaction History</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- receipt table --}}
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
								@forelse ($transactions as $transaction)
								<tr>
									<td class="text-center">{{ $transaction->tracking_number }}</td>
									<td class="text-center">{{ $transaction->supplier->getName() }}</td>
									<td class="text-center">{{ $transaction->transaction->transaction_number }}</td>
									<td class="text-center">{{ $transaction->delivery->courier_name }}</td>
									<td class="text-center">{{ $transaction->estimated_delivery_at->format('M d, Y') }}</td>
									<td class="text-center">
										@if ($transaction->status == 0)
											@php($color = 'info')
										@elseif ($transaction->status == 1)
											@php($color = 'warning')
										@elseif ($transaction->status == 2)
											@php($color = 'success')
										@elseif ($transaction->status == 3 || $transaction->status == 4)
											@php($color = 'danger')
										@endif
										<span class="badge badge-{{ $color }} badge-pill">
											{{ $transaction->getStatus() }}
										</span>
									</td>
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
		<!-- // end: .tray-center  -->
	</section>
	<!-- // End: Content -->
@endsection
