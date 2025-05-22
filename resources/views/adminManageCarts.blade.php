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
                  <button type="button" class="button is-primary open-modal-btn mr-2" data-target="addCartModal">
                      <span class="icon"><i class="fas fa-shopping-bag"></i></span>
                      <span>Add New Order</span>
                  </button>
                  <button type="submit" name="action" value="delete" class="button is-danger mr-2">Delete Selected</button>
                </div>
              </div>

              <table class="table is-fullwidth is-striped">
                <thead>
                  <tr>
                    <th><input type="checkbox" data-select-all="cart_ids"></th>
                    <th>User_ID:</th>
                    <th>Product_Name:</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>
                          <input type="checkbox" name="user_ids[]" value="{{ $user->id }}" data-checkbox-group="user_ids">
                      </td>
                      <td class="order-id">{{ $user->id }}</td>
                      <td class="order-user-id">
                          @foreach ($user->cart as $cart)
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

        <nav class="pagination is-centered has-text-weight-medium has-text-black" role="navigation" aria-label="pagination" style="margin-bottom: 45px;">
          <ul class="pagination-list">
              {{ $users->links() }}
          </ul>
        </nav>

      </div>
    </div>

    <div class="modal" id="addCartModal">
      <div class="modal-background" data-close></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Add New Cart Entry</p>
          <button class="delete is-large" aria-label="close" id="closeAddCartModalBtn" data-close></button>
        </header>

        <section class="modal-card-body">
          <form method="POST" action="{{ route('adminAddCart') }}">
            @csrf
            <div class="field">
              <label class="label">User ID</label>
              <div class="control">
                <input class="input" type="number" name="user_id" placeholder="Enter User ID" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Product ID</label>
              <div class="control">
                <input class="input" type="number" name="product_id" placeholder="Enter Product ID" required>
              </div>
            </div>

            <div class="control mt-4">
              <button type="submit" class="button is-primary is-fullwidth">Add Cart Entry</button>
            </div>
          </form>
        </section>
      </div>
    </div>

    <script src="{{ asset('js/adminCheckboxSelectAll.js') }}"></script>
    <script src="{{ asset('js/adminModal.js') }}"></script>

    @include('partials.footer')
  </body>
</html>