@extends('Home')

@section('content')
<br>
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Daftar Menu</h4>
                  <div class="card-header-action">
                    <a href="/tambah_menu" class="btn btn-success">Tambah Menu <i class="fas fa-plus"></i> </a>
                  </div>
                  <p>
                  <div class="card-header-action">
                    <a href="/edit-store-seller" class="btn btn-warning">Edit Toko <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>Nama Makanan</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                      </tr>
                      <tr>
                      @foreach($menu as $key=>$value)
                        <td>{{$key+1}}</td>
                        <td>{{ $value->name_food }}</td>
                        <td><img src  ="{{asset('images/'.$value->image )}}" width="200" height="150"></td>
                        <td> Rp.{{ $value->price }}</td>
                        <td>{{ $value->deskripsif }}</td>
                        <td>
                        <a href="{{ url('food-seller/'.$value->id_menu.'/edit') }}" class="btn btn-primary">Edit</a></td>
                        
                      </tr>
                     @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection