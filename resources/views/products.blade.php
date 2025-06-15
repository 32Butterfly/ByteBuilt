<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarText.css') }}">
  </head>
  
  <body>

    @include('partials.navbar')
    @include('partials.message-notifications')

    <section class="section">
      <div class="container">

      <form method="GET" action="{{ route('products') }}" class="field has-addons search-bar">
        <div class="control is-expanded">
          <input class="input" type="text" name="search" placeholder="Search for PCs or laptops..." value="{{ request('search') }}">
        </div>
        <div class="control">
          <button class="button is-primary" type="submit">
            <span class="icon"><i class="fas fa-search"></i></span>
          </button>
        </div>
      </form>

        <div class="columns is-multiline">
          @foreach ($products as $product)
          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="{{ asset($product->image) }}"/>
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  {{ $product->name }}
                </div>
              </div>
              <div class="is-flex is-justify-content-space-between">
              <p class="price" style = "margin-left: 20px">{{ $product->price }}{{ $product->currency }} </p>
                <button class="button is-link is-small preview-btn"
                  data-route="{{ route('cartAdd', $product->id) }}"
                  data-id="{{ $product->id }}"
                  data-image="{{ asset($product->image) }}"
                  data-title="{{ $product->name }}"
                  data-specs="{{ json_encode($product->specs) }}"
                  data-price="{{ $product->price }}"
                  data-currency="{{ $product->currency }}">
                  <span class="icon is-small"><i class="fas fa-eye"></i></span>
                  <span>Preview</span>
                </button>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div class="modal" id="previewModal">
          <div class="modal-background"></div>
          <div class="modal-card">
            <header class="modal-card-head">
              <p class="modal-card-title" id="previewTitle">Listing Preview</p>
              <button class="delete is-large" aria-label="close" id="closeModal"></button>
            </header>
            <section class="modal-card-body">
              <img id="previewImage" style="width: 100%; height: auto;" />
              <table class="table is-fullwidth is-striped mt-4" id="previewSpecs">
                <tbody>
                </tbody>
              </table>
            </section>
            <footer class="modal-card-foot is-justify-content-flex-end">
              <div class="is-flex is-align-items-center mr-auto price has-text-primary">
                <p class="mr-4" id="previewPrice"></p>
              </div>
              <a id="addToCartBtn" href="#" class="button is-primary mr-2">
                <span class="icon"><i class="fas fa-credit-card"></i></span>
                <span>Add to Cart</span>
              </a>
            </footer>
          </div>
        </div>

        <nav class="pagination is-centered" role="navigation" aria-label="pagination">
          <ul class="pagination-list">
            {{ $products->appends(request()->query())->links() }}
          </ul>
        </nav>

      </div>
    </section>

    <script src="{{ asset('js/preview.js') }}"></script>
    <script src="{{ asset('js/escapePreview.js') }}"></script>

    @include('partials.footer')

  </body>
</html>