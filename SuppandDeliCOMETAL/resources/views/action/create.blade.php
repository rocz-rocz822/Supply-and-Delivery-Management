@extends('index')
@section('admin')

<!-- Begin: Content -->
<section id="content" class="table-layout animated fadeIn">
    <div class="tab-content mw900 center-block center-children">

        <!-- Project Quote -->
        <div class="admin-form tab-pane active" id="create" role="tabpanel">
            <div class="panel panel-success panel-border top">
                <div class="panel-heading">
                    <span class="panel-title">
                       <i class="fa-solid fa-truck-ramp-box"></i>Add Supplies</span>
                </div>
                <!-- end .form-header section -->

                <form method="post" action="/" id="form-create">
                    <div class="panel-body p25">
                        <div class="section row">

                            <div class="col-md-4">
                                <div class="section">
                                    <label for="budget" class="field-label">Category</label>
                                    <label class="field select">
                                        <select id="budget" name="budget">
                                        <option value="">Select Category...</option>
                                        <option value="">Bracelets</option>
                                        <option value="">Necklaces</option>
                                        <option value="">Rings</option>
                                        <option value="">Sets</option>
                                        </select>
                                        {{-- <i class="arrow double"></i> --}}
                                    </label>
                                </div>
                                <!-- end section -->
                            </div>
                            <!-- end .colm section -->
                        </div>
                        <!-- end .section row section -->

                        <div class="section row">

                            <div class="col-md-4">
                            <div class="section">
                                    <label for="budget" class="field-label">Product</label>
                                    <label class="field select">
                                        <select id="budget" name="budget">
                                        <option value="">Select Product...</option>
                                        <option value="">$500 - $1000</option>
                                        <option value="">$1000 - $2000</option>
                                        <option value="">$2000 - $4000</option>
                                        <option value="">$5000+</option>
                                        <option value="">$5000+</option>
                                        </select>
                                        {{-- <i class="arrow double"></i> --}}
                                    </label>
                                </div>
                                <!-- end section -->

                            </div>
                            <!-- end .colm section -->

                            <div class="col-md-4">
                                <div class="section">
                                    <label for="quantity" class="field-label">Quantity</label>
                                    <label for="quantity" class="field">
                                        <input type="number" name="quantity" id="quantity" class="gui-input" placeholder="Quantity">
                                    </label>
                                </div>
                                <!-- end section -->
                            </div>
                            <!-- end .colm section -->
                        </div>
                        <!-- end .section row section -->
                    </div>
                <!-- end .form-body section -->
                <div class="panel-footer">
                    <button type="submit" class="button btn-primary">Submit</button>
                    <a href="{{ route('pages.supply')}}" type="button" class="button btn-default">Cancel</a>
                </div>
                <!-- end .form-footer section -->
                </form>
            </div>
            <!-- end .admin-form section -->
        </div>
        <!-- end: .admin-form -->

    </div>
</section>
{{-- End Section --}}

@include('body.footer')

@endsection
