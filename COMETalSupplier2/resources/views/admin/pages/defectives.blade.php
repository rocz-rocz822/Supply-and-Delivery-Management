@extends('admin.admin_master')
@section('admin')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">History</h4>
        <p class="card-description">
        Defective <code>recent</code>
        </p>
        <div class="table-responsive">
        <table class="table table-hover">
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
                <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block">
                        <i class="mdi mdi-window-close"></i>
                    </button>  
                </td>
            </tr>
            <tr>
                <td class="py-1">
                    <img src="../../images/faces/face1.jpg" alt="image"/>
                </td>
                <td>2</td>
                <td>Messy Adams</td>
                <td></td>
                <td>July 1, 2015</td>
                <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block">
                        <i class="mdi mdi-window-close"></i>
                    </button>  
                </td>
            </tr>
            <tr>
                <td class="py-1">
                    <img src="../../images/faces/face1.jpg" alt="image"/>
                </td>
                <td>3</td>
                <td>John Richards</td>
                <td></td>
                <td>Apr 12, 2015</td>
                <td>
                   <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block">
                        <i class="mdi mdi-window-close"></i>
                    </button>  
                </td>
            </tr>
            <tr>
                <td class="py-1">
                    <img src="../../images/faces/face1.jpg" alt="image"/>
                </td>
                <td>4</td>
                <td>Peter Meggik</td>
                <td></td>
                <td>May 15, 2015</td>
                <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block">
                        <i class="mdi mdi-window-close"></i>
                    </button>                    
                </td>
            </tr>
            <tr>
                <td class="py-1">
                    <img src="../../images/faces/face1.jpg" alt="image"/>
                </td>
                <td>5</td>
                <td>Edward</td>
                <td></td>
                <td>May 03, 2015</td>
                <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block">
                        <i class="mdi mdi-window-close"></i>
                    </button>  
                </td>
            </tr>
            <tr>
                <td class="py-1">
                    <img src="../../images/faces/face1.jpg" alt="image"/>
                </td>
                <td>6</td>
                <td>John Doe</td>
                <td></td>
                <td>April 05, 2015</td>
                <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block">
                        <i class="mdi mdi-window-close"></i>
                    </button>  
                </td>
            </tr>
            <tr>
                <td class="py-1">
                    <img src="../../images/faces/face1.jpg" alt="image"/>
                </td>
                <td>7</td>
                <td>Henry Tom</td>
                <td></td>
                <td>June 16, 2015</td>
                <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon me-3 d-none d-md-block">
                        <i class="mdi mdi-window-close"></i>
                    </button>  
                </td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>

@endsection