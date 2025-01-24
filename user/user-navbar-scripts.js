document.addEventListener('DOMContentLoaded', () => {
    // Navigation mapping object
    const navigationPaths = {
        // Main nav links
        'AirPods': 'home-airpods.html',
        'iPhone': 'home-iphone.html',
        'Accessories': 'home-accessories.html',
        // Bag nav links
        'Orders': '/user/pay.html',
        'Cart': '/user/cart.html',
        'Account': '/user/user-account-setting.html'
    };

    // Select all navigation links at once
    const allNavLinks = document.querySelectorAll('.nav-link, .bag-nav-link a');

    allNavLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            const linkText = link.textContent.trim();
            const path = navigationPaths[linkText];
            
            if (path) {
                window.location.href = path;
            } else {
                alert('No navigation defined for this link');
            }
        });
    });
});