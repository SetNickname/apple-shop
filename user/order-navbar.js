document.addEventListener('DOMContentLoaded', () => {
    const homeBtn = document.querySelector('.home-btn');
    const sideNavLinks = document.querySelectorAll('.side-nav-link');
    const logoutBtn = document.querySelector('.logout-btn');
    const checkBtn = document.querySelector('.check-btn');

    homeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = 'home-iphone.html';
    });

    sideNavLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
          
          const linkText = link.textContent.trim();
          
          switch(linkText) {
              case 'Orders':
                  window.location.href = 'pay.html';
                  break;
              case 'Cart':
                  window.location.href = 'cart.html';
                  break;
              case 'Account':
                  window.location.href = 'user-account-setting.html';
                  break;
              default:
                  alert('No navigation defined for this link');
            }
        });
    });

    logoutBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = 'home-iphone.html';
    });

    checkBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = 'checkout.html';
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
                    window.location.href = 'pay.html';
                    break;
                case 'To Ship':
                    window.location.href = 'ship.html';
                    break;
                case 'To Receive':
                    window.location.href = 'receive.html';
                    break;
                case 'Completed':
                    window.location.href = 'completed.html';
                    break;
                case 'Return/Refund':
                    window.location.href = 'return.html';
                    break;
                case 'Cancelled':
                    window.location.href = 'cancel.html';
                    break;
                default:
                    alert('No navigation defined for this link');
                }
              });
        });
});