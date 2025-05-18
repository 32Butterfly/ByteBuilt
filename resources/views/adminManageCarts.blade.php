<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbarText.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>

  <body>
    <div class="columns is-gapless is-last">
      @include('partials.adminSideNavigation')
      <div class="column is-10 admin-panel">
        @include('partials.navbar')
        @include('partials.message-notifications')

        <section class="hero is-small">
          <div class="hero-body">
            <div class="container">
              <h1 class="title has-text-black has-text-centered">
                Admin Dashboard
              </h1>
            </div>
          </div>
        </section>

        <section class="section">
          <form method="POST" action="{{ route('adminCarts') }}">
           @csrf

            <div class="box">
              <div class="is-flex is-align-items-center is-justify-content-space-between">
                <h1 class="subtitle has-text-weight-medium">Carts</h1>
                <div class="is-flex">
                  <button type="submit" name="action" value="delete" class="button is-danger mr-2">Delete Selected</button>
                </div>
              </div>

              <table class="table is-fullwidth is-striped">
                <thead>
                  <tr>
                    <th><input type="checkbox" id="select-all-carts"></th>
                    <th>User_ID:</th>
                    <th>Product_Name:</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($carts as $userId => $userCarts)
                    <tr>
                      <td>
                        <input type="checkbox" name="cart_ids[]" value="{{ $userId }}"></td>
                      <td class="order-id">{{ $userId }}</td>
                      <td class="order-user-id">
                        @foreach ($userCarts as $cart)
                          {{ $cart->product->name }}<br>
                        @endforeach
                      </td> 
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </form>
        </section>

      </div>
    </div>

    @include('partials.footer')
  </body>
</html>