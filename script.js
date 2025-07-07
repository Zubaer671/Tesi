function showBuy(element) {
  const container = element.querySelector('.buy-text');

  if (container.innerHTML === '') {
    const button = document.createElement('button');
    button.classList.add('buy-button');
    button.textContent = 'Buy';
    button.onclick = function(event) {
      event.stopPropagation();
      container.innerHTML = '';
    };
    container.appendChild(button);
  }
}
