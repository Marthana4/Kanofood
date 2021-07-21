<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="AdminLTe/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            @if (auth()->user()->level == "customer")
            <li class="nav-item">
            <a href="/beranda" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
                <p>
                Beranda
                </p>
            </a>
            </li>     
            @endif
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            @if (auth()->user()->level == "customer")
              <li class="nav-item">
                <a href="/customer" class="nav-link inactive">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Customer</p>
                </a>
              </li>
            @endif
            @if (auth()->user()->level == "agent")
              <li class="nav-item">
                <a href="/agent" class="nav-link inactive">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Agent</p>
                </a>
              </li>
            @endif
            @if (auth()->user()->level == "seller")
              <li class="nav-item">
                <a href="/seller" class="nav-link inactive">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Seller</p>
                </a>
              </li>
            @endif
            @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="/admin" class="nav-link inactive">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Admin</p>
                </a>
              </li>
            @endif
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>