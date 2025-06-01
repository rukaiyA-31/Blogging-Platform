const contentBox = document.getElementById('post-content');
const status = document.getElementById('save-status');

function autosave() {
  const content = contentBox.value;
  localStorage.setItem('draft', content);
  status.textContent = "Saved at " + new Date().toLocaleTimeString();
}

setInterval(autosave, 2000);

window.onload = () => {
  const saved = localStorage.getItem('draft');
  if (saved) {
    contentBox.value = saved;
    status.textContent = "Draft recovered.";
  }
};
