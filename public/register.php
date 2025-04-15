<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="register/styles.css">
  </head>

  <body>

    <!-- Include the navbar -->
    <?php require('partials/navbar.php'); ?>

    <!-- Centered Login Form -->
    <div class="login-container">
      <div class="login-box">
        <h2 class="title has-text-centered has-text-primary">Register to ByteBuilt</h2>

        <div class="field">
            <label class="label">Name</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Name">
                <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
            </div>
        </div>

        <div class="field">
        <label class="label">Email</label>
          <label class="label"></label>
            <div class="control has-icons-left has-icons-right">
              <input id="emailInput" class="input" type="email" placeholder="E-mail">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span id="emailIcon" class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
              </span>
            </div>
          <p id="emailHelp" class="help is-danger">This email is invalid</p>
      </div>

        <script src="incorrectEmail.js"></script>

        <div class="field">
        <label class="label">Password</label>
          <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password">
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
        </div>

        <div class="field">
        <label class="label">Confirm Password</label>
          <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Confirm Password">
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
        </div>

        <div class="field remember-me-box">
          <div class="control">
            <label class="checkbox">
              By clicking “Sign up”, you agree to our <a href="#">terms of service</a> and acknowledge you have read our <a href="#">privacy policy.</a>
            </label>
          </div>
        </div>

        <div class="field">
          <p class="control">
            <button class="button is-success is-fullwidth">
              Sign up
            </button>
          </p>
        </div>

        <div class="field login-suggestion">
          <div class="has-text-centered">
            <label class="is-size-6 has-text-centered has-text-weight-light">
               Already have an account? <a href="login.php">Login here</a>
            </label>
          </div>
        </div>
      </div>
    </div>
    
    <?php require('partials/footer.php'); ?>

  </body>
</html>
