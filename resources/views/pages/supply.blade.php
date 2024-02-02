@extends('index')

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

					{{-- Generate Button --}}
					<div class="d-flex justify-content-between flex-wrap">
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
							<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
								{{-- TABLE --}}
								<table class="table display dataTable" id="datatable" cellspacing="0"
										width="100%" role="grid" aria-describedby="datatable_info"
										style="width: 100%;">
									{{-- TABLE HEAD --}}
									<thead>
										<tr role="row">
											{{-- PRODUCT NAME --}}
											<th data-column-index="0" class="sorting_desc" tabindex="0"
												aria-controls="datatable" rowspan="1" colspan="1"
												aria-label="Name: activate to sort column ascending"
												style="width: 44px;" aria-sort="descending">
												Product Name
											</th>

											{{-- CATEGORIES --}}
											<th data-column-index="1" class="sorting" tabindex="0"
												aria-controls="datatable" rowspan="1" colspan="1"
												aria-label="Categories: activate to sort column ascending"
												style="width: 51px;">
												Categories
											</th>

											{{-- QUANTITY --}}
											<th data-column-index="2" class="sorting" tabindex="0"
												aria-controls="datatable" rowspan="1" colspan="1"
												aria-label="Quantity: activate to sort column ascending"
												style="width: 45px;">
												Quantity
											</th>

											{{-- ACTION AREA --}}
											<th style="width: 23px;"></th>
										</tr>
									</thead>

									{{-- TABLE BODY --}}
									<tbody>
										@php($index = 0)

										@forelse ($supplies as $supply)
										<tr role="row" class="{{ $index++ % 2 == 0 ? 'even' : 'odd' }}">
											<th class="sorting_0">{{ ucfirst($supply->product->name) }}</th>
											<td class="sorting_1">{{ implode(", ", $supply->product->categories()->pluck('category')->toArray()) }}</td>
											<td class="sorting_2">{{ $supply->quantity }}</td>
											<td></td>
										</tr>
										@empty
										<tr role="row" class="even">
											<td class="text-center" colspan="4">No Record Found</td>
										</tr>
										@endforelse
									</tbody>
								</table>
							</div>
						</div>
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
