function addTag() {
  const input = document.getElementById('tag-input');
  const tag = input.value.trim();
  if (tag) {
    const span = document.createElement('span');
    span.textContent = '#' + tag + ' ';
    document.getElementById('tag-list').appendChild(span);
    input.value = '';
  }
}
