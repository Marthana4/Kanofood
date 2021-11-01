@extends('Home')

@section('content')
  <section class="section">
    <div class="section-body">
      <h2 class="section-title">Store</h2>
      <p class="section-lead">
        You can manage all store, such as editing, deleting and more.
      </p>
        <div class="row">
        <div class="col-md-12"> 
            <div class="card">
            <div class="card-header">
                <form class="form-inline" action="{{ url('store-admin') }}">
                <div class="search-element">
                    <input class="form-control" name="keyword" value="{{$keyword}}" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn btn btn-icon btn-light" type="submit"><i class="fas fa-search"></i></button>
                </div>
                </form>
                <h4></h4>
            <div class="card-header-action ">
                <div class="d-flex flex-row-reverse">
                <div class="mx-2">
                    <a href="/tambah_store-admin" class="btn btn-success">Tambah Toko</a>
                </div>
                </div>
            </div>
            </div>
            <div class="card-body p-0">
            <div class="table-responsive table-invoice">
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama Toko</th>
                        <th>Jam Buka</th>
                        <th>Jam Tutup</th>
                        <th>Status Toko</th>
                        <th>Alamat</th>
                        <th>Deskripsi</th>
                        <th>Pemilik</th>
                        <th colspan="2"><center>Aksi</center></th>
                    </tr>
                    @foreach($store as $key=>$value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td class="font-weight-600">{{$value->name_store}}</td>
                        <td>{{$value->jam_buka}}</td>
                        <td>{{$value->jam_tutup}}</td>
                        @if($value->is_active =='Open')
                        <td><div class="badge badge-success">{{$value->is_active}}</div></td>
                        @else
                        <td><div class="badge badge-danger">{{$value->is_active}}</div></td>
                        @endif
                        <td>{{$value->alamat}}</td>
                        <td>{{$value->deskripsi}}</td>
                        <td>{{$value->name}}</td>
                        <td>
                            <a href="{{ url('store-admin/'.$value->id_store.'/edit') }}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form action="{{ url('store-admin/'.$value->id_store) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Anda yakin menghapus data ini ?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>  
            </div>
            <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                <li class="page-item">
                    {{$store->links()}}
                </li>
                </ul>
            </nav>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection