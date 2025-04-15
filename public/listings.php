<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="listings/styles.css" />
  </head>
  <body>

      <?php require('partials/navbar.php')?>

    <section class="section">
      <div class="container">

        <!-- 🔍 Search Bar -->
        <div class="field has-addons search-bar">
          <div class="control is-expanded">
            <input class="input" type="text" placeholder="Search for PCs or laptops..." />
          </div>
          <div class="control">
            <button class="button is-primary">
              <span class="icon"><i class="fas fa-search"></i></span>
            </button>
          </div>
        </div>

        <!-- 🖼️ Card Grid -->
        <div class="columns is-multiline">
          <!-- 🧊 Listing Card -->
          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>

          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>

          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>

          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>

          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>

          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>
          
          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>

          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>

          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>

          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>

          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="listing1.jpg" alt="PC" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070
                </div>
              </div>
              <div class="is-flex is-justify-content-flex-end">
              <button class="button is-link is-small preview-btn"
                data-image="listing1.jpg"
                data-title="PC | Ryzen 7 7700, 32GB, 2TB SSD, RTX 4070"
                data-specs='{
                    "Manufacturer": "GameRoom",
                    "Processor (CPU)": "AMD Ryzen 7 7700",
                    "CPU Cooler": "DEEPCOOL AG500 BK ARGB",
                    "Motherboard": "GIGABYTE B650 AX (WiFi 6E + Bluetooth 5.3)",
                    "RAM": "32GB DDR5 6000MHz RGB",
                    "GPU": "NVIDIA GeForce RTX 4070 12GB",
                    "Storage": "2TB M.2 NVME PCIe Gen3x4",
                    "Case": "APNX C1 Mid-Tower - ChromaFlair",
                    "PSU": "Fully Modular 750W 80+ GOLD (ATX 3.0)",
                    "Warranty": "24 months for individuals, 12 months for companies"
                }'>
                <span class="icon is-small"><i class="fas fa-eye"></i></span>
                <span>Preview</span>
             </button>
             </div>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- 🔍 Preview Modal -->
    <div class="modal" id="previewModal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
        <p class="modal-card-title" id="previewTitle">Listing Preview</p>
        <button class="delete is-large" aria-label="close" id="closeModal"></button>
        <script src="escapePreview.js"></script>
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
            <p class="mr-4">Price: €1,599.00</p>
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

    <script src="preview.js"></script>

    <?php require('partials/footer.php')?>

  </body>
</html>