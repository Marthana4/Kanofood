@extends('Home')

@section('content')
<br><br>
<div class="row">
<div class="col-md-8">
    <div class="card">
    <div class="card-header">
        <h4>Add Food</h4>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive table-invoice">
        <table class="table table-striped">
            <tr>
            <th>No</th>
            <th>Makanan</th>
            <th></th>
            <th>Quantity</th>
            <th></th>
            <th>Harga</th>
            <th>Jumlah</th>
            </tr>
            <tr>
            <td><a href="#">1</a></td>
            <td class="font-weight-600">Nasi Goreng</td>
            <td><button class="btn btn-outline-primary text-right"><i class="fas fa-minus"></i></button></td>
            <td class="text-center">1</td>
            <td><button class="btn btn-outline-primary text-right"><i class="fas fa-plus"></i></button></td>
            <td>Rp 15.000</td>
            <td>Rp 15.000</td>
            </tr>
            <tr>
            <td><a href="#">2</a></td>
            <td class="font-weight-600">Jus</td>
            <td><button class="btn btn-outline-primary text-right"><i class="fas fa-minus"></i></button></td>
            <td class="text-center">2</td>
            <td><button class="btn btn-outline-primary text-right"><i class="fas fa-plus"></i></button></td>
            <td>Rp 5.000</td>
            <td>Rp 10.000</td>
            </tr>
            <tr>
            <td><a href="#">3</a></td>
            <td class="font-weight-600">Capjay</td>
            <td><button class="btn btn-outline-primary text-right"><i class="fas fa-minus"></i></button></td>
            <td class="text-center">1</td>
            <td><button class="btn btn-outline-primary text-right"><i class="fas fa-plus"></i></button></td>
            <td>Rp 25.000</td>
            <td>Rp 25.000</td>
            </tr>
        </table>
        </div>
        <div class="col-lg-4 text-right" style="float: right">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                Submit
            </button>
        </div>
    </div>
        <br>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-hero">
    <div class="card-header card-bg-image" data-background="{{('stisla-master/assets/img/food/nasgor.jpg')}}">
        <h4>Menu</h4>
        <div class="card-description">pilihan menu makanan</div>
    </div>
    <div class="card-body p-0">
        <div class="tickets-list">
        <a href="#" class="ticket-item">
            <div class="ticket-title">
            <h4>Nasi Goreng</h4>
            </div>
            <div class="ticket-info">
            <div>Warung Buk Diah</div>
            <div class="bullet"></div>
            <div class="text-primary">Jl. Darmo No. 23</div>
            </div>
        </a>
        <a href="#" class="ticket-item">
            <div class="ticket-title">
            <h4>Jus</h4>
            </div>
            <div class="ticket-info">
            <div>Warung Buk Diah</div>
            <div class="bullet"></div>
            <div class="text-primary">Jl. Darmo No. 23</div>
            </div>
        </a>
        <a href="#" class="ticket-item">
            <div class="ticket-title">
            <h4>Seblak</h4>
            </div>
            <div class="ticket-info">
            <div>Warung Buk Diah</div>
            <div class="bullet"></div>
            <div class="text-primary">Jl. Darmo No. 23</div>
            </div>
        </a>
        <a href="features-tickets.html" class="ticket-item ticket-more">
            View All <i class="fas fa-chevron-right"></i>
        </a>
        </div>
    </div>
    </div>
</div>
</div>

@endsection