window.onscroll = function(){
    const header = document.querySelector('#header');
    const fixnav = header.offsetTop;

    if (window.pageYOffset > fixnav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
};