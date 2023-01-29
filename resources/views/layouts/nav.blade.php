<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>UpConstruction<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/') }}" class="@if (url()->current() == url('/')) active @endif">Home</a></li>
          <li><a href="{{ url('/about') }}" class="@if (url()->current() == url('/about')) active @endif">About</a></li>
          <li><a href="{{ url('/missions') }}" class="@if (url()->current() == url('/missions')) active @endif">Missions</a></li>
          <li><a href="{{ url('/services') }}" class="@if (url()->current() == url('/services')) active @endif">Services</a></li>  
          <li><a href="{{ url('/contact') }}" class="@if (url()->current() == url('/contact')) active @endif">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->