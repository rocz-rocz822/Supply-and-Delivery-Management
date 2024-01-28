@extends('index')
@section('admin')

<!-- Begin: Content -->
    <section id="content" class="table-layout">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <!-- Tags -->
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h1>Supplies</h1>
                                <p class="mb-md-0 text-info mn">Records</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between flex-wrap">
                        <a type="button"
                            href="{{ url('action/create')}}"
                            class="btn btn-primary mr10 mt10 pull-right"
                            title="Generate Supplies">Generate Supplies
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-visible mr10 mt10"
                            id="spy7">
                        <div class="panel-body pn">
                            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <table class="table display dataTable" id="datatable" cellspacing="0"
                                        width="100%" role="grid" aria-describedby="datatable_info"
                                        style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th data-column-index="0" class="sorting_desc" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Name: activate to sort column ascending"
                                                style="width: 44px;" aria-sort="descending">
                                                Supply ID
                                            </th>
                                            <th data-column-index="1" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending"
                                                style="width: 51px;">
                                                Position
                                            </th>
                                            <th data-column-index="2" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 45px;">
                                                Office
                                            </th>
                                            <th data-column-index="3" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1"colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 23px;">
                                                Age
                                            </th>
                                            <th data-column-index="4" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1"colspan="1"
                                                aria-label="Start date: activate to sort column ascending"
                                                style="width: 51px;">
                                                Start date
                                            </th>
                                            <th data-column-index="5" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Salary: activate to sort column ascending"
                                                style="width: 38px;">
                                                Salary
                                            </th>
                                        </tr>
                                    </thead>
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
