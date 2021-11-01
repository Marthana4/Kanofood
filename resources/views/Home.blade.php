<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>KanoFood</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  @include('Template.head')  
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      
      <!-- Navbar -->
  @include('Template.navbar') 
  <!-- /.navbar -->

  <!-- Sidebar Menu -->
  @include('Template.left-sidebar')
 <!-- /.sidebar -->

        <!-- Main Content -->
      <div class="main-content">
        <section class="content">
        @yield('content') 
        </section>
      </div>

    </div>
 
  
             <!-- Main Footer -->
             @include('Template.footer')

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('stisla-master/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{asset('stisla-master/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('stisla-master/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('stisla-master/node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>
  <script src="{{asset('stisla-master/node_modules/summernote/dist/summernote-bs4.js')}}"></script>
  <script src="{{asset('stisla-master/node_modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  <script src="{{asset('stisla-master/node_modules/sweetalert/dist/sweetalert.min.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{asset('stisla-master/assets/js/scripts.js')}}"></script>
  <script src="{{asset('stisla-master/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('stisla-master/assets/js/page/index.js')}}"></script>
  <script src="{{asset('stisla-master/assets/js/page/modules-sweetalert.js')}}"></script>

  <!-- Sweet alert -->
  @include('sweetalert::alert')
</body>
</html>
