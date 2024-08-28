// PEGANDO O TITULO DA PAGINA E COLOCANDO NO NOME DA ACADEMIA 
const unidade = document.title;
const unidadeTitle = document.querySelector('.container-know-gym h1');
unidadeTitle.innerHTML = unidade;
const containerKnowGym = document.querySelector('.container-know-gym');
const info = document.querySelectorAll('.infos .info');

// CAROSSEL
const containerCarosel = document.querySelector('.container-carosel');
const imgContainerCarosel = containerCarosel.querySelectorAll('img');
imgContainerCarosel.forEach((img) => {
    img.addEventListener('click', () => {
        if (img.classList.contains('active')) {
            console.log('tem a classe');
        } else {
            imgContainerCarosel.forEach((img) => {
                img.classList.remove('active');
            });
            img.classList.add('active');
        }
        document.querySelector('.photo img').src = img.src;
    });
});

const scrollAmount = 80;
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');
prevBtn.addEventListener('click', () => {
    containerCarosel.scrollLeft -= scrollAmount;
});

nextBtn.addEventListener('click', () => {
    containerCarosel.scrollLeft += scrollAmount;
});

// ballTheme.addEventListener('click', () => {
//    if (body.classList.contains('dark-mode')) {
//     containerKnowGym.style.backgroundColor = 'black';
//     info.forEach((i) => {
//         i.style.border = '1px solid white';
//     });

//    } else {
//     containerKnowGym.style.backgroundColor = 'white';
//     info.forEach((i) => {
//         i.style.border = '1px solid rgba(0, 0, 0, 0.247)';
//     });

//    }
// });