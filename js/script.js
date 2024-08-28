const body = document.querySelector('body');
const menuBurger = document.querySelector('.menu-burger');
const navBar = document.querySelector('nav');
const btnCloseBurger = document.querySelector('header nav ul .close-burger i');
const a = navBar.querySelectorAll('a');
let logo = document.querySelector('.logo img');
const section = document.querySelectorAll('section');
const menuA = document.querySelectorAll('.menu a');
const themeMode = document.querySelector('.theme-mode');



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

// Modificando o modo dark e light
// const ballTheme = document.querySelector('.ball-theme');
// ballTheme.style.left = '3px';
// ballTheme.addEventListener('click', () => {
//    if (ballTheme.style.left === '3px') {
//       ballTheme.style.left = '31px';
//       ballTheme.style.backgroundColor = 'black';
//       logo.src = 'images/logo-sem-fundo.png';
//       body.classList.add('dark-mode');
//       section.forEach((sec) => {
//          sec.classList.add('dark-mode');
//       });
//       menuA.forEach((a) => {
//          a.style.color = 'white';
//       });
//       themeMode.style.backgroundColor = 'white';
//       themeMode.style.color = 'black';
      
//    } else {
//       ballTheme.style.left = '3px';
//       ballTheme.style.backgroundColor = 'white';
//       logo.src = 'images/logo.jpeg';
//       body.classList.remove('dark-mode');
//       section.forEach((sec) => {
//          sec.classList.remove('dark-mode');
//       });
//       menuA.forEach((a) => {
//          a.style.color = 'black';
//       });
//       themeMode.style.backgroundColor = 'black';
//       themeMode.style.color = 'white';
//    }
// });




