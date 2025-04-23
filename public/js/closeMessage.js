document.addEventListener('DOMContentLoaded', function () {
    const closeButtons = document.querySelectorAll('.delete');
    
    closeButtons.forEach(button => {
      button.addEventListener('click', function () {
        const message = button.closest('article');
        message.style.display = 'none';
      });
    });
  });