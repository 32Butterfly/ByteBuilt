document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.open-modal-btn').forEach(button => {
    button.addEventListener('click', function () {
      const target = button.getAttribute('data-target');
      const modal = document.getElementById(target);
      if (modal) modal.classList.add('is-active');
    });
  });

  document.querySelectorAll('[data-close]').forEach(el => {
    el.addEventListener('click', function () {
      const modal = el.closest('.modal');
      if (modal) modal.classList.remove('is-active');
    });
  });
});