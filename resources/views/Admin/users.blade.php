@extends('Home')

@section('content')
  <section class="section">
    <div class="section-body">
      <h2 class="section-title">Users</h2>
      <p class="section-lead">
        You can manage all Users, such as editing, deleting and more.
      </p>
      <div class="row">
        <div class="col-md-12"> 
          <div class="card">
            <div class="card-header">
              <form method="GET" action="{{ url('users') }}"></form>
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
                    <a href="/tambah_user" class="btn btn-success">Tambah User</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped">
                  <tr>
                    <th><center> No </center> </th>
                    <th><center> Nama </center></th>
                    <th><center> No Handphone </center></th>
                    <th><center> Gender </center></th>
                    <th><center> Tanggal Lahir </center></th>
                    <th><center> Level </center></th>
                    <th><center> Email </center></th>
                    <th colspan="2"><center>Aksi</center></th> 
                  </tr>
                 @foreach($users as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td class="font-weight-600">{{$value->name}}</td>
                    <td>{{$value->no_hp}}</td>
                    <td>{{$value->gender}}</td>
                    <td>{{$value->tanggal_lahir}}</td>
                    <td>{{$value->level}}</td>
                    <td>{{$value->email}}</td>
                    <td>
                        <a href="{{ url('users/'.$value->id.'/edit') }}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{ url('users/'.$value->id) }}" method="post">
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
                    {{$users->links()}}
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection