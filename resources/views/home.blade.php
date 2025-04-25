<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarText.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>
  <body>

  <!-- Include the navbar -->
  @include('partials.navbar')

    <div class="section pt-4 pb-0">
      <div class="container is-flex is-justify-content-flex-end">
        <div style="max-width: 400px;">

          <!-- Session success message -->
          @if (session('success'))
            <article class="message is-success" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;" id="successMessage">
              <div class="message-header">
                <p>Success</p>
                <button class="delete" aria-label="delete"></button>
              </div>
              <div class="message-body">
                {{ session('success') }}
              </div>
            </article>
          @endif

        </div>
      </div>
    </div>

    <script src="{{ asset('js/closeMessage.js') }}"></script>

    <!-- Landing Section -->
    <section class="section landing-section">
        <div class="container">
          <div class="columns is-vcentered">
            <!-- Left: Introduction -->
            <div class="column is-one-third">
              <h1 class="title is-1">Welcome to ByteBuilt</h1>
              <p class="subtitle">
                ByteBuilt is your trusted marketplace for buying high-quality prebuilt PCs and laptops. 
                Our platform offers a wide selection of ready-to-use systems, tailored to meet your needs, whether you're a gamer, professional, or casual user.
                With expert-curated builds and fast delivery, we make it easy to find the perfect device for your digital life.
              </p>
            </div>
            
            <!-- Right: Images (PC and Laptop) -->
            <div class="column is-two-thirds image-column"> </div>
          </div>
        </div>
      </section>

    <!-- Services Section -->
    <section class="section services-section">
        <div class="container">
          <h2 class="title is-2 has-text-centered has-text-primary">Our Services</h2>
          <div class="columns is-vcentered">
            <!-- E-Commerce Service -->
            <div class="column has-text-centered">
              <div class="box">
                <figure class="image is-64x64 mx-auto">
                  <i class="fas fa-shopping-cart fa-3x"></i> <!-- E-Commerce Icon -->
                </figure>
                <h3 class="title is-4">E-Commerce</h3>
                <p>ByteBuilt is your go-to spot for top-quality prebuilt PCs and laptops. Whether you're gaming, working, or just browsing, we've got a wide range of systems to fit your needs
                   At ByteBuilt, we make finding the perfect PC or laptop simple and fast.</p>
              </div>
            </div>

            <!-- Responsive Design Service -->
            <div class="column has-text-centered">
              <div class="box">
                <figure class="image is-64x64 mx-auto">
                  <i class="fas fa-mobile-alt fa-3x"></i> <!-- Responsive Design Icon -->
                </figure>
                <h3 class="title is-4">Responsive Design</h3>
                <p>At ByteBuilt, we make sure our website works perfectly no matter what device you're using. Whether you're on your phone, tablet, or laptop, everything looks great
                   and functions smoothly. We’re all about making your shopping experience easy and enjoyable! <br></p>
              </div>
            </div>

            <!-- Web Security Service -->
            <div class="column has-text-centered">
              <div class="box">
                <figure class="image is-64x64 mx-auto">
                  <i class="fas fa-shield-alt fa-3x"></i> <!-- Web Security Icon -->
                </figure>
                <h3 class="title is-4">Web Security</h3>
                <p>Your privacy and security are a top priority for us. We use the latest security measures to protect your data, so you can shop with peace of mind.
                   At ByteBuilt, we’ve got your back, ensuring a safe experience every time you visit our site.</p>
              </div>
            </div>
          </div>
        </div>
    </section>

    @include('partials.footer')

  </body>
</html>