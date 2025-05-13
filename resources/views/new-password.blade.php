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

    @include('partials.message-notifications')

    <!-- Centered Login Form -->
    <div class="login-container">
      <div class="login-box">
        <h2 class="title has-text-centered has-text-primary">Reset Password</h2>
        <!-- 🌟 Start of form -->
        <form action="{{ route('resetPassword.post') }}" method="POST">
          @csrf
          <input type ="text" name ="token" hidden value="{{ $token }}"> 

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
            <label class="label">Enter new password</label>
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

          <script src="{{ asset('js/incorrectEmail.js') }}"></script>

          <div class="field">
            <p class="control">
              <button type="submit" class="button is-success is-fullwidth">
                Change password
              </button>
            </p>
          </div>
        </form>
        <!-- 🌟 End of form -->
      </div>
    </div>
    
    @include('partials.footer')

  </body>
</html>