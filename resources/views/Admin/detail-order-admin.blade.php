@extends('Home')

@section('content')

<section class="section">
    <div class="section-body">
        <div class="invoice">
            <div class="invoice-print">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="invoice-title">
                            @foreach($order as $key=>$object)
                                <h2>{{$object->aname}} Order's</h2>
                            @endforeach
                        </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-md">
                                <tr>
                                    <th data-width="40">No</th>
                                    <th class="text-center">Nama Makanan</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Totals</th>
                                </tr>
                                <tr>
                                @foreach($orderdetail as $key=>$value)
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name_food }}</td>
                                    <td class="text-center">Rp.{{ $value->price }}</td>
                                    <td class="text-center">{{ $value->quantity }}</td>
                                    <td class="text-right">Rp.{{ $value->total }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="form-group col-8">
                            <label>Agent</label>
                            <input type="text" class="form-control" value="{{ $value->name }}" disabled> 
                        </div>
                        <table class="table-responsive borderless">
                            <tr>
                                <td>
                                    <div class="col-12">
                                        <label>Payment</label>
                                        <input type="text" class="form-control" value="{{ $value->cost }}"disabled>
                                    <div>
                                </td>
                                <td></td><td></td>
                                <td>
                                    <div class="col-12">
                                        <label>Payment Remaining</label>
                                        <input type="text" class="form-control" value="{{ $value->cost_remaining }}"disabled>
                                    <div>
                                </td>
                            </tr>
                        </table>
                        <div class="form-group col-8">
                            <label>Status Order</label>
                            <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">{{ $value->status}}</span>
                        </div>
                        <div class="form-group col-8">
                            <label>Message</label>
                            <input type="text" class="form-control" value="{{ $value->message }}"disabled>
                        </div>
                        <div class="form-group col-6">
                            <a href="/order-admin" class="btn btn-danger"><i class="fas fa-angle-left"></i> Back</a></td>
                        </div>
                    </div>
                        <div class="col-lg-4 text-right">
                        <div class="invoice-detail-item">
                            <div class="invoice-detail-name">Total</div>
                            <div class="invoice-detail-value invoice-detail-value-lg">Rp {{ $value->total_order }}</div>
                        </div>  
                    
                    </div>
                </div>
             </div>
        </div>
    </div>
</section>

@endsection