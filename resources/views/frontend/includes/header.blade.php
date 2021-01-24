 <header id="main-header">
        <div class="header-inner-container">
         <nav class="navbar navbar-expand-xl">
            <!-- Brand -->
            <div class="loggo" style="background-color:#e69d2b;">
            <a class="navbar-brand" href="#" style="color:#e69d2b;"><img style="color:#e69d2b;" src="{{ asset('/images/logo.png') }}"></a>
          </div>
            <!-- Toggler/collapsibe Button -->
            <button style="color:#e69d2b;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color:#e69d2b;">SHOP ARRANGEMENTS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color:#e69d2b;">FEATURED SHOWS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('about_us')}}" style="color:#e69d2b;">ABOUT US</a>
                </li>
              @guest
                <li class="nav-item login">
                  <a class="nav-link" href="{{url('login')}}" style="color:#e69d2b;">LOGIN</a>
                </li> 
             @endguest
             @guest
                 @if (Route::has('register'))<li class="nav-item create-account">
                  <a class="nav-link" href="{{ url('register_user') }}">CREATE AN ACCOUNT</a>
                </li> @endif
                @endguest

                @auth
                <li class="nav-item login">
                  <a class="nav-link" href="{{url('logout')}}" style="color:#e69d2b;">Logout</a>
                </li> 
              @endauth
                <li class="nav-item cart">
                  <a class="nav-link" href="#"><i class="fas fa-shopping-cart" style="color:#e69d2b;"></i></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>