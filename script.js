function showBuy(element, productName) {
  const container = element.querySelector('.buy-text');
  container.innerHTML = '';

  const button = document.createElement('a');
  button.classList.add('buy-button');
  const nomorWA = '6281234567890'; // ganti dengan nomor WhatsApp kamu
  const pesan = encodeURIComponent(`Halo, saya ingin beli ${productName}`);
  button.href = `https://wa.me/${nomorWA}?text=${pesan}`;
  button.target = '_blank';
  button.textContent = 'Buy';

  container.appendChild(button);
}
