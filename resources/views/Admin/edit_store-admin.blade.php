@extends('Home')

@section('content')
<br><br>
  <div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
              <div class="col-14 col-sm-12 offset-sm-1 col-md-10 offset-md-2 col-lg-10 offset-lg-2 col-xl-10 offset-xl-1">
              
                <div class="card card-primary">
                  <div class="card-header"><h3>Edit Toko </h3></div>

                    <div class="card-body">
                      <form method="POST" action="{{ url('store-admin/'.$model->id_store) }}">
                          @csrf
                          <input type="hidden" name="_method" value="PATCH">
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="name">Nama Toko</label>
                                <input type="text" class="form-control" name="name_store" autofocus value="{{ $model->name_store }}">
                              </div>
                              <div class="form-group col-6">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $model->alamat }}">
                              </div>
                            </div>

                          <div class="row">
                            <div class="form-group col-6">
                              <label for="jam_buka">Jam Buka</label>
                              <input type="time" class="form-control" name="jam_buka" value="{{ $model->jam_buka }}">
                            </div>
                            <div class="form-group col-6">
                              <label for="jam_tutup">Jam Tutup</label>
                              <input type="time" class="form-control" name="jam_tutup" value="{{ $model->jam_tutup }}">
                            </div>
                          </div>

                          <div class="row">
                            <div class="form-group col-6">
                              <label>Status Toko</label>
                                <select class="form-control selectric" name="is_active" >
                                      <option value="{{ $model->is_active }}">{{ $model->is_active }}</option>
                                      <option value="Open">Open</option>
                                      <option value="Close">Close</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Deskripsi</label>
                                  <input type="text" class="form-control" name="deskripsi" value="{{ $model->deskripsi }}">
                            </div>
                          </div>

                          <div class="row">
                            <div class="form-group mb-5 col-12">
                              <label>Pemilik</label>
                                <select class="form-control selectric" name="name">
                                    @foreach($users as $user)
                                    @if($model->id == $user->id) 
                                    <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                    @else
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                  @endforeach
                                </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                              Ubah
                            </button>
                          </div>
                      </form>
                  </div>
                </div>

              
          </div>
        </div>
    </section>
  </div>

@endsection