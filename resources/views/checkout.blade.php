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
        <h2 class="title has-text-centered has-text-primary">Checkout your purchase</h2>
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
      </div>
    </div>
    
    @include('partials.footer')

  </body>
</html>