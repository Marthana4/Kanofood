@extends('Home')

@section('content')
<section class="section">
  <div class="section-body">
    <h2 class="section-title">Order</h2>
    <p class="section-lead">
        You can manage all order, such as editing, deleting and more.
    </p>

    <div class="row">
      <div class="col-12">
        <div class="card mb-0">
          <div class="card-body">
            <div class="float-left">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="/order-admin">All <span class="badge badge-white">{{$total_order}}</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/order_process">Process <span class="badge badge-primary">{{$process_order}}</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/order_done">Done <span class="badge badge-primary">{{$done_order}}</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/order_cancel">Cancel <span class="badge badge-primary">{{$cancel_order}}</span></a>
                </li>
              </ul>
            </div>
            <div class="float-right">
              <form method="GET" action="{{ url('order-admin') }}"></form>
              <form class="form-inline">
                <div class="search-element">
                  <input class="form-control" name="keyword" value="{{$keyword}}" type="text" placeholder="Search" >
                  <button class="btn btn btn-icon btn-light" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>All Order</h4>
          </div>
          <div class="card-body">
            <div class="dropdown d-inline mr-2">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Easy Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
            <div class="float-left">
              <select class="form-control selectric">
                <option>Action For Selected</option>
                <option>Select by Customer</option>
                <option>Select by Agent</option>
                <option>Select by Seller</option>
              </select>
            </div>
            <div class="float-right">
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

            <div class="clearfix mb-3"></div>

            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>Nama Pemesan</th>
                  <th>Total Order</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                <tr>
                  @foreach($order as $key=>$value)
                    <td>{{$key+1}}</td>
                    <td>{{ $value->name}}</td>
                    <td>Rp.{{ $value->total_order }}</td>
                    <td>{{$value->order_date}}</td>
                   @if($value->order_status =='process by agent')
                    <td><div class="badge badge-warning">{{$value->order_status}}</div></td>
                   @elseif($value->order_status =='process by seller')
                    <td><div class="badge badge-warning">{{$value->order_status}}</div></td>
                   @elseif($value->order_status =='cancel by agent')
                    <td><div class="badge badge-danger">{{$value->order_status}}</div></td>
                   @elseif($value->order_status =='cancel by seller')
                    <td><div class="badge badge-danger">{{$value->order_status}}</div></td>
                   @else
                    <td><div class="badge badge-success">{{$value->order_status}}</div></td>
                   @endif
                    <td><a href="{{ url('order-admin/'.$value->id_order.'/edit') }}" class="btn btn-secondary">Detail</a></td>
                </tr>
                  @endforeach
              </table>
            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  <li class="page-item ">
                     {{ $order->links()}}
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection