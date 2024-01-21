@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">

    <!-- Starting Row -->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <!-- Tag -->
                    <div class="me-md-3 me-xl-5">
                        <h2>Returns</h2>
                        <p class="mb-md-0">COMETal Supplier<code>Admin View</code></p>
                    </div>
                </div>
                <!-- Buttons -->
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <!-- <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                    </button>
                    <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                    </button> -->
                    <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-inverse-primary btn-fw">Generate Supplies</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">History</h4>
                <p class="card-description">
                Status <code>Returned</code>
                </p>
                <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>1</td>
                        <td>Herman Beck</td>
                        <td></td>
                        <td>May 15, 2015</td>
                    </tr>
                    <tr>
                        <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>2</td>
                        <td>Messy Adams</td>
                        <td></td>
                        <td>July 1, 2015</td>
                    </tr>
                    <tr>
                        <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>3</td>
                        <td>John Richards</td>
                        <td></td>
                        <td>Apr 12, 2015</td>
                    </tr>
                    <tr>
                        <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>4</td>
                        <td>Peter Meggik</td>
                        <td></td>
                        <td>May 15, 2015</td>
                    </tr>
                    <tr>
                        <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>5</td>
                        <td>Edward</td>
                        <td></td>
                        <td>May 03, 2015</td>
                    </tr>
                    <tr>
                        <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>6</td>
                        <td>John Doe</td>
                        <td></td>
                        <td>April 05, 2015</td>
                    </tr>
                    <tr>
                        <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>7</td>
                        <td>Henry Tom</td>
                        <td></td>
                        <td>June 16, 2015</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection