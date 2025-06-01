document.addEventListener('DOMContentLoaded', () => {
  console.log('Homepage loaded successfully.');

  
  const newsletterForm = document.getElementById('newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const email = this.querySelector('input[type="email"]').value;
      document.getElementById('newsletter-message').textContent =
        `Thanks for subscribing, ${email}!`;
      this.reset();
    });
  }

  
  const homeLink = document.querySelector('a[href="/"]');
  if (homeLink) {
    homeLink.classList.add('active');

  }
});
