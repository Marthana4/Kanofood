@extends('Home')

@section('content')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="card card-statistic-2">
            <div class="card-stats">
              <div class="col-14 col-sm-12 offset-sm-1 col-md-10 offset-md-2 col-lg-10 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="card ">
                  <div class="card-header"><h3>Edit User</h3></div><div class="card-body">
                    <form method="POST" action="{{ url('users/'.$model->id) }}">
                      @csrf
                      <input type="hidden" name="_method" value="PATCH">
                        <div class="row">
                          <div class="form-group col-6">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" autofocus value="{{ $model->name }}">
                          </div>
                          <div class="form-group col-6">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" class="form-control" name="no_hp" value="{{ $model->no_hp }}">
                          </div>
                        </div>

                      <div class="row">
                        <div class="form-group col-6">
                          <label>Gender</label>
                          <select class="form-control selectric" name="gender" >
                            <option value="{{ $model->gender }}">{{ $model->gender }}</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                          </select>
                        </div>
                  <div class="form-group col-6">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control datepicker" name="tanggal_lahir" value="{{ $model->tanggal_lahir }}">
                  </div>
                  </div>
                    <div class="row">
                      <div class="form-group col-12">
                        <label>Level</label>
                        <select class="form-control selectric" name="level" >
                          <option value="{{ $model->level }}">{{ $model->level }}</option>
                          <option value="customer">Customer</option>
                          <option value="seller">Seller</option>
                          <option value="agent">Agent</option>
                        </select>
                      </div>
                    </div>

                  <div class="form-divider">
                    Username & Password
                  </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $model->email }}">
                      <div class="invalid-feedback">
                      </div>
                      </div>
                      <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ $model->password }}">
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