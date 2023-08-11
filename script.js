/* Navbar responsiveness  */
const bar = document.getElementById('bar');
const close1 = document.getElementById('close');
const nav = document.getElementById('navbar');
/* When the bar is open and closed */
if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
})
}
if(close1){
    bar.addEventListener('click', () => {
        nav.classList.remove('active');
})
}

const addToCartBtn = document.getElementById('addToCartBtn');
const quantityInput = document.getElementById('quantity');

// Add click event listener to the button
addToCartBtn.addEventListener('click', function() {
  // Get the selected quantity
  const quantity = quantityInput.value;

  // Redirect to cart.php with the product and quantity as query parameters
  window.location.href = `cart12.php?product=product_id&quantity=${quantity}`;
});