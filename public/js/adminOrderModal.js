document.getElementById('openAddOrderModalBtn').addEventListener('click', function() {
  document.getElementById('addOrderModal').classList.add('is-active');
});

document.getElementById('closeAddOrderModalBtn').addEventListener('click', function() {
  document.getElementById('addOrderModal').classList.remove('is-active');
});