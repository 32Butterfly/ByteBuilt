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
      <form method="POST" action="{{ route('adminProducts') }}">
      @csrf

      <div class="box">
        <div class="is-flex is-align-items-center is-justify-content-space-between">
            <h1 class="subtitle has-text-weight-medium">Products</h1>
            <div class="is-flex">
            <button type="button" class="button is-success mr-2" id="openModalBtn">
              <span class="icon"><i class="fas fa-box"></i></span>
              <span>Add New Product</span>
            </button>
                <button type="submit" name="action" value="delete" class="button is-danger">Delete Selected</button>
            </div>
        </div>

        <table class="table is-fullwidth is-striped">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all-products"></th>
                    <th>ID</th>
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
                        <td class="product-name">{{ $product->id }}</td>
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

<div class="modal" id="addProductModal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Add New Product</p>
      <button class="delete is-large" aria-label="close" id="closeModalBtn"></button>
    </header>
    <section class="modal-card-body">
      <form method="POST" action="{{ route('adminAddProduct') }}" enctype="multipart/form-data">
        @csrf

        <div class="field">
          <label class="label">Product Name</label>
          <div class="control">
            <input class="input" type="text" name="name" placeholder="Product Name" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Specifications</label>
          <div class="control">
            <textarea class="textarea" name="specs" placeholder="Product Specifications" required></textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">Price</label>
          <div class="control">
            <input class="input" type="number" step="1" name="price" placeholder="Price" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Currency</label>
          <div class="control">
            <div class="select">
              <select name="currency" required>
                <option value="$">$</option>
                <option value="€">€</option>
                <option value="£">£</option>
              </select>
            </div>
          </div>
        </div>

        <div class="field">
          <label class="label">Product Image</label>
          <div class="control">
            <input class="input" type="file" name="image">
          </div>
        </div>

        <div class="control">
          <button type="submit" class="button is-primary is-fullwidth">Add Product</button>
        </div>
      </form>
    </section>
  </div>
</div>

<script src = "{{ asset('js/adminProductModal.js') }}"></script>
<script src="{{ asset('js/checkboxProducts.js') }}"></script>

 @include('partials.footer')
</body>