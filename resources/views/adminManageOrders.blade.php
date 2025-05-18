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
                   <button type="button" class="button is-primary open-modal-btn mr-2" data-target="addOrderModal">
                      <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                      <span>Add New Order</span>
                  </button>
                  <button type="submit" name="action" value="delete" class="button is-danger">Delete Selected</button>
                </div>
              </div>

              <table class="table is-fullwidth is-striped">
                <thead>
                  <tr>
                    <th><input type="checkbox" data-select-all="order_ids"></th>
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
                      <td><input type="checkbox" name="order_ids[]" value="{{ $order->id }}" data-checkbox-group="order_ids"></td>
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

        <nav class="pagination is-centered has-text-weight-medium has-text-black" role="navigation" aria-label="pagination" style="margin-bottom: 45px;">
          <ul class="pagination-list">
              {{ $orders->links() }}
          </ul>
        </nav>

        <script src="{{ asset('js/adminCheckboxSelectAll.js') }}"></script>
      </div>
    </div>

    <div class="modal" id="addOrderModal">
      <div class="modal-background" data-close></div>
      <div class="modal-card" style="max-width: 700px;">
        <header class="modal-card-head">
          <p class="modal-card-title">Add New Order</p>
          <button class="delete is-large" aria-label="close" id="closeAddOrderModalBtn" data-close></button>
        </header>
        <section class="modal-card-body">
          <form method="POST" action="{{ route('adminAddOrder') }}">
          @csrf

            <div class="field">
              <label class="label">User ID</label>
              <div class="control">
                <input class="input" type="number" name="user_id" placeholder="User ID" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Products</label>
              <div class="control">
                <textarea class="textarea" name="product_id" placeholder='e.g. [1,2,3]' required></textarea>
              </div>
            </div>

            <div class="field">
              <label class="label">Quantity</label>
              <div class="control">
                <textarea class="textarea" name="quantity" placeholder='e.g. [2,1,4]' required></textarea>
              </div>
            </div>

            <div class="field">
              <label class="label">Total Price</label>
              <div class="control">
                <input class="input" type="number" step="0.01" name="total_price" placeholder="Total price" required>
              </div>
            </div>

            <div class="field">
              <label class="label">City</label>
              <div class="control">
                <div class="select is-fullwidth">
                  <select name="city" required>
                    <option value="" disabled selected>Select a city</option>
                    @foreach ($cities as $city)
                      <option value="{{ $city->name }}">{{ $city->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Address</label>
              <div class="control">
                <input class="input" type="text" name="address" placeholder="Address" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Phone</label>
              <div class="control">
                <input class="input" type="text" name="phone" placeholder="Phone" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Payment ID</label>
              <div class="control">
                <input class="input" type="text" name="payment_id" placeholder="Payment ID (optional)">
              </div>
            </div>

            <div class="field">
              <label class="label">Status</label>
              <div class="control">
                <input class="input" type="text" name="status" placeholder="Status (optional)">
              </div>
            </div>

            <button type="submit" class="button is-success is-fullwidth mt-4">Add Order</button>
          </form>
        </section>
      </div>
    </div>

    <script src="{{ asset('js/adminModal.js') }}"></script>

    @include('partials.footer')
  </body>
</html>