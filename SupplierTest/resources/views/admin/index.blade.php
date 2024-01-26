@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <!-- Tags -->
                <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                        <h2>Home</h2>
                        <p class="mb-md-0"><code>Summary</code></p>
                    </div>
                </div>
                <!-- Buttons -->
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0" title="Generate Report">
                    <i class="mdi mdi-file-document-edit-outline text-muted"></i>
                    </button>
                    <a type="button" 
                        href="{{ url('admin/create')}}"
                        data-toggle="modal"
                        data-target="#ModalCreate"
                        class="btn btn-inverse-primary btn-rounded btn-fw" 
                        title="Generate Supplies">Generate Supplies</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Delivery History -->
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Supplier History</p>
                    <div class="table-responsive">
                        <div id="recent-purchases-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row"><div class="col-sm-12 col-md-6">
                            </div>
                            <div class="col-sm-12 col-md-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="recent-purchases-listing" class="table dataTable no-footer" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="recent-purchases-listing" 
                                                rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" 
                                                style="width: 122.115px;" aria-sort="ascending"> Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" 
                                                rowspan="1" colspan="1" aria-label="Status report: activate to sort column ascending" 
                                                style="width: 159.156px;"> Status report
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" 
                                                rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                                                style="width: 108.938px;"> Office
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" 
                                                rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" 
                                                style="width: 47.8333px;"> Price
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" 
                                                rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" 
                                                    style="width: 78.9792px;"> Date
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" 
                                                rowspan="1" colspan="1" aria-label="Gross amount: activate to sort column ascending" 
                                                style="width: 120.042px;"> Gross amount
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Alvin Fisher</td>
                                            <td>Ui design completed</td>
                                            <td>East Mayra</td>
                                            <td>$23230</td>
                                            <td>18 Jul 2018</td>
                                            <td>$83127</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Betty Hunt</td>
                                            <td>Ui design not completed</td>
                                            <td>Lake Sandrafort</td>
                                            <td>$571</td>
                                            <td>25 Jun 2018</td>
                                            <td>$78952</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Emily Cunningham</td>
                                            <td>support</td>
                                            <td>Makennaton</td>
                                            <td>$939</td>
                                            <td>16 Jul 2018</td>
                                            <td>$29177</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Ernest Wade</td>
                                            <td>Levelled up</td>
                                            <td>West Fidelmouth</td>
                                            <td>$484</td>
                                            <td>08 Sep 2018</td>
                                            <td>$50862</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Jacob Kennedy</td>
                                            <td>New project</td>
                                            <td>Cletaborough</td>
                                            <td>$314</td>
                                            <td>12 Jul 2018</td>
                                            <td>$34167</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Jeremy Ortega</td>
                                            <td>Levelled up</td>
                                            <td>Catalinaborough</td>
                                            <td>$790</td>
                                            <td>06 Jan 2018</td>
                                            <td>$2274253</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Minnie Farmer</td>
                                            <td>support</td>
                                            <td>Agustinaborough</td>
                                            <td>$30</td>
                                            <td>30 Apr 2018</td>
                                            <td>$44617</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Myrtie Lambert</td>
                                            <td>Ui design completed</td>
                                            <td>Cassinbury</td>
                                            <td>$36</td>
                                            <td>05 Nov 2018</td>
                                            <td>$36422</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                            </div>
                            <div class="col-sm-12 col-md-7">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->

@endsection