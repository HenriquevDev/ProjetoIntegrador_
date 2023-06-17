const produto = document.querySelector('.bloco');

produto.addEventListener('mouseover', () => {
  produto.classList.add('produto-destaque');
});

produto.addEventListener('mouseout', () => {
  produto.classList.remove('produto-destaque');
});