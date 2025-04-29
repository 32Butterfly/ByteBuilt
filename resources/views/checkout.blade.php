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

    <div class="section pt-4 pb-0">
      <div class="container is-flex is-justify-content-flex-end">
        <div style="max-width: 400px;">
          
          <!-- Error message -->
          @if ($errors->any())
            <article class="message is-danger" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;" id="errorMessage">
              <div class="message-header">
                <p>Error</p>
                <button class="delete" aria-label="delete"></button>
              </div>
              <div class="message-body">
                {{ $errors->first() }}
              </div>
            </article>
          @endif

          <!-- Session error message -->
          @if (session('error'))
            <article class="message is-danger" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;" id="errorMessage">
              <div class="message-header">
                <p>Error</p>
                <button class="delete" aria-label="delete"></button>
              </div>
              <div class="message-body">
                {{ session('error') }}
              </div>
            </article>
          @endif

          <!-- Session success message -->
          @if (session('success'))
            <article class="message is-success" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;" id="successMessage">
              <div class="message-header">
                <p>Success</p>
                <button class="delete" aria-label="delete"></button>
              </div>
              <div class="message-body">
                {{ session('success') }}
              </div>
            </article>
          @endif

        </div>
      </div>
    </div>

    <script src="{{ asset('js/closeMessage.js') }}"></script>

    <!-- Centered Login Form -->
    <div class="login-container">
      <div class="login-box">
        <h2 class="title has-text-centered has-text-primary">Checkout your purchase</h2>
        <!-- 🌟 Start of form -->
        <form action="{{route ('checkoutPost') }}" method="POST">
        @csrf
       
        <div class="field">
            <label class="label">City</label>
            <p class="control has-icons-left">
                <span class="select is-fullwidth">
                <select name="city" required>
                    <option disabled selected>Select city</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                </span>
                <span class="icon is-small is-left">
                <i class="fas fa-globe"></i>
                </span>
            </p>
        </div>

          <script src="{{ asset('js/incorrectEmail.js') }}"></script>

          <div class="field">
            <label class="label">Address</label>
            <p class="control has-icons-left">
                <input name="address" class="input" type="text" placeholder="Address" required>
                <span class="icon is-small is-left">
                <i class="fas fa-map-marker-alt"></i>
                </span>
            </p>
            </div>

            <div class="field">
                <label class="label">Telephone Number</label>
                <p class="control has-icons-left">
                    <input name="phone" class="input" type="tel" placeholder="Telephone Number" required>
                    <span class="icon is-small is-left">
                    <i class="fas fa-phone"></i>
                    </span>
                </p>
            </div>


          <div class="field">
            <p class="control">
              <button type="submit" class="button is-success is-fullwidth">
                Checkout
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