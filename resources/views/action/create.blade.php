@extends('index')

<!-- Begin: Content -->
@section('admin')
	<section id="content" class="table-layout animated fadeIn">
		<div class="tab-content mw900 center-block center-children">
			<!-- Project Quote -->
			<div class="admin-form tab-pane active" id="create" role="tabpanel">
				<div class="panel panel-success panel-border top">
					<div class="panel-heading">
						<span class="panel-title">
							<i class="fa-solid fa-truck-ramp-box"></i>Add Supplies
						</span>
					</div>

					<form method="POST" action="{{ route('e-commerce.supply.store') }}" id="form-create" enctype="multipart/form-data">
						@csrf

						{{-- CATEGORY --}}
						<div class="panel-body p25">
							<div class="section row">
								<div class="col-md-4">
									<div class="section">
										<label for="category" class="field-label">Category</label>

										<label class="field select">
											<select id="category" name="category">
												<option value="" class="hidden">Select Category...</option>

												@foreach ($categories as $category)
													@if (old('category') == $category->id)
														<option value="{{ $category->id }}" selected>{{ $category->category }}</option>
													@else
														<option value="{{ $category->id }}">{{ $category->category }}</option>
													@endif
												@endforeach
											</select>
											{{-- <i class="arrow double"></i> --}}
										</label>

										@error('category')
										<small class="text-danger">
											{{ $message }}
										</small>
										@enderror
									</div>
								</div>
							</div>

							{{-- PRODUCT --}}
							<div class="section row">
								<div class="col-md-4">
									<div class="section">
										<label for="budget" class="field-label">Product</label>

										<label class="field select">
											<select id="product" name="product">
												<option value="" class="hidden">Select Product...</option>
												@foreach ($products as $product)
													@if (old('product') == $product->id)
														<option value="{{ $product->id }}" selected>{{ $product->name }}</option>
													@else
														<option value="{{ $product->id }}">{{ $product->name }}</option>
													@endif
												@endforeach
											</select>
											{{-- <i class="arrow double"></i> --}}
										</label>

										@error('product')
										<small class="text-danger">
											{{ $message }}
										</small>
										@enderror
									</div>
								</div>

								{{-- QUANTITY --}}
								<div class="col-md-4">
									<div class="section">
										<label for="quantity" class="field-label">Quantity</label>

										<label for="quantity" class="field">
											<input type="number" name="quantity" id="quantity" class="gui-input" placeholder="Quantity" value="{{ old('quantity') }}">
										</label>

										@error('quantity')
										<small class="text-danger">
											{{ $message }}
										</small>
										@enderror
									</div>
								</div>
							</div>
						</div>

						<div class="panel-footer">
							<button type="submit" class="button btn-primary">Submit</button>
							<a href="{{ route('e-commerce.supply.index')}}" type="button" class="button btn-default">Cancel</a>
							<button type="reset" class="button">Reset Form</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	{{-- End Section --}}

	@include('body.footer')
@endsection
