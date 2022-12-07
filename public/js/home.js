// navbar fixed
window.onscroll = function(){
    const header = document.querySelector('#header2');
    const fixnav = header.offsetTop;

    if (window.pageYOffset > fixnav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
};

console.log("ayam");