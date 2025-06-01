document.getElementById('signup-form').addEventListener('submit', function(e) {
  e.preventDefault();

  const username = document.getElementById('username').value.trim();
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value;
  const errorMsg = document.getElementById('error-msg');

  if (username.length < 3) {
    errorMsg.textContent = "Username must be at least 3 characters.";
    return;
  }

  if (!email.includes('@')) {
    errorMsg.textContent = "Enter a valid email.";
    return;
  }

  if (password.length < 6) {
    errorMsg.textContent = "Password must be at least 6 characters.";
    return;
  }

  errorMsg.textContent = "Validation passed!";
  this.submit(); 
});
