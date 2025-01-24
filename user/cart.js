document.addEventListener('DOMContentLoaded', () => {
    const qtyContainers = document.querySelectorAll('.qty');

    qtyContainers.forEach(qtyContainer => {
        const decreaseBtn = qtyContainer.querySelector('button:first-child');
        const increaseBtn = qtyContainer.querySelector('button:last-child');
        const qtyDisplay = qtyContainer.querySelector('.qtyval');
        
        // Get the cart card containing this qty container
        const cartCard = qtyContainer.closest('.cart-card');
        const priceElement = cartCard.querySelector('.cprod-price');
        
        // Get the original price (removing $ and converting to number)
        const originalPrice = parseFloat(priceElement.textContent.replace('$', ''));
        
        // Set initial value
        let quantity = parseInt(qtyDisplay.textContent);

        // Function to update price
        const updatePrice = () => {
            const totalPrice = (originalPrice * quantity).toFixed(2);
            priceElement.textContent = `$${totalPrice}`;
        };

        // Decrease quantity
        decreaseBtn.addEventListener('click', () => {
            if (quantity > 1) {
                quantity--;
                qtyDisplay.textContent = quantity;
                updatePrice();
            }
        });

        // Increase quantity
        increaseBtn.addEventListener('click', () => {
            if (quantity < 99) {
                quantity++;
                qtyDisplay.textContent = quantity;
                updatePrice();
            }
        });
    });
});