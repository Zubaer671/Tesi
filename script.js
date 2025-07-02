document.getElementById('searchInput').addEventListener('input', function () {
  const keyword = this.value.toLowerCase();
  document.querySelectorAll('.app-item').forEach(item => {
    const name = item.querySelector('p').innerText.toLowerCase();
    item.style.display = name.includes(keyword) ? 'block' : 'none';
  });
});