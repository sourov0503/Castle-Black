const navIconEl= document.querySelector(".nav_icon");
const navCloseEl = document.querySelector(".nav_close");
const navList = document.querySelector(".nav_list");
const navBgOverlay = document.querySelector(".nav_bgOverlay");

const navOpen = ()=> {
    navList.classList.add('show');
    navBgOverlay.classList.add('active');
    document.body.style='visibility: visible; height: 100vh; width:100vw; overflow:hidden;';;
}

const navClose = ()=> {
    navList.classList.remove('show');
    navBgOverlay.classList.remove('active');
    document.body.style='visibility: visible; height: initial; width: 100%; overflow-x: hidden;';
}
navIconEl.addEventListener('click',navOpen);
navCloseEl.addEventListener('click',navClose);
navBgOverlay.addEventListener('click',navClose);

//aos-scrool animation
AOS.init({
    offset: 200, 
    delay: 100, 
    duration: 400, 
    easing: 'ease', 
    once: false, 
    mirror: false, 
    anchorPlacement: 'top-bottom', 
  });