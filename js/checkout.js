document.addEventListener('DOMContentLoaded', () => {
    const closeBtn = document.querySelector('.close-btn');
    closeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = 'cart.html';
    });

});

//toggle between  card and cod//
document.addEventListener('DOMContentLoaded', () => {
    const cardButton = document.querySelector('#card-btn');
    const codButton = document.querySelector('.payment-button:not(#card-btn)');
    const cardDetails = document.querySelector('#card-pay-details');
    const codDetails = document.querySelector('#cod-details');

    // Event listener for COD button
    codButton.addEventListener('click', () => {
        // Set active class
        codButton.classList.add('active');
        cardButton.classList.remove('active');

        // Show COD details and hide card details
        codDetails.style.display = 'block';
        cardDetails.style.display = 'none';
    });

    // Event listener for Card button
    cardButton.addEventListener('click', () => {
        // Set active class
        cardButton.classList.add('active');
        codButton.classList.remove('active');

        // Show card details and hide COD details
        cardDetails.style.display = 'block';
        codDetails.style.display = 'none';
    });
});

document.getElementById('place-order-btn').addEventListener('click', function() {
    // Show notification
    const notification = document.getElementById('notification');
    notification.classList.remove('hidden');
    notification.style.display = 'flex'; // Ensure notification is displayed

    // Hide notification after 3 seconds and redirect to cart page
    setTimeout(function() {
        notification.classList.add('hidden');
        notification.style.display = 'none'; // Hide notification again
        window.location.href = 'cart.html'; // Redirect to the cart page
    }, 1000);
});

