@extends('Home')

@section('content')
  <section class="section">
    <div class="section-body">
      <h2 class="section-title">Menu</h2>
        <p class="section-lead">
            You can manage all Menu, such as editing, deleting and more.
        </p>
        <div class="row">
          <div class="col-md-12"> 
            <div class="card">
              <div class="card-header">
                  <form method="GET" action="{{ url('food-admin') }}"></form>
                  <form class="form-inline">
                    <div class="search-element">
                      <input class="form-control" type="text" name="keyword" value="{{$keyword}}" placeholder="Search" >
                      <button class="btn btn btn-icon btn-light" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                  </form>
            <h4></h4>
          <div class="card-header-action ">
            <div class="d-flex flex-row-reverse">
              <div class="mx-2">
                <a href="/tambah_menu-admin" class="btn btn-success">Tambah Menu <i class="fas fa-plus"></i> </a>
              </div>
            </div>
          </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th><center>No</center></th>
                  <th><center>Nama Makanan</center></th>
                  <th><center>Gambar</center></th>
                  <th><center>Harga</center></th>
                  <th><center>Deskripsi</center></th>
                  <th><center>Toko</center></th>
                  <th colspan="2"><center>Aksi</center></th>
                </tr>
              <tr>
                @foreach($menu as $key=>$value)
                  <td>{{$key+1}}</td>
                  <td>{{ $value->name_food }}</td>
                  <td><img src  ="{{asset('images/'.$value->image )}}" width="200" height="150"></td>
                  <td> Rp.{{ $value->price }}</td>
                  <td>{{ $value->deskripsif }}</td>
                  <td>{{ $value->name_store }}</td>
                  <td>
                  <a href="{{ url('food-admin/'.$value->id_menu.'/edit') }}" class="btn btn-warning">Edit</a></td>
                  <td>
                  <form action="{{ url('food-admin/'.$value->id_menu) }}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini ?')">Hapus</button>
                  </form></td>
              </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item ">
                  {{$menu->links()}}
              </ul>
            </nav>
          </div>
    </div>
  </div>
</div>
@endsection