@extends('Home')

@section('content')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
        <div class="card card-statistic-2">
        <div class="card-stats">
          <div class="col-14 col-sm-12 offset-sm-1 col-md-10 offset-md-2 col-lg-10 offset-lg-2 col-xl-10 offset-xl-1">
              <div class="card-header"><h3>Tambah Menu </h3></div>

              <div class="card-body">
                <form method="POST" action="{{url('food-admin')}}">
                  @csrf
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name_food">Nama Menu</label>
                      <input type="text" class="form-control" name="name_food">
                    </div>
                    <div class="form-group col-6">
                      <label for="price">Harga</label>
                      <input type="text" class="form-control" name="price">
                    </div>
                  </div>

                  <div class="row">
                  <div class="form-group col-12">
                      <label for="image">Upload Gambar</label>
                      <input type="file" class="form-control" name="image">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mb-5 col-12">
                      <label for="deskripsi">Deskripsi Menu</label>
                      <textarea class="form-control" name="deskripsi" required=""></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="id_store">Nama Toko</label>
                      <input type="text" class="form-control" name="id_store">
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
    </section>
  </div>

@endsection