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
        <h1 class="title">Order History</h1>
    </div>

    <div class="columns is-centered">
        <div class="column is-one-third" style ="margin-top: 20px;">
            <div class="box">
            @if ($orders->isEmpty())
            <div class="has-text-centered is-flex is-justify-content-center is-align-items-center" style="height: 40vh;">
                <div class="is-flex is-flex-direction-column is-align-items-center">
                    <p class="subtitle is-5 has-text-white">You have not bought anything as of yet!</p>
                    <a href="{{ route('products') }}" class="button is-big is-primary is-fullwidth mt-4">Go to Products</a>
                </div>
            </div>
            @else
            @foreach ($orders as $order)
            <article class="media">
                <div class="media-left">
                <figure class="image" style="width: 180px; height: 180px;">
                    <img src="{{ $order->product_details[0]['image'] }}" alt="Image" />
                </figure>
                </div>
                <div class="media-content">
                @foreach ($order->product_details as $product)
                <p class="subtitle is-6">Payment ID: {{ $product['name']}}</p>
                    <div class="is-flex is-justify-content-space-between">
                        <p class="subtitle is-6">Order #: {{ $order->id }}</p>
                        <p class="subtitle is-6">Quantity: {{ $product['quantity']}}</p>
                        <p class="subtitle is-6">Total: {{ $order->total_price }}{{ $product['currency']}} </p>
                    </div>
                    <p class="subtitle is-6">Payment ID: {{ $order->payment_id }}</p>
                </div>
                @endforeach
            </article>
            @endforeach
            @endif
            </div>
        </div>
    </div>

    @include('partials.footer')

  </body>
</html>