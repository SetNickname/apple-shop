document.addEventListener('DOMContentLoaded', () => {
    // Navigation mapping object
    const navigationPaths = {
        // Main nav links
        'AirPods': 'home-airpods.php',
        'iPhone': 'home-iphone.php',
        'Accessories': 'home-accessories.php',

        // Bag nav links
        'Orders': '../pay.php',
        'Cart': '../cart.php',
        'Account': '../user-account-setting.php'
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