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
          <form method="POST" action="{{ route('adminOrders') }}">
            @csrf

            <div class="box">
              <div class="is-flex is-align-items-center is-justify-content-space-between">
                <h1 class="subtitle has-text-weight-medium">Orders</h1>
                <div class="is-flex">
                  <button type="submit" name="action" value="delete" class="button is-danger mr-2">Delete Selected</button>
                </div>
              </div>

              <table class="table is-fullwidth is-striped">
                <thead>
                  <tr>
                    <th><input type="checkbox" id="select-all-orders"></th>
                    <th>ID:</th>
                    <th>User_ID:</th>
                    <th>Product_Name:</th>
                    <th>Quantity:</th>
                    <th>Total_price:</th>
                    <th>Bought_time:</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                    <tr>
                      <td><input type="checkbox" name="order_ids[]" value="{{ $order->id }}"></td>
                      <td class="order-id">{{ $order->id }}</td>
                      <td class="order-user-id">{{ $order->user_id }}</td>
                      <td class="order-product-id">
                        @foreach (\App\Models\Product::whereIn('id', json_decode($order->product_id, true))->pluck('name') as $name)
                          {{ $name }}<br>
                        @endforeach
                      </td>
                      <td class="order-quantity">{{ $order->quantity }}</td>
                      <td class="order-total-price">{{ $order->total_price }}</td>
                      <td class="order-bought-time">{{ $order->created_at }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </form>
        </section>

        <script src="{{ asset('js/checkboxOrders.js') }}"></script>
      </div>
    </div>

    @include('partials.footer')
  </body>
</html>