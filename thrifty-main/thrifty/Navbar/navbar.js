// Get the cart icon and count span
const cartIcon = document.querySelector('.cart');
const cartCount = document.querySelector('.cart-count');

// Initialize the count
let itemCount = 0;

// Function to update the count
function updateCartCount(count) {
  itemCount = count;
  cartCount.textContent = count;
}

// Example: Add an item to the cart
function addItemToCart() {
  itemCount++;
  updateCartCount(itemCount);
}

// Example: Remove an item from the cart
function removeItemFromCart() {
  if (itemCount > 0) {
    itemCount--;
    updateCartCount(itemCount);
  }
}


const loggedIn = localStorage.getItem('loggedIn');

const userElement = document.getElementById('user');

if(loggedIn != 'true') {
    userElement.innerHTML='<i class="fa-solid fa-sign-in"></i>'
}else{
    userElement.innerHTML='<i class="fa-solid fa-user"></i>'
}


function logIn() {
    localStorage.setItem('loggedIn', true);
}