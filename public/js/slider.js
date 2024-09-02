const slider = document.querySelectorAll('.slider')
const texto = document.querySelectorAll('.texto')
const punto = document.querySelectorAll('.punto')
const BtnAnt = document.getElementById('botonanterior')
const BtnSig = document.getElementById('botonsiguiente')
const BtnAntMob = document.getElementById('mobilebotonanterior')
const BtnSigMob = document.getElementById('mobilebotonsiguiente')

let currentSlide = 0;

let enCooldown = false;
const cooldownTime = 200;

const intervalo = 11000;
let intervalotimer = intervalo; 
let intervalID; 

function startInterval() {
    intervalID = setInterval(function () {
        nextSlider();
    }, intervalotimer);
}

startInterval();

function updateInterval(newInterval) {
    clearInterval(intervalID);
    intervalotimer = newInterval;
    startInterval();
}

function hideslider() {
    slider.forEach(item => item.classList.remove('slideron'))
    texto.forEach(item => item.classList.remove('textoon'))
    punto.forEach(item => item.classList.remove('puntoon'))
}

function showslider() {
    slider[currentSlide].classList.add('slideron')
    texto[currentSlide].classList.add('textoon')
    punto[currentSlide].classList.add('puntoon')
}

function nextSlider() {
    if (enCooldown) return
    startCooldown()
    hideslider()
    if (currentSlide === slider.length - 1) {
        currentSlide = 0
    } else {
        currentSlide = currentSlide + 1
    }
    updateInterval(intervalo);
    showslider()
}

function prevSlider() {
    if (enCooldown) return
    startCooldown()
    hideslider()
    if (currentSlide === 0) {
        currentSlide = slider.length - 1
    } else {
        currentSlide = currentSlide - 1
    }
    updateInterval(intervalo);
    showslider()
}

function puntoSlider(index) {
    if (enCooldown) return
    startCooldown()
    hideslider();
    currentSlide = index;
    updateInterval(intervalo);
    showslider();
}

function startCooldown() {
    enCooldown = true;
    setTimeout(() => {
        enCooldown = false;
    }, cooldownTime);
}

BtnSig.addEventListener('click', nextSlider)
BtnAnt.addEventListener('click', prevSlider)

BtnSigMob.addEventListener('click', nextSlider)
BtnAntMob.addEventListener('click', prevSlider)

punto.forEach((item, index) => {
    item.addEventListener('click', () => puntoSlider(index));
});