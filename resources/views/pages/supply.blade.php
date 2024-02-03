@extends('index')

@section('cssInject')
<style>
	@media (min-width: 768px) {
		.text-md-left { text-align: left !important; }
	}
</style>
@endsection

<!-- Begin: Content -->
@section('admin')
	<section id="content" class="table-layout">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-md-12 grid-margin">
					{{-- Tags --}}
					<div class="d-flex justify-content-between flex-wrap">
						<div class="d-flex align-items-end flex-wrap">
							<div class="me-md-3 me-xl-5">
								<h1>Supplies</h1>
								<p class="mb-md-0 text-info mn">Records</p>
							</div>
						</div>
					</div>

					<div class="d-flex justify-content-between flex-wrap">
						{{-- Generate Button --}}
						<a type="button"
							href="{{ route('e-commerce.supply.create')}}"
							class="btn btn-primary mr10 mt10 pull-right"
							title="Generate Supplies">Generate Supplies
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-visible mr10 mt10" id="spy7">
						<div class="panel-body pn">
							<form id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"
								method="POST" action="{{ route('e-commerce.supply.deliver') }}">
								@csrf

								{{-- TABLE --}}
								<table class="table display dataTable" id="datatable" cellspacing="0"
										width="100%" role="grid" aria-describedby="datatable_info"
										style="width: 100%;">
									{{-- TABLE HEAD --}}
									<thead>
										<tr role="row">
											{{-- PRODUCT NAME --}}
											<th data-column-index="0" class="sorting_desc text-center" tabindex="0"
												aria-controls="datatable" rowspan="1" colspan="1"
												aria-label="Name: activate to sort column ascending"
												aria-sort="descending">
												Product Name
											</th>

											{{-- CATEGORIES --}}
											<th data-column-index="1" class="sorting text-center" tabindex="0"
												aria-controls="datatable" rowspan="1" colspan="1"
												aria-label="Categories: activate to sort column ascending">
												Categories
											</th>

											{{-- QUANTITY --}}
											<th data-column-index="2" class="sorting text-center" tabindex="0"
												aria-controls="datatable" rowspan="1" colspan="1"
												aria-label="Quantity: activate to sort column ascending">
												Quantity
											</th>

											{{-- ACTION AREA --}}
											<th>&nbsp;</th>

											{{-- FOR DELIVERY --}}
											<th data-column-index="3" class="sorting text-center" tabindex="0"
												aria-controls="datatable" rowspan="1" colspan="1"
												aria-label="For Delivery: activate to sort the column ascending">
												For Delivery
											</th>

											{{-- ERROR MESSAGE --}}
											@error('supplies.*')
											<th data-column-index="4" class="sorting text-center" tabindex="0"
												aria-controls="datatable" rowspan="1" colspan="1"
												aria-label="Validation Error: activate to sort the column ascending">
												&nbsp;
											</th>
											@enderror
										</tr>
									</thead>

									{{-- TABLE BODY --}}
									<tbody>
										@php($index = 0)

										@forelse ($supplies as $supply)
										<tr role="row" class="{{ $index % 2 == 0 ? 'even' : 'odd' }}">
											<th class="sorting_0 text-center">{{ ucfirst($supply->product->name) }}</th>
											<td class="sorting_1 text-center">{{ implode(", ", $supply->product->categories()->pluck('category')->toArray()) }}</td>
											<td class="sorting_2 text-center">{{ $supply->quantity }}</td>

											{{-- Checkbox which will define what to send for delivery --}}
											<td class="sorting_3 text-center">
												<div class="checkbox-custom checkbox-primary h-20" style="display: flex; justify-content: center;">
													<input type="checkbox" id="checkbox{{ $supply->id }}"
														name="supplies[]"
														value="{{ $supply->id }}"
														class="form-input"
														@if (old("supplies.{$index}") !== null)
														checked
														@endif>
													<label for="checkbox{{ $supply->id }}"></label>
												</div>
											</td>

											{{-- Action Button Group --}}
											<td class="text-center">
												<form id="delete-{{ $index }}" method="POST" action="{{ route('e-commerce.supply.destroy', [$supply->id]) }}">
													@csrf
													@method('DELETE')

													<button type="submit" form="delete-{{ $index }}" class="btn btn-danger">
														Delete
													</button>
												</form>
											</td>

											{{-- Conditional Error Message when the item encounters a validation error --}}
											@error("supplies.{$index}")
											<td class="sorting_4 text-center">
												<small class="text-danger">
													{{ $message }}
												</small>
											</td>
											@else
												@error('supplies.*')
												<td class="sorting_4 text-center">
													&nbsp;
												</td>
												@enderror
											@enderror
										</tr>

										@php($index++)
										@empty
										<tr role="row" class="even">
											<td class="text-center" colspan="4">No Record Found</td>
										</tr>
										@endforelse
									</tbody>

									{{-- TABLE FOOT --}}
									<tfoot>
										<tr>
											{{-- ERROR MESSAGE --}}
											@error('supplies')
											<td colspan="2">
												<div class="text-center text-md-left">
													<small class="text-danger">
														{{ $message }}
													</small>
												</div>
											</td>
											<td>&nbsp;</td>
											@enderror
											{{-- BUTTONS --}}
											<td colspan="@error('supplies.*') 2 @else 5 @enderror">
												<div class="text-right">
													<button type="button" onclick="document.querySelector(`#datatable_wrapper`).submit();" class="btn btn-primary">Submit</button>
													<button type="button" onclick="document.querySelectorAll(`[name='supplies[]']`).forEach(v => v.checked = true);" class="btn btn-default">Check All</button>
													<button type="reset" class="btn btn-default">Uncheck All</button>
												</div>
											</td>
										</tr>
								</table>
								@method('POST')
							</form>
						</div>
					</div>
				</div>

				{{-- COURIER NAME --}}
				<div class="text-center">
					<div class="form-group">
						<label for="courier" class="control-label">Courier Name</label>
						<input type="text" name="courier_name" id="courier" class="form-control h-30" form="datatable_wrapper" required>
						@error('courier_name')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- End Section --}}

	@include('body.footer')
@endsection

{{-- Defines whether to initialize the Data Table or not at views.index --}}
{{-- This is to prevent the alert from popping up --}}
@if (!$hasSupplies)
@section('jsInject', 'disableDataTable = true;')
@endif
