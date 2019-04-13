const slider = (() => {


const sliderViewSlides = [...document.querySelectorAll('.slider--view__slides')],
    arrowLeft = document.querySelector('.slider--arrows__left'),
    arrowRight = document.querySelector('.slider--arrows__right'),
    sliderLength = sliderViewSlides.length;
    const time = 5000;

const slideMe = (sliderViewItems, isActiveItem) => {
 
    isActiveItem.classList.remove('is-active');
  
    sliderViewItems.classList.add('is-active');
   
    //sliderView.setAttribute('style', 'transform:translateX(-' + sliderViewItems.offsetLeft + 'px)');
}

// if (window.matchMedia("(max-width: 700px)").matches) {
//     alert("The viewport is less than, or equal to, 700 pixels wide")
//   } else {
//    alert(" The viewport is greater than 700 pixels wide")
//   }

const beforeSliding = i => {
    let isActiveItem = document.querySelector('.slider--view__slides.is-active'),
        currentItem = sliderViewSlides.indexOf(isActiveItem) + i,
        nextItem = currentItem + i,
        sliderViewItems = document.querySelector(`.slider--view__slides:nth-child(${nextItem})`);

    if (nextItem > sliderLength) {
        sliderViewItems = document.querySelector('.slider--view__slides:nth-child(1)');
    }

    if (nextItem == 0) {
        sliderViewItems = document.querySelector(`.slider--view__slides:nth-child(${sliderLength})`);
    }

    slideMe(sliderViewItems, isActiveItem);
}
const changeSlide = () => {
    beforeSliding(1);
   }
   let indexInterval = setInterval(changeSlide, time);

   let active = 0;

   const changeActive = () => {
    if(active === sliderLength){
        active = 0;
    } else if (active < 0){
        active = sliderLength - 1;
    }
    indexInterval = setInterval(changeSlide, time);
}


arrowRight.addEventListener('click', () => {
    clearInterval(indexInterval);
    beforeSliding(1);
    changeActive();
});
arrowLeft.addEventListener('click', () => {
    clearInterval(indexInterval);
    beforeSliding(0);
    changeActive();
});

})(); 

export default slider;