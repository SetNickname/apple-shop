document.addEventListener('DOMContentLoaded', () => {
    const bagContainer = document.querySelector('.bag-container');

    const showBag = document.querySelector('#show-bag-btn');
    const hideBag = document.querySelector('#hide-bag-btn');

    const bodyBlur = document.querySelector('#target-body');

    showBag.addEventListener('click', (e) => {
        bagContainer.style.animationName = 'show';
        bagContainer.classList.add('show');

        bodyBlur.style.webkitFilter = 'blur(5px)'
    });


    hideBag.addEventListener('click', (e) => {

        bagContainer.style.animationName = 'hide';
        setTimeout(() => {
            bagContainer.classList.remove('show');
            bodyBlur.style.webkitFilter = 'blur(0)'
        }, 1000);
        
    });
});