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

  @include('partials.navbar')
  @include('partials.message-notifications')

    <section class="section landing-section">
        <div class="container">
          <div class="columns is-vcentered">
            <div class="column is-one-third">
              <h1 class="title is-1">Welcome to ByteBuilt</h1>
              <p class="subtitle">
                ByteBuilt is your trusted marketplace for buying high-quality prebuilt PCs and laptops. 
                Our platform offers a wide selection of ready-to-use systems, tailored to meet your needs, whether you're a gamer, professional, or casual user.
                With expert-curated builds and fast delivery, we make it easy to find the perfect device for your digital life.
              </p>
            </div>
            
            <div class="column is-two-thirds image-column"> </div>
          </div>
        </div>
      </section>

    <section class="section services-section">
        <div class="container">
          <h2 class="title is-2 has-text-centered has-text-primary">Our Services</h2>
          <div class="columns is-vcentered">
            <div class="column has-text-centered">
              <div class="box">
                <figure class="image is-64x64 mx-auto">
                  <i class="fas fa-shopping-cart fa-3x"></i>
                </figure>
                <h3 class="title is-4">E-Commerce</h3>
                <p>ByteBuilt is your go-to spot for top-quality prebuilt PCs and laptops. Whether you're gaming, working, or just browsing, we've got a wide range of systems to fit your needs
                   At ByteBuilt, we make finding the perfect PC or laptop simple and fast.</p>
              </div>
            </div>

            <div class="column has-text-centered">
              <div class="box">
                <figure class="image is-64x64 mx-auto">
                  <i class="fas fa-mobile-alt fa-3x"></i>
                </figure>
                <h3 class="title is-4">Responsive Design</h3>
                <p>At ByteBuilt, we make sure our website works perfectly no matter what device you're using. Whether you're on your phone, tablet, or laptop, everything looks great
                   and functions smoothly. We’re all about making your shopping experience easy and enjoyable! <br></p>
              </div>
            </div>

            <div class="column has-text-centered">
              <div class="box">
                <figure class="image is-64x64 mx-auto">
                  <i class="fas fa-shield-alt fa-3x"></i>
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