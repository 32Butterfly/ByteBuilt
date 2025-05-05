<!-- navbar.php -->
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="{{ route('home') }}" class="navbar-item has-text-primary-65 special-text">ByteBuilt</a>
      <a href ="{{ route('products') }}" class="navbar-item">Products</a>
      <a href ="{{ route('showCart') }}" class="navbar-item">Cart</a>
      {{-- show only for superusers --}}
      @auth
          @if(auth()->user()->isSuper())
              <a href="{{ route('adminDashboard') }}" class="navbar-item">Admin panel</a>
          @endif
      @endauth
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        @auth
          @if(auth()->user()->profile_picture)
            <!--- not working yet will maybe do in the future  <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Profile Picture" class="profile-pic"> -->
          @else
            <img src="{{ asset('images/default_avatar.png') }}" alt="Default Avatar" class="is-rounded" style="width: 36px; height: 36px; object-fit: cover;">
          @endif

          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
                <i class="fas fa-bars"></i>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
            </div>
            <div class="dropdown-menu is-right" id="dropdown-menu3" role="menu">
              <div class="dropdown-content">
                <a href="{{ route('profile') }}" class="dropdown-item"> Profile </a>
                <a href="{{ route('orderHistory') }}" class="dropdown-item"> Orders </a>
                <a href="{{ route('logout') }}" class="dropdown-item"> Log out </a>
              </div>
            </div>
          </div>

          <!-- Display the user's name if logged in -->
          <span class="navbar-item has-text-weight-medium">Welcome, {{ auth()->user()->name }}</span>
        @else
          <!-- Show the Sign Up and Log In buttons if not logged in -->
          <div class="buttons">
            <a href="{{ route('login') }}" class="button is-light">Log in</a>
            <a href="{{ route('register') }}" class="button is-primary"><strong>Sign up</strong></a>
          </div>
        @endauth
      </div>
    </div>
  </div>
</nav>