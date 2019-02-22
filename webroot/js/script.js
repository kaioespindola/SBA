// Código Slider //

new Swiper ('.swiper-container', {

    slidesPerView: 5,
    spaceBetween: 20,
    direction: 'horizontal',
    loop: false,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {

        1024: {
            slidesPerView: 4,
            spaceBetween: 30
        },

        780: {
            slidesPerView: 3,
            spaceBetween: 30
        },

        640: {
            slidesPerView: 2,
            spaceBetween: 15
        },

        320: {
            slidesPerView: 1,
            spaceBetween: 15
        }
    }
  
});

// Onscroll 

window.onscroll = function() {
    fixarmenu();
};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function fixarmenu() {

    if (window.pageYOffset > sticky) {

        header.classList.add("fixar-menu");

    } else {

        header.classList.remove("fixar-menu");

    }
}

// Função tocar logo para mobile //

let logo = document.getElementById("logo");

if (window.innerWidth < 500) {
    logo.classList = "logo-mobile";
    logo.innerHTML = "<center><img src='https://sba1.com/imgs/logo-mobile.png'></center>";
}

// Função Menu Desktop //

let aberto = 0;

function abrirMenu() {

    let icone = document.getElementById("icone-menu");
    let menu = document.getElementById("menu-dropdown");

    if(aberto === 0) {
        icone.classList = "fas fa-times animacao-entra";
        menu.style.display = "grid";
        aberto = 1;
    } else {
        icone.classList = "fas fa-bars animacao-sai";
        menu.style.display = "none";
        aberto = 0;
    }

}

// Função Pesquisa

function abrirPesquisa() {

    let pesquisa = document.getElementById("drop-pesquisar");

    if(aberto === 0) {
        pesquisa.style.display = "block";
        aberto = 1;
    } else {
        pesquisa.style.display = "none";
        aberto = 0;
    }

};

// Trocar Programação

let programacaocb = document.getElementById("programacaocb");
let programacaoac = document.getElementById("programacaoac");
let programacaocx = document.getElementById("programacaocx");
let programacaocm = document.getElementById("programacaocm");
 
function mudarProgramacao(canal) {

    if(canal == 'cb') {
        programacaocb.style.display = "grid";
        programacaoac.style.display = "none";
        programacaocx.style.display = "none";
        programacaocm.style.display = "none";
    }

    if(canal == 'ac') {
        programacaocb.style.display = "none";
        programacaoac.style.display = "grid";
        programacaocx.style.display = "none";
        programacaocm.style.display = "none";
    }

    if(canal == 'cx') {
        programacaocb.style.display = "none";
        programacaoac.style.display = "none";
        programacaocx.style.display = "grid";
        programacaocm.style.display = "none";
    }

    if(canal == 'cm') {
        programacaocb.style.display = "none";
        programacaoac.style.display = "none";
        programacaocx.style.display = "none";
        programacaocm.style.display = "grid";
    }

}

// Código Seletor de Canais //

let btnContainer = document.getElementById("seletor-canais");

let btns = btnContainer.getElementsByClassName("btn");

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

// Código teste player flutuante //

let playerFixo = document.getElementById("player");
let botaoFechar = document.getElementById("botao-fechar");

let ativado = true;

function fixarPlayer() {

    if(window.pageYOffset > sticky && ativado) {
        playerFixo.classList.add("fixar-player");
        botaoFechar.style.display = "grid";
    } else {
        playerFixo.classList.remove("fixar-player");
        botaoFechar.style.display = "none";
    }
    
};

function fecharPlayer() {

    ativado = false;
    playerFixo.classList.remove("fixar-player");

};