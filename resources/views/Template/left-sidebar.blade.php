<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <img src="{{asset('stisla-master/assets/img/logokf.png')}}" width="150px" >
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
          <img src="{{asset('stisla-master/assets/img/logokf2.png')}}" width="30px">
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li><a class="nav-link" href="/beranda"><i class="far fa-square"></i> <span>Beranda</span></a></li>
              <li class="menu-header">Starter</li>
          </li>
          <!-- Left side menu ADMIN -->
          @if (auth()->user()->level == "admin")
          <li class="nav-item">
            <a href="/users" class="nav-link">
            <i class="fas fa-user"></i>
                <span>
                Users
                </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/store-admin" class="nav-link">
            <i class="fas fa-home"></i>
                <span>
                Store
                </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/food-admin" class="nav-link">
            <i class="fas fa-utensils"></i>
                <span>
                Food
               </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/order-admin" class="nav-link">
            <i class="fas fa-columns"></i> 
                <span>
                Order
                </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="/payment" class="nav-link">
            <i class="fas fa-dollar-sign"></i> 
                <span>
                Payment
                </span>
            </a>
          </li>
          @endif
          <!-- Left side menu SELLER -->
          @if (auth()->user()->level == "seller")
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
            <i class="fas fa-home"></i>
                <span>
                Store
                </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/order-seller" class="nav-link">
            <i class="fas fa-columns"></i> 
                <span>
                Order
                </span>
            </a>
          </li>
          @endif
          <!-- Left side menu AGENT -->
          @if (auth()->user()->level == "agent")
          <li class="nav-item">
            <a href="/order-agent" class="nav-link">
            <i class="fas fa-columns"></i> 
                <span>
                Order
                </span>
            </a>
          </li>
          @endif
          <!-- Left side menu CUSTOMER -->
          @if (auth()->user()->level == "customer")
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i> <span>Order</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="/order-food">Order Food</a></li>
              <li><a class="nav-link" href="/order-cust">Order Process</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/payment_customer" class="nav-link">
            <i class="fas fa-dollar-sign"></i> 
                <span>
                Payment
                </span>
            </a>
          </li>
          @endif
            
          </li>
            

        </aside>
        <!-- /.sidebar-menu -->
      </div>