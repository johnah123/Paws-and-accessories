var cartItems = [];
var totalPrice = 0;

        function addToCart(productName, productPrice, productImage) {
            // Check if the item is already in the cart
            var existingItem = cartItems.find(item => item.name === productName);

            if (existingItem) {
                existingItem.quantity++;
            } else {
                cartItems.push({
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    quantity: 1
                });
            }

            updateCart();
        }

        function updateCart() {
            var cartContainer = document.getElementById("cart-items");
            cartContainer.innerHTML = "";

            cartItems.forEach(function(item) {
                var cartItem = document.createElement("div");
                cartItem.className = "cart-item";
                cartItem.innerHTML = `
                    <img src="${item.image}" alt="${item.name} Image">
                    <div>${item.name} - ₱${item.price.toFixed(2)}</div>
                    <div class="quantity">
                        <button class="quantity-btn" onclick="decreaseQuantity('${item.name}')">-</button>
                        <div>${item.quantity}</div>
                        <button class="quantity-btn" onclick="increaseQuantity('${item.name}')">+</button>
                    </div>
                `;
                cartContainer.appendChild(cartItem);
            });

            totalPrice = cartItems.reduce(function(total, item) {
                return total + item.price * item.quantity;
            }, 0);

            updateTotal();
        }

        function updateTotal() {
            document.getElementById("total").textContent = "Total: ₱" + totalPrice.toFixed(2);
        }

        function checkout() {
            alert("Checkout complete! Total amount: ₱" + totalPrice.toFixed(2));
            // You can add additional logic here, such as sending the order to a server.
        }

        function increaseQuantity(productName) {
            var item = cartItems.find(item => item.name === productName);
            if (item) {
                item.quantity++;
                updateCart();
            }
        }

        function decreaseQuantity(productName) {
            var item = cartItems.find(item => item.name === productName);
            if (item && item.quantity > 1) {
                item.quantity--;
                updateCart();
            }
        }
    