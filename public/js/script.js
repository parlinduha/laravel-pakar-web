window.onscroll = function(){
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav){
    }else{
        header.classList.remove('navbar-fixed')
    }
}


const hamburger = document.querySelector('#hamburger');
const namMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    namMenu.classList.toggle('hidden')
});