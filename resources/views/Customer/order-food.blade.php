@extends('Home')

@section('content')
<section class="section">
    <div class="section-body">
    <div class="invoice">
        <div class="invoice-print">
        <div class="row">
            <div class="col-lg-12">
            <div class="invoice-title">
                <h2>Order</h2>
                <div class="invoice-number">
                <a href="/modal-food" class="btn btn-success btn-icon icon-left"><i class="fas fa-plus"></i> Add Food</a>
                </div>
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
                    <td>1</td>
                    <td>Nasi Goreng</td>
                    <td class="text-center">Rp 15.000</td>
                    <td class="text-center">1</td>
                    <td class="text-right">Rp 15.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jus</td>
                    <td class="text-center">Rp 5.000</td>
                    <td class="text-center">2</td>
                    <td class="text-right">Rp 10.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Capjay</td>
                    <td class="text-center">Rp 25.000</td>
                    <td class="text-center">1</td>
                    <td class="text-right">Rp 25.000</td>
                </tr>
                </table>
            </div>
            <div class="row mt-4">
                <div class="col-lg-8">
                <div class="form-group col-8">
                    <label>Choose Agent</label>
                    <select class="form-control selectric" name="#">
                    <option value="">--Choose Agent--</option>
                    <option value="#">Mastri</option>
                    <option value="#">Mastwo</option>
                    </select>
                </div>
                <div class="form-group col-8">
                    <label>Payment</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-8">
                    <label>Message</label>
                    <textarea class="form-control" name="message" required=""></textarea>
                </div>
                </div>
                <div class="col-lg-4 text-right">
                <hr class="mt-2 mb-2">
                <div class="invoice-detail-item">
                    <div class="invoice-detail-name">Total</div>
                    <div class="invoice-detail-value invoice-detail-value-lg">Rp 50.000</div>
                </div>
                <hr><hr><hr><hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Submit
                    </button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
</section>

@endsection