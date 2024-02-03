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
									<td>{{ $pending->supplier->getName() }}</td>
									<td>{{ $pending->transaction->transaction_number }}</td>
									<td>{{ $pending->delivery->courier_name }}</td>
									<td>{{ $pending->estimated_delivery_at->format('M d, Y') }}</td>
									<td>{{ $pending->getStatus() }}</td>

									{{-- Action Button Group --}}
									<td>
										<div class="btn-group">
											{{-- If the stock is newly created --}}
											@if ($pending->getStatus() == 'Created')
											<button data-value="1"
												data-action="{{ route('e-commerce.delivery.update.status', [$pending->id]) }}"
												class="btn btn-xs btn-success action-button">
												Deliver
											</button>

											<button data-value="3"
												data-action="{{ route('e-commerce.delivery.update.status', [$pending->id]) }}"
												class="btn btn-xs btn-danger action-button">
												Cancel
											</button>

											{{-- If the stock is now pending --}}
											@elseif ($pending->getStatus() == 'Pending')
											<button data-value="2"
												data-action="{{ route('e-commerce.delivery.update.status', [$pending->id]) }}"
												class="btn btn-xs btn-success action-button">
												Complete
											</button>

											<button data-value="3"
												data-action="{{ route('e-commerce.delivery.update.status', [$pending->id]) }}"
												class="btn btn-xs btn-danger action-button">
												Cancel
											</button>
											@endif
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
