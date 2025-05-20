document.addEventListener('DOMContentLoaded', function() {
  const newsletterForm = document.getElementById('newsletter-form');
  const messageElement = document.getElementById('newsletter-message');

  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const email = document.getElementById('newsletter-email').value.trim();
      
     
      if (!isValidEmail(email)) {
        showMessage('Please enter a valid email address.', 'error');
        return;
      }
      
      
      saveSubscriber(email);
      
      
      showMessage('Thank you for subscribing!', 'success');
      newsletterForm.reset();
    });
  }
  
 
  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }
  
  function showMessage(message, type) {
    messageElement.textContent = message;
    messageElement.className = type;
    setTimeout(() => {
      messageElement.textContent = '';
      messageElement.className = '';
    }, 5000);
  }
  
  function getSubscribers() {
    return JSON.parse(localStorage.getItem('newsletterSubscribers') || '[]');
  }
  
  function saveSubscriber(email) {
    const subscribers = getSubscribers();
    if (!subscribers.includes(email)) {
      subscribers.push(email);
      localStorage.setItem('newsletterSubscribers', JSON.stringify(subscribers));
    }
  }
});

console.log('Current subscribers:', JSON.parse(localStorage.getItem('newsletterSubscribers') || '[]'));