const body = document.querySelector('body');
const menuBurger = document.querySelector('.menu-burger');
const navBar = document.querySelector('nav');
const btnCloseBurger = document.querySelector('header nav ul .close-burger i');
const a = navBar.querySelectorAll('a');

function obterLarguraTela() {
   return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
}

a.forEach((link) => {
   link.addEventListener('click', () => {
      if (obterLarguraTela() <= 790) {
         navBar.style.display = 'none';
      }
   });
});

// Abre o menu Burguer
menuBurger.addEventListener('click', () => {
   navBar.style.display = 'flex';
});

// Fecha o menu Burger
btnCloseBurger.addEventListener('click', () => {
   navBar.style.display = 'none';
});