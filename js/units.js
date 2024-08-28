// TODAS AS ACADEMIAS E INFORMAÇÕES
const gyms = [
    {
        nome: 'Unidade São José',
        endereco: 'Rua Zeca Esmeraldo, 100',
        img: 'images/units/un-sj.png',
        url: 'saojose.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/10/site/T9jRsu95eeoqLkTjDOHlwQ%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22h Sábado - 8h às 14h Domingo - 09h às 13h',
        cidade: 'JUAZEIRO DO NORTE',
        bairro: 'SAO JOSE'
    },

    {
        nome: 'Unidade Tiradentes',
        endereco: 'Avenida Radialista Coelho Alves, 181',
        img: 'images/units/un-tiradentes.png',
        url: 'tiradentes.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/5/site/h%5BBAR%5DKEL8uI95qdrw2eJYudZQ%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22 Sábado - 6h às 12h Domingo - 9h às 13h',
        cidade: 'JUAZEIRO DO NORTE',
        bairro: 'TIRADENTES'
    },

    {
        nome: 'Unidade Crato - São Luiz',
        endereco: 'Avenida Padre Cicero, 1349',
        img: 'images/units/un-csl.png',
        url: 'cratosaoluiz.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/2/site/QhXXzoY7OMy%5BPLUS%5DFpULG15Wrw%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22h Sábado - 8h às 16h Domingo - 9h às 13h',
        cidade: 'CRATO',
        bairro: 'SAO MIGUEL'
    },

    {
        nome: 'Unidade Premium Exclusive',
        endereco: 'Avenida Leão Sampaio, 1623',
        img: 'images/units/un-premium.png',
        url: 'premiumexclusive.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/9/site/r18ToOoK8KTmzgOdC8INCg%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22h Sábado - 6h às 12h Domingo - 9h às 13h',
        cidade: 'JUAZEIRO DO NORTE',
        bairro: 'LAGOA SECA'
    },

    {
        nome: 'Unidade Parque Ecológico',
        endereco: 'Rua Dr. Mário Malzoni, 899',
        img: 'images/units/un-pe.png',
        url: 'parqueecologico.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/6/site/TP75FjwEmjWR3pk8cw1H9w%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22h Sábado - 10h às 16h Domingo - 9h às 13h',
        cidade: 'JUAZEIRO DO NORTE',
        bairro: 'LAGOA SECA'
    },

    {
        nome: 'Unidade Salesianos',
        endereco: 'Rua Santa Cecília, 1162',
        img: 'images/units/un-salesianos.png',
        url: 'salesianos.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/8/site/jSV3VzHjCO22Fnt7om6Nww%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22h Sábado - 10h às 18h Domingo - 9h às 13h',
        cidade: 'JUAZEIRO DO NORTE',
        bairro: 'SALESIANOS'
    },

    {
        nome: 'Unidade Lagoa Seca',
        endereco: 'Avenida Leão Sampaio, 1771',
        img: 'images/units/un-ls.png',
        url: 'lagoaseca.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/1/site/0GaE9Ux52vXSBHXLH2E5hg%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22h Sábado - 8h às 16h Domingo - 9h às 13h',
        cidade: 'JUAZEIRO DO NORTE',
        bairro: 'LAGOA SECA'
    }, 

    {
        nome: 'Unidade Crato - AABB',
        endereco: 'Avenida Leão Sampaio, 1771',
        img: 'images/units/un-aabb.jpg',
        url: 'cratoaabb.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/11/site/Q6%5BPLUS%5D7p3MhjcfNSGolg%5BPLUS%5DLSpA%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22h Sábado - 8h às 16h Domingo - 9h às 13h',
        cidade: 'CRATO',
        bairro: 'SAO MIGUEL'
    }, 
    
    {
        nome: 'Unidade Avenida',
        endereco: 'Avenida Leão Sampaio, 1771',
        img: 'images/units/un-matriz.jpeg',
        url: 'avenida.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/4/site/uRcgN1BLXvcYzmC%5BBAR%5DZHe3rg%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22h Sábado - 8h às 16h Domingo - 9h às 13h',
        cidade: 'ARARIPINA',
        bairro: 'CENTRO'
    },
    
    {
        nome: 'Unidade Matriz',
        endereco: 'Avenida Leão Sampaio, 1771',
        img: 'images/units/un-matriz.jpeg',
        url: 'matriz.php',
        urlPlan: 'https://evo-totem.w12app.com.br/academiafitnessexclusive/3/site/%5BPLUS%5DeIL%5BPLUS%5DfzZNcy7Gt%5BBAR%5DPl5KIrQ%5BEQUAL%5D%5BEQUAL%5D',
        time: 'Seg a Sex - 5h às 22h Sábado - 8h às 16h Domingo - 9h às 13h',
        cidade: 'ARARIPINA',
        bairro: 'CENTRO'
    },

    {
        nome: 'Unidade Tianguá',
        endereco: 'Em breve',
        img: 'images/units/un-matriz.jpeg',
        url: 'tiangua.php',
        urlPlan: '',
        time: 'Em breve',
        cidade: 'TIANGUA',
        bairro: 'CENTRO'
    },

]


