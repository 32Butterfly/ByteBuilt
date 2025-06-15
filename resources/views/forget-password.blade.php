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

      @include('partials.navbar')
      @include('partials.message-notifications')

      <div class="login-container">
        <div class="login-box">
          <h2 class="title has-text-centered has-text-primary">Reset Password</h2>
          <form action="{{ route('forgetPassword.post') }}" method="POST">
            @csrf

            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-left has-icons-right">
                <input id="emailInput" name="email" class="input" type="email" placeholder="E-mail" required>
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span id="emailIcon" class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p id="emailHelp" class="help is-danger">This email is invalid</p>
            </div>

            <div class="field remember-me-box">
              <div class="control">
                <label class="checkbox">
                Enter the e‑mail address you signed up with and we’ll send you a secure link to create a new password.
                </label>
              </div>
            </div>

            <script src="{{ asset('js/incorrectEmail.js') }}"></script>

            <div class="field">
              <p class="control">
                <button type="submit" class="button is-success is-fullwidth">
                  Send Reset Link
                </button>
              </p>
            </div>
          </form>
        </div>
      </div>
      
      @include('partials.footer')

    </body>
  </html>