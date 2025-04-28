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

    <section class="section">
      <div class="container">

        <!-- 🔍 Search Bar -->
        <div class="field has-addons search-bar">
          <div class="control is-expanded">
            <input class="input" type="text" placeholder="Search for PCs or laptops..." id="searchInput"/>
          </div>
          <div class="control">
            <button class="button is-primary" id="searchBtn">
              <span class="icon"><i class="fas fa-search"></i></span>
            </button>
          </div>
        </div>

        <!-- 🖼️ Card Grid -->
        <div class="columns is-multiline">
          @foreach ($products as $product)
          <!-- 🧊 Listing Card -->
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

        <!-- 🔍 Preview Modal -->
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
              <button class="button is-success mr-3">
                <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                <span>Add to Cart</span>
              </button>
              <button class="button is-primary">
                <span class="icon"><i class="fas fa-credit-card"></i></span>
                <span>Buy Now</span>
              </button>
            </footer>
          </div>
        </div>

        <nav class="pagination is-centered" role="navigation" aria-label="pagination">
          <ul class="pagination-list">
              {{ $products->links() }}
          </ul>
        </nav>

      </div>
    </section>

    <!-- Include the preview script -->
    <script src="{{ asset('js/preview.js') }}"></script>

    <!-- Include the escapePreview script (for closing modal) -->
    <script src="{{ asset('js/escapePreview.js') }}"></script>

    @include('partials.footer')

  </body>
</html>