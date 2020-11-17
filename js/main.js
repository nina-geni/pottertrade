const dropdownLinks = document.querySelectorAll('.dropdown-link');
const subNavs = document.querySelectorAll('.sub-nav');
const shopMenu = document.querySelector('#shop');
const profileMenu = document.querySelector('#profile');

dropdownLinks.forEach((item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        const id = e.target.id || e.target.parentNode.id;
        console.log(id);
        if (id === 'shop-link') {
            if (shopMenu.classList.contains('nav-hidden')) {
                shopMenu.classList.remove('nav-hidden');
                profileMenu.classList.add('nav-hidden');
            } else {
                shopMenu.classList.add('nav-hidden');
            }
        } else if (id === 'profile-link') {
            console.log('i am a cookie');
            if (profileMenu.classList.contains('nav-hidden')) {
                profileMenu.classList.remove('nav-hidden');
                shopMenu.classList.add('nav-hidden');
            } else {
                profileMenu.classList.add('nav-hidden');
            }
        }
    })
}));