console.log('cart.js has loaded');

let cartUl = document.querySelector('#cart');
let addToCartInput = document.querySelector('#addToCart');

window.addEventListener('load', function() {
  loadCart();
});

addToCartInput.addEventListener('click', function(e) {
  e.preventDefault();
  let products = [ ... document.getElementsByName('products[]') ];
  let selectedProducts = [];
  selectedProducts = products
    .filter(item => item.checked)
    .map(item => item.value);

  addItemsToCart(selectedProducts);
});

function loadCart() {
  const xhr = new XMLHttpRequest();

  xhr.open('GET', 'ajax_cart.php');
  xhr.responseType = 'json';
  xhr.addEventListener('load', loadCartHandler)
  xhr.send(null);
}

function loadCartHandler() {
  let cart = this.response;
  if (cart.length > 0) {
    cartUl.innerHTML = '<li>' + cart.join('</li><li>') + '</li>'; 
  }
}

function addItemsToCart(selectedProducts) {
  const xhr = new XMLHttpRequest();

  xhr.open('POST', 'ajax_add_cart.php');
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.addEventListener('load', addItemsToCartHandler)
  xhr.send('products=' + JSON.stringify(selectedProducts));
}

function addItemsToCartHandler() {
  loadCart();
}