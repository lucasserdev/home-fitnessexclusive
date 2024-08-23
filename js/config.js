// PEGANDO O TITULO DA PAGINA E COLOCANDO NO NOME DA ACADEMIA 
const unidade = document.title;
const unidadeTitle = document.querySelector('.container-know-gym h1');
unidadeTitle.innerHTML = unidade;

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