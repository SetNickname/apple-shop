document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-link');
    const profilePicture = document.querySelector('.profile-picture');
  
    navLinks.forEach(link => {
      link.addEventListener('click', (e) => {
          e.preventDefault();
          
          const linkText = link.textContent.trim();
          
          switch(linkText) {
              case 'Dashboard':
                  window.location.href = 'admin-dashboard.php';
                  break;
              case 'Orders':
                  window.location.href = 'admin-orders.php';
                  break;
              case 'Products':
                  window.location.href = 'admin-products.php';
                  break;
              case 'Customers':
                window.location.href = 'admin-customers.php';
                break;
              case 'Reviews':
                window.location.href = 'admin-reviews.php';
                break;
              default:
                  alert('No navigation defined for this link');
              }
            });
        });
    profilePicture.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = 'admin-settings.php';
    });

});