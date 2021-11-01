@extends('Home')

@section('content')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="card card-statistic-2">
            <div class="card-stats">
              <div class="col-14 col-sm-12 offset-sm-1 col-md-10 offset-md-2 col-lg-10 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="card-header"><h3>Detail Menu </h3></div>
                  <div class="card-body">
                    <form method="POST" action="{{ url('food-admin/'.$model->id_menu) }}"  enctype="multipart/form-data">
                      @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="row">
                          <div class="form-group col-6">
                            <label for="name_food">Nama Menu</label>
                            <input type="text" class="form-control" name="name_food" value="{{ $model->name_food }}" autofocus>
                          </div>
                          <div class="form-group col-6">
                            <label for="price">Harga</label>
                            <input type="text" class="form-control" name="price" value="{{ $model->price }}">
                          </div>
                        </div>
              
                        <div class="row">
                          <div class="form-group col-6">
                            <label for="image">Gambar</label>
                              <input type="file" class="form-control" name="image" value="{{ $model->image }}"
                              onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                              <img id="blah" alt="" width="200" height="150" />
                        </div>
                        <!-- Untuk menampilkan gambar yang sudah di upload sebelumnya -->
                          <div class="form-group col-6">
                            <img id="" alt="" width="350" height="250" src="/images/{{$model->image }}"/>
                            <br>
                            <span style="color: red;font-size: 13px;">**Gambar yang sudah di upload</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group mb-5 col-12">
                            <label for="deskripsif">Deskripsi Menu</label>
                            <input type="text" class="form-control" name="deskripsif" value="{{ $model->deskripsif }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group mb-5 col-12">
                            <label for="name_store">Nama Toko</label>
                              <select class="form-control selectric" name="name_store">
                              @foreach($stores as $store)
                                  @if($model->id_store == $store->id_store) 
                                  <option value="{{$store->id_store}}" selected>{{$store->name_store}}</option>
                                  @else
                                  <option value="{{$store->id_store}}">{{$store->name_store}}</option>
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