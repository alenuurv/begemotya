function filterAll() {
  const products = document.querySelectorAll('.product');
  products.forEach(product => {
    product.style.display = 'block';
  });
}

function filterByAge(age) {
  const products = document.querySelectorAll('.product');
  products.forEach(product => {
    if (product.dataset.age === age) {
      product.style.display = 'block';
    } else {
      product.style.display = 'none';
    }
  });
}
