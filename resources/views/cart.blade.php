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

    <div class = "has-text-centered" style = "margin-top: 30px;">
        <h1 class="title">Shopping Cart</h1>
    </div>

    <div class="columns is-centered">
        <div class="column is-one-third" style ="margin-top: 20px;">
            <div class="box">
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
                        <p class="subtitle is-6">Price: {{ $cart->price }}{{ $cart->currency }}</p>
                        <p class="subtitle is-6">Quantity: {{ $cart->quantity }}</p>
                    </div>
                </div>
            </article>
            @endforeach
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