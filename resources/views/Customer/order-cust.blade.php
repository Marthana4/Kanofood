@extends('Home')

@section('content')
<section class="section">
<div class="section-body">
    <h2 class="section-title">Order</h2>
    <p class="section-lead">
        You can't manage all order.
    </p>

    <div class="row">
        <div class="col-12">
        <div class="card mb-0">
            <div class="card-body">
            <ul class="nav nav-pills">
                <li class="nav-item">
                <a class="nav-link active" href="#">All <span class="badge badge-white">5</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Process <span class="badge badge-primary">1</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Done <span class="badge badge-primary">1</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Cancel <span class="badge badge-primary">0</span></a>
                </li>
            </ul>
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
                </tr>
                <tr>
                    <td>1</td>
                    <td>Diva</td>
                    <td>Rp 20.000</td>
                    <td>2018-01-20</td>
                    <td><div class="badge badge-info">Process by Seller</div></td>
                </tr>
                </table>
            </div>
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
</section>

@endsection