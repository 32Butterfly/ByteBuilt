// Close modal function
function closeModal() {
    document.getElementById('previewModal').classList.remove('is-active');
  }
  
  // ESC key handler
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      closeModal();
    }
  });