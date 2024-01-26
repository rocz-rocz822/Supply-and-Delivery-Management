@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <!-- Card Content -->
                <div class="card-body">
                    <!-- Tags -->
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Returns</h2>
                            <h4 class="card-title">History</h4>
                        </div>
                    </div>
                    <!-- End of Tags -->

                    <!-- Status -->
                        <p class="card-description">Status</p>
                        <!-- Tabs -->
                        <ul class="nav nav-tabs px-4" id="nav-tab" role="tablist">
                            <!-- Cancelled -->
                            <li class="nav-item">
                                <a class="nav-link active" 
                                    id="cancelled-tab" 
                                    data-bs-toggle="tab" 
                                    href="#cancelled" 
                                    role="tab" 
                                    aria-controls="cancelled" 
                                    aria-selected="true">
                                    
                                    Cancelled
                                </a>
                            </li>

                            <!-- Defective -->
                            <li class="nav-item">
                                <a class="nav-link" 
                                    id="defective-tab" 
                                    data-bs-toggle="tab" 
                                    href="#defective" 
                                    role="tab" 
                                    aria-controls="defective" 
                                    aria-selected="false">
                                    
                                    Defective
                                </a>
                            </li>
                        </ul>
                        <!-- End of Tabs -->

                        <div class="tab-content ">
                           <!-- Table Content for Cancelled -->
                           <div class="tab-pane fade show active" 
                                    id="cancelled" 
                                    ole="tabpanel" 
                                    aria-labelledby="cancelled-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Delivery ID</th>
                                                <th>Returned Quantity</th>
                                                <th>Date Returned</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>#20202020202</td>
                                                <td>10</td>
                                                <td>May 15, 2023</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>#10102030402</td>
                                                <td>2</td>
                                                <td>July 1, 2023</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>#45959392931</td>
                                                <td>5</td>
                                                <td>Apr 12, 2023</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>#10294053201</td>
                                                <td>1</td>
                                                <td>May 15, 2023</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>#20405060201</td>
                                                <td>2</td>
                                                <td>May 03, 2023</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>#10204050691</td>
                                                <td>3</td>
                                                <td>April 05, 2022</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>#10103050691</td>
                                                <td>4</td>
                                                <td>June 16, 2023</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End of Table Content for Cancelled -->


                           <!-- Table Content for Defective -->
                            <div class="tab-pane fade" 
                                    id="defective" 
                                    ole="tabpanel" 
                                    aria-labelledby="defective-tab">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Delivery ID</th>
                                                <th>Defective Quantity</th>
                                                <th>Date Returned</th>                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Herman Becky</td>
                                                <td></td>
                                                <td>May 15, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block" title="Dispose">
                                                        <i class="mdi mdi-window-close"></i>
                                                    </button>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Messy Adams</td>
                                                <td></td>
                                                <td>July 1, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block" title="Dispose">                                         <i class="mdi mdi-window-close"></i>
                                                    </button>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>John Richards</td>
                                                <td></td>
                                                <td>Apr 12, 2015</td>
                                                <td>
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block" title="Dispose">                                         <i class="mdi mdi-window-close"></i>
                                                    </button>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Peter Meggik</td>
                                                <td></td>
                                                <td>May 15, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block" title="Dispose">                                         <i class="mdi mdi-window-close"></i>
                                                    </button>                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Edward</td>
                                                <td></td>
                                                <td>May 03, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block" title="Dispose">                                         <i class="mdi mdi-window-close"></i>
                                                    </button>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>John Doe</td>
                                                <td></td>
                                                <td>April 05, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block" title="Dispose">                                         <i class="mdi mdi-window-close"></i>
                                                    </button>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Henry Tom</td>
                                                <td></td>
                                                <td>June 16, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block" title="Dispose">                                         <i class="mdi mdi-window-close"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End of Table Content for Defective -->
                        </div>
                    <!-- End of Status -->
                </div>
                <!-- End of Card Content -->
            </div>
        </div>
    </div>
</div>


@endsection