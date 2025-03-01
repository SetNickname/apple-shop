document.addEventListener('DOMContentLoaded', () => {
    const homeBtn = document.querySelector('.home-btn');
    const sideNavLinks = document.querySelectorAll('.side-nav-link');
    const logoutBtn = document.querySelector('.logout-btn');
    const checkBtn = document.querySelector('.check-btn');

    homeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = './home/home-iphone.php';
    });

    sideNavLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
          
          const linkText = link.textContent.trim();
          
          switch(linkText) {
              case 'Orders':
                  window.location.href = 'pay.php';
                  break;
              case 'Cart':
                  window.location.href = 'cart.php';
                  break;
              case 'Account':
                  window.location.href = 'user-account-setting.php';
                  break;
              default:
                  alert('No navigation defined for this link');
            }
        });
    });

    logoutBtn.addEventListener('click', (e) => {
        e.preventDefault();
        if (confirm("Are you sure you want to logout?")) {
            alert('Successfully Logged out')
            window.location.href = '../logout.php';
        } else {
            // nothing happens
        }
    });

    checkBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = 'checkout.php';
    });

});

/* MAIN CONTENT NAV BAR*/
document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.main-nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            const linkText = link.textContent.trim();
            
            switch(linkText) {
                case 'To Pay':
                    window.location.href = 'pay.php';
                    break;
                case 'To Ship':
                    window.location.href = 'ship.php';
                    break;
                case 'To Receive':
                    window.location.href = 'receive.php';
                    break;
                case 'Completed':
                    window.location.href = 'completed.php';
                    break;
                case 'Return/Refund':
                    window.location.href = 'return.php';
                    break;
                case 'Cancelled':
                    window.location.href = 'cancel.php';
                    break;
                default:
                    alert('No navigation defined for this link');
                }
              });
        });
});