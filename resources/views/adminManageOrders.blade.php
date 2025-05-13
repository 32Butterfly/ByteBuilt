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
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <div class="container">
            <h1 class="title has-text-black has-text-centered">
              Admin Dashboard
            </h1>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="box">
            <div class="is-flex is-align-items-center is-justify-content-space-between">
            <h1 class="subtitle has-text-weight-medium">Users</h1>
            <div class="is-flex">
                <button type="submit" name="action" value="toggleRole" class="button is-success mr-2">Insert Order</button>
                <button type="submit" name="action" value="delete" class="button is-danger">Delete Order</button>
            </div>
            </div>

            <table class="table is-fullwidth">
            <thead>
                <tr>
                <th><input type="checkbox" id="select-all"></th>
                <th>User_ID:</th>
                <th>Product_ID:</th>
                <th>Quantity:</th>
                <th>Total price:</th>
                <th>City</th>
                <th>Payment_ID:</th>
                <th>Status:</th>
                </tr>
            </thead>
            </table>
        </div>   
      </section>

    </div>
</div>

<script src="{{ asset('js/checkboxProducts.js') }}"></script>

 @include('partials.footer')
</body>