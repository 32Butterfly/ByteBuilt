<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarText.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>

  <body>

    <!-- Include the navbar -->
    @include('partials.navbar')

    <!-- Centered Login Form -->
    <div class="login-container">
      <div class="login-box">
        <h2 class="title has-text-centered has-text-primary">Login to ByteBuilt</h2>

        <div class="field">
          <label class="label"></label>
          <label class="label">Email</label>
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

      <script src="{{ asset('js/incorrectEmail.js') }}"></script>>

        <div class="field">
        <label class="label">Password</label>
          <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password">
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
        </div>

        <div class="field remember-me-box">
          <div class="control">
            <label class="checkbox">
              <input type="checkbox">
              Remember me
            </label>
          </div>
        </div>

        <div class="field">
          <p class="control">
            <button class="button is-success is-fullwidth">
              Login
            </button>
          </p>
        </div>

        <div class="field register-suggestion">
          <div class="has-text-centered">
            <label class="is-size-6 has-text-centered has-text-weight-light">
               Don't have an account? <a href="register.php">Register here</a>
            </label>
          </div>
        </div>
      </div>
    </div>
    
    @include('partials.footer')

  </body>
</html>