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
      <form method="POST" action="{{ route('adminProducts') }}">
      @csrf

      <div class="box">
        <div class="is-flex is-align-items-center is-justify-content-space-between">
            <h1 class="subtitle has-text-weight-medium">Products</h1>
            <div class="is-flex">
                <button type="submit" name="action" value="addProduct" class="button is-success mr-2">Add new product</button>
                <button type="submit" name="action" value="delete" class="button is-danger">Delete Selected</button>
            </div>
        </div>

        <table class="table is-fullwidth is-striped">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all-products"></th>
                    <th>Name</th>
                    <th>Specs</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td><input type="checkbox" name="product_ids[]" value="{{ $product->id }}"></td>
                        <td class="product-name">{{ $product->name }}</td>
                        <td>
                            <ul>
                            @foreach ($product->specs as $key => $value)
                                <li><strong>{{ $key }}:</strong> {{ $value }}</li>
                            @endforeach
                            </ul>
                        </td>
                        <td>{{ $product->price }} {{ $product->currency }}</td>
                        <td>
                            @if($product->image)
                                <figure class="image is-64x64">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                </figure>
                            @else
                                <span>No Image</span>
                            @endif
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
        {{ $products->links() }}
    </ul>
  </nav>

</div>
</div>

<script src="{{ asset('js/checkboxProducts.js') }}"></script>

 @include('partials.footer')
</body>