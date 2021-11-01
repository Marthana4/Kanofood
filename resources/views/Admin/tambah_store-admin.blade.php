@extends('Home')

@section('content')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="card card-statistic-2">
            <div class="card-stats">
              <div class="col-14 col-sm-12 offset-sm-1 col-md-10 offset-md-2 col-lg-10 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="card-header"><h3>Tambah Toko</h3></div>
                <div class="card-body">
                  <form method="POST" action="{{ url('store-admin') }}">
                    @csrf
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="name">Nama Toko</label>
                        <input type="text" class="form-control" name="name_store" autofocus>
                      </div>
                      <div class="form-group col-6">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-6">
                        <label for="jam_buka">Jam Buka</label>
                        <input type="time" class="form-control" name="jam_buka">
                      </div>
                      <div class="form-group col-6">
                        <label for="jam_tutup">Jam Tutup</label>
                        <input type="time" class="form-control" name="jam_tutup">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group  col-6">
                        <label>Status Toko</label>
                        <select class="form-control selectric" name="is_active" >
                          <option value="">--pilih status--</option>
                          <option value="Open">Open</option>
                          <option value="Close">Close</option>
                        </select>
                      </div>
                      <div class="form-group  col-6">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" required=""></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group mb-5 col-12">
                        <label>Pemilik</label>
                        <select class="form-control selectric" name="name">
                          <option value="">--pilih pemilik--</option>
                          @foreach($users as $user)
                          <option value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Tambah
                      </button>
                    </div>
                  </form>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection