@extends('admin.admin_master')
@section('admin')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between flex-wrap">
                    <!-- Tag -->
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Add Supplies</h2>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">
                        <a href="{{ url('admin/index') }}"
                            class="btn btn-danger btn-sm text-white float-end">BACK</a>
                    </div>
                </div>
            </div>
            <!-- end of header card -->

            <div class="card-body">
                <div id="supply-form">
                    <form action="{{ route('admin.create') }}" method="POST" id="addSupplies" class="form-sample">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">
                                        <b style="font-size: 15px;">Category</b>
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="category[]" class="form-control form-control-lg" id="category" required onchange="updateProductDropdown()">
                                            <option>Select a Category</option>
                                            <option value='Necklace'>Necklace</option>
                                            <option value='Ring'>Ring</option>
                                            <option value='Bracelet'>Bracelet</option>
                                            <option value='Package Set'>Package Set (necklace, ring, bracelet)</option>
                                        </select>
                                        <input type="hidden" name="selected_product" id="selected_product">
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select name="product[]" class="form-control form-control-lg" id="product" required>
                                                    <option>Select a Product</option>
                                                    <!-- Product options will be dynamically updated here -->
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="quantity[]" id="quantity" class="form-control" placeholder="Quantity" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <button type="button" onclick="submitForm()" class="btn btn-primary me-2">Send Supply</button>
                                <button class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end of card body -->
        </div>
        <!-- end of card -->
    </div>
</div>

<script>
    function updateProductDropdown() {
        var categorySelect = document.getElementById('category');
        var productSelect = document.getElementById('product');
        var selectedCategory = categorySelect.value;

        // Clear existing options
        productSelect.innerHTML = '<option>Select a Product</option>';

        // Add new options based on the selected category
        switch (selectedCategory) {
            case 'Necklace':
                addProductOption('Astra Monile');
                addProductOption('Caelum Monile');
                addProductOption('Luna Monile');
                addProductOption('Sol Monile');
                addProductOption('Noctis Monile');
                break;

            case 'Ring':
                addProductOption('Terra Annulus');
                addProductOption('Caelum Annulus');
                addProductOption('Luna Annulus');
                addProductOption('Sol Annulus');
                addProductOption('Noctis Annulus');
                break;

            case 'Bracelet':
                addProductOption('Astra Armilla');
                addProductOption('Caelum Armilla');
                addProductOption('Luna Armilla');
                addProductOption('Sol Armilla');
                addProductOption('Noctis Armilla');
                break;

            case 'Package Set':
                addProductOption('Earth and Stars Package Set');
                addProductOption('Sunkissed Sky Package Set');
                addProductOption('Iridescent Moon Package Set');
                addProductOption('Incandescent Sun Package Set');
                addProductOption('Moonlit Night Package Set');
                break;

            default:
                // If no category selected, show default option
                break;
        }
    }

    function addProductOption(productName) {
        var productSelect = document.getElementById('product');
        var option = document.createElement('option');
        option.value = productName;
        option.text = productName;
        productSelect.add(option);
    }

    function submitForm() {
        
        // Update the hidden input with selected product details
        var selectedProduct = document.getElementById('product').value;
        document.getElementById('selected_product').value = selectedProduct;
        
        // Submit the form
      // document.getElementById('addSupplies').submit();
       alert('Supply successfully added!');

       window.location.href = "{{url('admin/index')}}";
    }
</script>

@endsection
