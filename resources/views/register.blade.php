<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarText.css') }}">
  </head>

  <body>

    @include('partials.navbar')
    @include('partials.message-notifications')

    <div class="register-container">
      <div class="register-box">
        <h2 class="title has-text-centered has-text-primary">Register to ByteBuilt</h2>

        <form action="{{ route('register.post') }}" method="POST">
          @csrf

          <div class="field">
            <label class="label">Name</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="text" name="name" placeholder="Name" required>
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input id="emailInput" class="input" type="email" name="email" placeholder="E-mail" required>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span id="emailIcon" class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
              </span>
            </div>
            <p id="emailHelp" class="help is-danger">This email is invalid</p>
          </div>

          <script src="{{ asset('js/incorrectEmail.js') }}"></script>

          <div class="field">
            <label class="label">Password</label>
            <p class="control has-icons-left">
              <input class="input" type="password" name="password" placeholder="Password" required>
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>

          <div class="field">
            <label class="label">Confirm Password</label>
            <p class="control has-icons-left">
              <input class="input" type="password" name="password_confirmation" placeholder="Confirm Password" required>
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>

          <div class="field remember-me-box">
            <div class="control">
              <label class="checkbox">
                By clicking “Sign up”, you agree to our <a href="#">terms of service</a> and acknowledge you have read our <a href="#">privacy policy</a>.
              </label>
            </div>
          </div>

          <div class="field">
            <p class="control">
              <button type="submit" class="button is-success is-fullwidth">
                Sign up
              </button>
            </p>
          </div>
        </form>

        <div class="field login-suggestion">
          <div class="has-text-centered">
            <label class="is-size-6 has-text-centered has-text-weight-light">
              Already have an account? <a href="{{ route('login') }}">Login here</a>
            </label>
          </div>
        </div>
      </div>
    </div>
    
    @include('partials.footer')

  </body>
</html>