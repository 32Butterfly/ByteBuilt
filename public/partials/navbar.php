<!-- navbar.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="index/styles.css">
  </head>
  
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
      <a href="index.php" class="navbar-item has-text-primary-65 special-text">ByteBuilt</a>
      <a href ="listings.php" class="navbar-item">Listings</a>
      <a class="navbar-item">Admin panel</a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href = "register.php" class="button is-primary"><strong>Sign up</strong></a>
          <a href = "login.php" class="button is-light">Log in</a>
        </div>
      </div>
    </div>
  </div>
</nav>
