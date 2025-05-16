document.getElementById('openModalBtn').addEventListener('click', function() {
  document.getElementById('addProductModal').classList.add('is-active');
});

document.getElementById('closeModalBtn').addEventListener('click', function() {
  document.getElementById('addProductModal').classList.remove('is-active');
});