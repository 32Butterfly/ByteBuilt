document.querySelectorAll(".preview-btn").forEach(button => {
  button.addEventListener("click", () => {
    const title = button.dataset.title;
    const image = button.dataset.image;
    const specs = JSON.parse(button.dataset.specs);
    const productPrice = button.dataset.price;
    const productCurrency = button.dataset.currency;

    document.getElementById("previewTitle").textContent = title;
    document.getElementById("previewImage").src = image;
    document.getElementById('previewPrice').innerText = productPrice + " " + productCurrency;

    const specsTable = document.getElementById("previewSpecs").querySelector("tbody");
    specsTable.innerHTML = ""; // Clear any previous rows

    for (let key in specs) {
      if (specs.hasOwnProperty(key)) {
        const row = document.createElement("tr");

        const th = document.createElement("th");
        th.textContent = key;

        const td = document.createElement("td");
        td.textContent = specs[key];

        row.appendChild(th);
        row.appendChild(td);
        specsTable.appendChild(row);
      }
    }

    // Show modal
    document.getElementById("previewModal").classList.add("is-active");
  });
});

// Close modal functionality
document.getElementById("closeModal").addEventListener("click", () => {
  document.getElementById("previewModal").classList.remove("is-active");
});