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

    <!-- Include the navbar -->
    @include('partials.navbar')
    @include('partials.message-notifications')

    <div class = "has-text-centered" style = "margin-top: 30px;">
        <h1 class="title">Shopping Cart</h1>
    </div>

    <div class="columns is-centered">
        <div class="column is-one-third" style ="margin-top: 20px;">
            <div class="box">
            @if ($cartItems->isEmpty())
            <div class="has-text-centered is-flex is-justify-content-center is-align-items-center" style="height: 40vh;">
                <div class="is-flex is-flex-direction-column is-align-items-center">
                    <p class="subtitle is-5 has-text-white">You have not added any items to the cart yet!</p>
                    <a href="{{ route('products') }}" class="button is-big is-primary is-fullwidth mt-4">Go to Products</a>
                </div>
            </div>
            @else
            @foreach ($cartItems as $cart)
            <article class="media">
                <div class="media-left">
                <figure class="image" style="width: 180px; height: 180px;">
                    <img src="{{ $cart->image }}" alt="Image" />
                </figure>
                </div>
                <div class="media-content">
                    <p class="title is-6">{{ $cart->name }}</p>
                    <div class="is-flex is-justify-content-space-between">
                        <p class="subtitle is-6">Price: {{ $cart->price * $cart->quantity }}{{ $cart->currency }}</p>                      
                    </div>
                    <div class="is-flex is-justify-content-space-between quantityMaker">
                        <form action="{{ route('cart.removeOne') }}" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $cart->product_id }}">
                            <button class="button is-small is-danger is-rounded" title="Remove one" >
                                <i class="fas fa-minus"></i>
                            </button>
                        </form>
                        <p class="subtitle is-6" style="margin-bottom: 0;">Quantity: {{ $cart->quantity }}</p>
                        <form action="{{ route('cart.addOne') }}" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $cart->product_id }}">
                            <button class="button is-small is-success is-rounded" title="Add one">
                                    <i class="fas fa-plus"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </article>
            @endforeach
            @endif
            </div>

            <div class = "is-flex is-justify-content-end">
                @if(!$cartItems->isEmpty())
                <a href="{{ route('showCheckout') }}" class="button is-primary">
                    <span class="icon"><i class="fas fa-credit-card"></i></span>
                    <span>Buy Now</span>
                </a>
                @endif
            </div>
        </div>
    </div>

    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        <ul class="pagination-list">
            {{ $cartItems->links() }}
        </ul>
    </nav>

    @include('partials.footer')

  </body>
</html>