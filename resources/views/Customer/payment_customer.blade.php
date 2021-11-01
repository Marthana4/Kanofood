@extends('Home')

@section('content')
<br>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4>Payment</h4>

</div>
        <div class="card-body">
        <div class="float-left">
        <form>
        <div class="input-group">
        <input type="text" class="form-control datepicker" placeholder="Date Start"> 
        <input type="text" class="form-control datepicker" placeholder="Date End"> 
        <div class="input-group-append">
        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
        </div>
    </div>
    </form>
</div>
<div class="float-right">

                
    <form>
        <div class="group">
        <button class="btn btn-success">Export Xls</button>
        <button class="btn btn-danger">Export Pdf</button>
        
</div>
    </form>
</div>
<div class="clearfix mb-3"></div>
        <div class="table-responsive">
    
            <table class="table table-striped" id="table-2">
            <thead>
                <tr>
                <th class="text-center">
                    <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                    </div>
                </th>
                <th>No</th>
                <th>No.Order</th>
                <th>Pemesan</th>
                <th>Total Order</th>
                <th>Order Status</th>
                <th>payment</th>
                <th>Payment remaining</th>
                <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                    <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                    </div>
                </td>
                <td>1</td>
                <td>110</td>
                <td>dinda</td>
                <td>Rp. 50.000</td>
                <td><div class="badge badge-success">Completed</div></td>
                <td>50.000</td>
                <td>Rp. 0</td>
                <td>08/05/2021</td>
                </tr>
                <tr>
                <td>
                    <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                    </div>
                </td>
                <td>2</td>
                <td>111</td>
                <td>dinda</td>
                <td>Rp. 68.000</td>
                <td><div class="badge badge-warning">In Process</div></td>
                <td>70.000</td>
                <td>2.000</td>
                <td>08/05/2021</td>
                </tr>
                <tr>
                <td>
                    <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                    </div>
                </td>
                <td>3</td>
                <td>112</td>
                <td>dinda</td>
                <td>-</td>
                <td><div class="badge badge-danger">Canceled</div></td>
                <td>-</td>
                <td>-</td>
                <td>08/05/2021</td>
                </tr>
            </tbody>
            </table>
            <div class="float-right">
                      <nav>
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>            

@endsection