// COLOCA A QUANTIDADE DE ACADEMIA QUE EXISTE
let gymLength = document.querySelector('.count-units .count');
gymLength.innerHTML = gyms.length;


// CRIANDO TODAS AS ACADEMIAS QUE ESTÃO NO OBJETO
const units = document.querySelector('.units');
function showUnits () {
    gyms.map((item, index) => {
        const unit = document.querySelector('.unit').cloneNode(true);
        unit.setAttribute('data-city', item.cidade);
        unit.setAttribute('data-bairro', item.bairro);
        
        unit.querySelector('img').src = item.img;
        unit.querySelector('h4').innerHTML = item.nome;
        unit.querySelector('p').innerHTML = item.endereco;
        unit.querySelector('.see-gym').href = item.url;
        unit.querySelector('.time').innerHTML = item.time;
        unit.querySelector('.see-plan').href = item.urlPlan;

        unit.style.display = 'block';
    
        units.append(unit);
    });
}

showUnits();


// FILTRANDO ACADEMIA PELO NOME DA CIDADE E BAIRRO
const inputTxt = document.querySelector('#gym');
const btnSearch = document.querySelector('#search');

btnSearch.addEventListener('click', () => {
    let gymCount = 0;
    units.innerHTML = ''
    showUnits();
    const inputValue = inputTxt.value.trim().toUpperCase();
    const getDataCity = units.querySelectorAll('.unit');
    console.log(inputValue);
    getDataCity.forEach((gym) => {
        const dataCity = gym.getAttribute('data-city');
        const dataBairro = gym.getAttribute('data-bairro');
        if (inputValue == '' && gymCount == 0) {
            units.innerHTML = '';
            showUnits();
        } else { 
            gym.style.display = 'none';
            if (inputValue === dataCity) {
                gym.style.display = 'block';
                gymCount += 1;
            } 
            if (inputValue === dataBairro) {
                gymCount += 1;
                gym.style.display = 'block';
            }
        }
        
    });    
    
    gymLength.innerHTML = gymCount;
    if (gymCount == 0) {
        units.innerHTML = 'Unidade não encontrada'
    }
    inputTxt.value = '';
});


const openFilter = document.querySelector('.open-filter-mobile');
const filters = document.querySelector('.filters');
openFilter.addEventListener('click', () => {
    if (filters.style.display == 'none') {
        filters.style.display = 'flex';
    } else {
        filters.style.display = 'none';
    }
});

const uni = document.querySelectorAll('.units .unit');
ballTheme.addEventListener('click', () => {
    uni.forEach((u) => {
        if (body.classList.contains('dark-mode')) {
            u.style.boxShadow = 'white 0px 0px 6px';
        } else {
            u.style.boxShadow = ' 0px 0px 6px 0px rgba(0, 0, 0, 0.5)';
        }
    });
});

// u.style.boxShadow = '1px 1px 1px white';
// 0px 0px 6px 0px rgba(0, 0, 0, 0.5)



