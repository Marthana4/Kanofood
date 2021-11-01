<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; KanoFood</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('stisla-master/node_modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('stisla-master/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('stisla-master/assets/css/components.css')}}">
</head>

<body>
  <div id="app" >
    <section class="section">
      <div class="container" >
        <div class="row">
          <div class="col-12" >
  
            <div class="card card-primary">
              <br><br>
            <div class="login-brand" >
            <img src="{{asset('stisla-master/assets/img/logokf.png')}}" >
            </div>
              <div class="card-body" >
              <div style="text-align:justify"><img src="{{asset('stisla-master/assets/img/kf.jpg')}}" style="float:left;width:700px;height:550px;">
              <br><br><br>
              <center><h3>Sign In</h3></center>
                <form method="POST" action="{{route('postlogin')}}" class="needs-validation"  novalidate="">
                {{ csrf_field() }}
                <div class="card-body" style="float:right">
                  <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" placeholder="email" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                    </div>
                  <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="password" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login 
                    </button>
                  </div>
                </form>
                <div class="mt-5 text-muted text-center">
                <a href="{{route('register')}}">Register a new membership</a>
                </div>
                </div>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Kanosolution 2021/2022.
            </div>
            </div>
          </div>
              </div>
        </div>
      </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('stisla-master/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{asset('stisla-master/assets/js/scripts.js')}}"></script>
  <script src="{{asset('stisla-master/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
