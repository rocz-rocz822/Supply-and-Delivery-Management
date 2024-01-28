@extends('index')
@section('admin')

<!-- Begin: Content -->
    <section id="content" class="table-layout">
        <!-- begin: .tray-center -->
        <div class="tray tray-center" style="height: 616.667px;">
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
                                {{-- <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0" title="Generate Report">
                                <i class="mdi mdi-file-document-edit-outline text-muted"></i>
                                </button> --}}
                                <a type="button"
                                    href="{{ url('action/create')}}"
                                    data-toggle="modal"
                                    data-target="#ModalCreate"
                                    class="btn btn-primary btn-gradient dark btn-block"
                                    title="Generate Supplies">Generate Supplies</a>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="row">
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
                </div> --}}

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-visible"
                                id="spy7">
                            {{-- <div class="panel-heading">
                                <div class="panel-title hidden-xs">
                                    <span class="glyphicon glyphicon-tasks"></span>
                                    Reorder Table Columns
                                </div>
                            </div> --}}
                            <div class="panel-body pn">
                                <div id="datatable8_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <table class="table display dataTable" id="datatable8" cellspacing="0"
                                            width="100%" role="grid" aria-describedby="datatable8_info"
                                            style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th data-column-index="0" class="sorting_desc" tabindex="0"
                                                    aria-controls="datatable8" rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="width: 44px;" aria-sort="descending">
                                                    Name
                                                </th>
                                                <th data-column-index="1" class="sorting" tabindex="0"
                                                    aria-controls="datatable8" rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 51px;">
                                                    Position
                                                </th>
                                                <th data-column-index="2" class="sorting" tabindex="0"
                                                    aria-controls="datatable8" rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 45px;">
                                                    Office
                                                </th>
                                                <th data-column-index="3" class="sorting" tabindex="0"
                                                    aria-controls="datatable8" rowspan="1"colspan="1"
                                                    aria-label="Age: activate to sort column ascending"
                                                    style="width: 23px;">
                                                    Age
                                                </th>
                                                <th data-column-index="4" class="sorting" tabindex="0"
                                                    aria-controls="datatable8" rowspan="1"colspan="1"
                                                    aria-label="Start date: activate to sort column ascending"
                                                    style="width: 51px;">
                                                    Start date
                                                </th>
                                                <th data-column-index="5" class="sorting" tabindex="0"
                                                    aria-controls="datatable8" rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 38px;">
                                                    Salary
                                                </th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1"
                                                    colspan="1">Name
                                                </th>
                                                <th rowspan="1"
                                                    colspan="1">Position
                                                </th>
                                                <th rowspan="1"
                                                    colspan="1">Office
                                                </th>
                                                <th rowspan="1"
                                                    colspan="1">Age
                                                </th>
                                                <th rowspan="1"
                                                    colspan="1">Start date
                                                </th>
                                                <th rowspan="1"
                                                    colspan="1">Salary
                                                </th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Tiger Nixon</td>
                                                <td class="">System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Tatyana Fitzpatrick</td>
                                                <td class="">Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Sonya Frost</td>
                                                <td class="">Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Quinn Flynn</td>
                                                <td class="">Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Paul Byrd</td>
                                                <td class="">Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Michael Silva</td>
                                                <td class="">Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Jenette Caldwell</td>
                                                <td class="">Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Haley Kennedy</td>
                                                <td class="">Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Gloria Little</td>
                                                <td class="">Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Dai Rios</td>
                                                <td class="">Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="dt-panelfooter clearfix">
                                        <div class="dataTables_info" id="datatable8_info" role="status" aria-live="polite">
                                            Showing 1 to 10 of 13 entries
                                        </div>
                                        <div class="dataTables_paginate paging_simple_numbers" id="datatable8_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled"
                                                    aria-controls="datatable8" tabindex="0" id="datatable8_previous">
                                                    <a href="#">Previous</a>
                                                </li>
                                                <li class="paginate_button active" aria-controls="datatable8" tabindex="0">
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="paginate_button " aria-controls="datatable8" tabindex="0">
                                                    <a href="#">2</a>
                                                </li>
                                                <li class="paginate_button next" aria-controls="datatable8" tabindex="0"
                                                    id="datatable8_next">
                                                    <a href="#">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- end: .tray-center -->
    </section>
{{-- End Section --}}
    @include('body.footer')

@endsection
