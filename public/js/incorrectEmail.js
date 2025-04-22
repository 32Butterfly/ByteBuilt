document.addEventListener('DOMContentLoaded', () => {
    const emailInput = document.getElementById('emailInput');
    const emailHelp = document.getElementById('emailHelp');
    const emailIcon = document.getElementById('emailIcon');
  
    function validateEmail() {
      const value = emailInput.value;
      console.log("Email input value:", value);
      const isValid = value.includes('@');
  
      if (!isValid) {
        emailInput.classList.add('is-danger');
        emailHelp.style.display = 'block';
        emailIcon.style.display = 'inline-block';
      } else {
        emailInput.classList.remove('is-danger');
        emailHelp.style.display = 'none';
        emailIcon.style.display = 'none';
      }
    }
  
    emailInput.addEventListener('input', validateEmail);
  
    // Hide warning on load
    emailHelp.style.display = 'none';
    emailIcon.style.display = 'none';
  });