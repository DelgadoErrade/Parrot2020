    <!-- Navbar -->
  	<nav class="main-header navbar navbar-expand navbar-dark ">
    	<!-- Left navbar links -->
	    <ul class="navbar-nav  ">
	      <li class="nav-item">
	        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

	    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        {{-- @yield('boton_login') --}}
        @if (Auth::check())
            <li style="nav-item justify-content-right">
                <a class="nav-link"  href="{{route('logout')}}">Logout</a>
            </li>
        @else
            <li style="nav-item justify-content-right">
                <a class="nav-link"  href="{{route('login')}}">Login</a>
            </li>
        @endif
    </ul>
  </nav>
  <!-- /.navbar -->
