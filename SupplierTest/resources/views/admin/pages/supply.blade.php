@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <!-- Tables -->
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap">
                        <!-- Tag -->
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Deliveries</h2>
                                <h4 class="card-title">History</h4>
                                <p class="card-description">
                                Status <code>Delivered</code>
                                </p>
                            </div>
                        </div>
                    </div><!-- Delivery Table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Delivery ID</th>
                                    <th>Supply Quantity</th>
                                    <th>Delivery Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>#12121212121</td>
                                    <td>200</td>
                                    <td>May 15, 2023</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>#1212321324</td>
                                    <td>350</td>
                                    <td>July 1, 2023</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>#35252412134</td>
                                    <td>100</td>
                                    <td>Apr 12, 2023</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>#12413442351</td>
                                    <td>200</td>
                                    <td>May 15, 2023</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>#97987549562</td>
                                    <td>150</td>
                                    <td>May 03, 2023</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>#234567903246</td>
                                    <td>150</td>
                                    <td>April 05, 2023</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>#23959386020</td>
                                    <td>200</td>
                                    <td>June 16, 2023</td>
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