
const slider = (() => {
    
const sliderViewSlides = [...document.querySelectorAll('.slider--view__slides')];
const sliderLength = sliderViewSlides.length;
const dots = [...document.querySelectorAll('.dots span')];
const arrowLeft = document.querySelector('.slider--arrows__left');
const arrowRight = document.querySelector('.slider--arrows__right');

const time = 999999000;
let active = 0;

const changeSlide = () => {
    const activeSlide = sliderViewSlides.findIndex(slide => slide.classList.contains('is-active'));
    sliderViewSlides[activeSlide].classList.remove('is-active');
    sliderViewSlides[active].classList.add('is-active');
}

const changeDot = () => {
    const activeDot = dots.findIndex(dot => dot.classList.contains('is-active'));
    dots[activeDot].classList.remove('is-active');
    dots[active].classList.add('is-active');
}

const goSlider = () => {
    active++;
    if(active === sliderLength){
        active = 0;
    } 
    changeSlide();
    changeDot(); 
}
let indexInterval = setInterval(goSlider, time);

const changeActive = () => {
    active++
    if(active === sliderLength){
        active = 0;
    } else if (active < 0){
        active = sliderLength - 1;
    }
    changeSlide();
    changeDot();
    indexInterval = setInterval(goSlider, time);
}

const changeActiveBack = () => {
    active--
    if(active === sliderLength){
        active = 0;
    } else if (active < 0){
        active = sliderLength - 1;
    }
    changeSlide();
    changeDot();
    indexInterval = setInterval(goSlider, time);
}

arrowRight.addEventListener('click', () => {
    clearInterval(indexInterval);
    changeActive();
});

arrowLeft.addEventListener('click', () => {
    clearInterval(indexInterval);
    changeActiveBack();
});


})(); 

export default slider;