@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    
    <div class="row">
      <div class="col-md-12 grid-margin">
          <!-- Tags -->
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
                <div class="me-md-3 me-xl-5">
                  <h2>Transactions</h2>
                  <p class="mb-md-0">COMET.al Transaction History</p>
                </div>
            </div>

          <!-- Buttons -->
          <div class="d-flex justify-content-between align-items-end flex-wrap">
              <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
              <i class="mdi mdi-download text-muted"></i>
              </button>
              <!-- <button class="btn btn-primary mt-2 mt-xl-0">Generate invoice</button> -->
          </div>
          </div>
      </div>
    </div>

    <!-- // Begin: Content  -->
  <section id="content" class="table-layout animated fadeIn">

    <!-- // begin: .tray-center  -->
    <div class="tray tray-center">

        <!-- // recent orders table  -->
      <div class="panel">
        <div class="panel-body pn">
          <div class="table-responsive">
            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
              <thead>
                <tr class="bg-light">
                  <th>Transaction ID</th>
                  <th>Delivery ID</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
                <tr>
                  <td>#50362061</td>
                  <td>#61473172</td>
                  <td>01/11/2015</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- // end: .tray-center  -->
  </section>
  <!-- // End: Content -->
</div>



@endsection