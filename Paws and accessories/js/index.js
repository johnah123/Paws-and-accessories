let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}


    document.addEventListener("DOMContentLoaded", function () {
        // Define the cart array to store cart items
        var cart = [];

        // Get all elements with the class "add-to-cart"
        var addToCartButtons = document.querySelectorAll('.add-to-cart');

        // Loop through each add to cart button and attach a click event listener
        addToCartButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Get product details from the clicked button's data attributes
                var productName = button.dataset.name;
                var productPrice = parseFloat(button.dataset.price);
                var productImage = button.dataset.image;

                // Add the product to the cart
                addToCart(productName, productPrice, productImage);
            });
        });

        // Function to add a product to the cart
        function addToCart(name, price, image) {
            // Check if the product is already in the cart
            var existingItem = cart.find(item => item.name === name);

            if (existingItem) {
                // If the product is already in the cart, increase the quantity
                existingItem.quantity++;
            } else {
                // If the product is not in the cart, add it with quantity 1
                cart.push({
                    name: name,
                    price: price,
                    image: image,
                    quantity: 1
                });
            }

            // Update the cart display
            updateCartDisplay();
        }

        // Function to update the cart display
        function updateCartDisplay() {
            var cartContainer = document.querySelector('.cart-items-container');
            var totalContainer = document.getElementById('total-amount');

            // Clear the existing cart content
            cartContainer.innerHTML = '';

            // Loop through the cart items and add them to the cart container
            cart.forEach(function (item) {
                var cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');
                cartItem.innerHTML = `
                    <span class="fas fa-times"></span>
                    <img src="${item.image}" alt="${item.name}">
                    <div class="content">
                        <h3>${item.name}</h3>
                        <div class="price">Price: ₱${item.price.toFixed(2)} /-</div>
                        <div class="quantity">Quantity: ${item.quantity}</div>
                    </div>
                `;
                cartContainer.appendChild(cartItem);
            });

            // Calculate and display the total amount
            var totalAmount = cart.reduce(function (total, item) {
                return total + item.price * item.quantity;
            }, 0);

            totalContainer.textContent = `Total: ₱${totalAmount.toFixed(2)} /-`;
        }
    });



window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}