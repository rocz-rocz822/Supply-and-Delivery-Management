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
								<h1>Delivered</h1>
								<p><code>Records</code></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- delivered table --}}
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
								@forelse ($delivered as $d)
								<tr>
									<td class="text-center">{{ $d->tracking_number }}</td>
									<td>{{ $d->supplier->getName() }}</td>
									<td>{{ $d->transaction->transaction_number }}</td>
									<td>{{ $d->delivery->courier_name }}</td>
									<td>{{ $d->estimated_delivery_at->format('M d, Y') }}</td>
									<td>{{ $d->getStatus() }}</td>

									{{-- Action Button Group --}}
									<td>
										<div class="btn-group">
											<button data-value="4"
												data-action="{{ route('e-commerce.delivery.update.status', [$d->id]) }}"
												class="btn btn-xs btn-danger action-button">
												Return
											</button>
										</div>
									</td>
								</tr>
								@empty
								<tr>
									<td colspan="7" class="text-center">No pending records</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>

			{{-- Hidden action form --}}
			<form id="action-form"
				method="post"
				class="hidden">
				@csrf
				@method('PATCH')
				<input type="hidden" id="status" name="status" value="">
			</form>

			@include('body.footer')
		</div>
		<!-- end: .tray-center -->
	</section>
	<!-- // End: Content -->
@endsection

@section('jsInject')
let	actionForm = document.querySelector('#action-form');
let statusFld = actionForm.querySelector('#status');

document.addEventListener('click', (e) => {
	let	target;
	if (target = e.target.closest('.action-button')) {
		e.preventDefault();
		actionForm.action = target.dataset.action;
		statusFld.value = target.dataset.value;
		actionForm.submit();
	}
});
@endsection
