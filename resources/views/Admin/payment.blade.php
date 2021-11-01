@extends('Home')

@section('content')
<section class="section">
    <div class="section-body">
      <h2 class="section-title">Payment</h2>
      <p class="section-lead">You can export all data.</p>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Payment</h4>
              <div class="card-header-action ">
                <div class="d-flex flex-row-reverse">
                  <div class="mx-2">
                    <form method="GET" action="{{ url('payment-admin') }}"></form>
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
          <hr>
          <div class="card-body">
            <div class="float-left">
              <form action="/payment_search" method="GET">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="input-group">
                      <label class="col-md-5">Date Start : </label>
                      <label class="col-md-5">Date End : </label>
                    </div>
                    <div class="input-group">
                    <input type="date" class="form-control" id="fromDate" name="fromDate" required/>
                    <input type="date" class="form-control" id="toDate" name="toDate" required/>
                     <div class="input-group-append">
                       <button class="btn btn-primary" type="submit" name="search" title="search"><i class="fas fa-search"></i></button>
                     </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="float-right">         
              <form>
                <div class="group">
                  <a href="/payment/export_excel" class="btn btn-success my-3" target="_blank">Export EXCEL</a>
                  <a href="/payment/cetak_pdf" class="btn btn-danger" target="_blank">Export PDF</a>
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
                    <th>level</th>
                    <th>Total Order</th>
                    <th>Order Status</th>
                    <th>payment</th>
                    <th>Payment remaining</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach($payments as $key=>$value)
                      <td>
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-{{$key}}" name="is_read{{$key}}">
                          <label for="checkbox-{{$key}}" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>{{$key+1}}</td>
                      <td>0{{ $value->id_order}}</td>
                      <td>{{ $value->name}}</td>
                      <td>{{ $value->level}}</td>
                      <td>Rp.{{ $value->total_order }}</td>
                     @if($value->payment_status =='In Process')
                      <td><div class="badge badge-warning">{{$value->payment_status}}</div></td>
                     @elseif($value->payment_status =='Canceled')
                      <td><div class="badge badge-danger">{{$value->payment_status}}</div></td>
                     @else
                      <td><div class="badge badge-success">{{$value->payment_status}}</div></td>
                     @endif
                      <td>Rp.{{ $value->user_cost }}</td>
                      <td>Rp.{{ $value->user_cost_remaining }}</td>
                      <td>{{$value->order_date}}</td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="card-footer text-right">
                <nav class="d-inline-block">
                  <ul class="pagination mb-0">
                    <li class="page-item ">
                      {{ $payments->links()}}
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
</section>

<script>
    // fungsi saat ingin di check all atau dipilih semua
    $("#checkbox-all").change(function(){
        $(".custom-control-input").prop("checked", $(this).prop("checked"))
    })
    // berfungsi untuk mengubah beberapa item checkbox terpilih(checklist) semua atau tidak terpilih (unchecklist)
    $(".custom-control-input").change(function(){
        if($(this).prop("checked")==false){
            $("#checkbox-all").prop("checked",false)
        }
    // saat beberapa item terpilih dan hampir semua maka akan pada checkbox yang memiliki id checkbox-all terchecklist
        if($(".custom-control-input:checked").length == $(".custom-control-input").length){
            $("#checkbox-all").prop("checked",true)
            }
    })
</script>

@endsection