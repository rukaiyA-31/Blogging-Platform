document.getElementById('newsletter-form').addEventListener('submit', function(e) {
  e.preventDefault();
  const email = document.getElementById('email').value;
  document.getElementById('message').textContent = `Thanks for subscribing, ${email}!`;
  this.reset();
});
