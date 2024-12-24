document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            const linkText = link.textContent.trim();
            
            switch(linkText) {
                case 'AirPods':
                    window.location.href = 'home-airpods.html';
                    break;
                case 'iPhone':
                    window.location.href = 'home-iphone.html';
                    break;
                case 'Accessories':
                    window.location.href = 'home-accessories.html';
                    break;
                default:
                    alert('No navigation defined for this link');
                }
              });
        });
});