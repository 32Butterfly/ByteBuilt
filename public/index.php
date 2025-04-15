<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="index/styles.css">
    <link rel="stylesheet" href="partials/navbarStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>
  <body>

  <!-- Include the navbar -->
  <?php require('partials/navbar.php'); ?>

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

    <?php require('partials/footer.php'); ?>

  </body>
</html>
