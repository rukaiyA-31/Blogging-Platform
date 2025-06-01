document.addEventListener('DOMContentLoaded', () => {
  console.log('Admin panel loaded.');
  const heading = document.querySelector('h1');

  const adminBox = document.getElementById('admin-box');
  if (adminBox) {
    adminBox.innerHTML += "<p>Welcome, Admin! You can manage content here.</p>";
  }
});
