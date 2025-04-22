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
      <a class="navbar-item">Admin panel</a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href = "{{ route('register') }}"  class="button is-primary"><strong>Sign up</strong></a>
          <a href = "{{ route('login') }}" class="button is-light">Log in</a>
        </div>
      </div>
    </div>
  </div>
</nav>