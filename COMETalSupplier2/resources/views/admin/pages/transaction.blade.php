@extends('admin.admin_master')
@section('admin')

<!-- 
<section id="content_wrapper">
  // Start: Topbar
  <header id="topbar" class="ph10">
    //<div class="topbar-left">
      <ul class="nav nav-list nav-list-topbar pull-left">
        <li>
        <li class="active">
          <a href="{{url('employee_transactions')}}">Transactions</a>
        </li>
        </li>
      </ul>
    </div> 
    <div class="topbar-right hidden-xs hidden-sm">
      <a href="{{url('employee_orders')}}" class="btn btn-default btn-sm light fw600 ml10">
        <span class="fa fa-plus pr5"></span> New Invoice</a>
      <a href="{{url('employee_customers')}}" class="btn btn-default btn-sm light fw600 ml10">
        <span class="fa fa-plus pr5"></span> Edit Invoice</a>
      <a href="{{url('employee_customers')}}" class="btn btn-default btn-sm light fw600 ml10">
        <span class="fa fa-user pr5"></span> Delete Invoice</a>
    </div>
  </header>
  // End: Topbar 

  // Begin: Content 
  <section id="content" class="table-layout animated fadeIn">

    // begin: .tray-center 
    <div class="tray tray-center">

        // recent orders table 
      <div class="panel">
        <div class="panel-body pn">
          <div class="table-responsive">
            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
              <thead>
                <tr class="bg-light">
                  <th class="text-center">Select</th>
                  <th class="">Order Date</th>
                  <th class="">Order ID</th>
                  <th class="">Supplier</th>
                  <th class="">Description</th>
                  <th class="text-center">Order Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Louis Renold</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Louis Renold</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Sara Loft</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Frank Roles</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Michael Runes</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Amanda Marshall</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Terry Planes</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Michael Runes</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Amanda Marshall</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Terry Planes</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Amanda Marshall</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Terry Planes</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{url('employee_orders')}}#">Edit</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Delete</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="{{url('employee_orders')}}#">Pending</a>
                        </li>
                        <li>
                          <a href="{{url('employee_orders')}}#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <label class="option block mn">
                      <input type="checkbox" name="mobileos" value="FR">
                      <span class="checkbox mn"></span>
                    </label>
                  </td>
                  <td class="">
                    01/11/2015
                  </td>
                  <td class="">#50362061</td>
                  <td class="w175">
                    <span>Terry Planes</span>
                  </td>
                  <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                  <td class="text-right">
                    <div class="btn-group text-right">
                      <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="employee_orders#">Edit</a>
                        </li>
                        <li>
                          <a href="employee_orders#">Delete</a>
                        </li>
                        <li>
                          <a href="employee_orders#">Archive</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="employee_orders#">Complete</a>
                        </li>
                        <li class="active">
                          <a href="employee_orders#">Pending</a>
                        </li>
                        <li>
                          <a href="employee_orders#">Canceled</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    // end: .tray-center 
  </section>
  // End: Content 
</section> 
-->

<div class="content-wrapper">
    
    <div class="row">
    <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
            <div class="me-md-3 me-xl-5">
            <h2>Transactions</h2>
            <p class="mb-md-0">COMETal Transaction History</p>
            </div>
            <!-- <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            <p class="text-primary mb-0 hover-cursor">Analytics</p>
            </div> -->
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
            <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
            <i class="mdi mdi-download text-muted"></i>
            </button>
            <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-clock-outline text-muted"></i>
            </button>
            <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-plus text-muted"></i>
            </button>
            <button class="btn btn-primary mt-2 mt-xl-0">Generate invoice</button>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection