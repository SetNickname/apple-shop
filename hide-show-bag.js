document.addEventListener('DOMContentLoaded', () => {
    const bagContainer = document.querySelector('.bag-container');

    const showBag = document.querySelector('#show-bag-btn');
    const hideBag = document.querySelector('#hide-bag-btn');

    showBag.addEventListener('click', (e) => {
        bagContainer.style.animationName = 'show';
        bagContainer.classList.add('show');
    });


    hideBag.addEventListener('click', (e) => {

        bagContainer.style.animationName = 'hide';
        setTimeout(() => {
            bagContainer.classList.remove('show');
        }, 1000);
        
    });
});