
const slider = (() => {
    

const sliderViewSlides = [...document.querySelectorAll('.slider--view__slides')],
    arrowLeft = document.querySelector('.slider--arrows__left'),
    arrowRight = document.querySelector('.slider--arrows__right'),
    sliderLength = sliderViewSlides.length;
    const time = 7000;
    const dots = [...document.querySelectorAll('.dots span')];
    let active = 0;
const slideMe = (sliderViewItems, isActiveItem) => {
 
    isActiveItem.classList.remove('is-active');
  
    sliderViewItems.classList.add('is-active');
  
    //sliderView.setAttribute('style', 'transform:translateX(-' + sliderViewItems.offsetLeft + 'px)');
}

const changeDot = () => {
    const activeDot = dots.findIndex(dot => dot.classList.contains('is-active'));
    dots[activeDot].classList.remove('is-active');
    dots[active].classList.add('is-active');
}


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
    active++;
    beforeSliding(1);
    if(active === sliderLength){
        active = 0;
    } else if (active < 0){
        active = sliderLength - 1;
    }
    changeDot();
   
   
   }
   let indexInterval = setInterval(changeSlide, time);

  

   const changeActive = () => {
    active++
    if(active === sliderLength){
        active = 0;
    } else if (active < 0){
        active = sliderLength - 1;
    }

    changeDot();
    indexInterval = setInterval(changeSlide, time);
}
const changeActiveBack = () => {
    active--
    if(active === sliderLength){
        active = 0;
    } else if (active < 0){
        active = sliderLength - 1;
    }

    changeDot();
    indexInterval = setInterval(changeSlide, time);
}


arrowRight.addEventListener('click', () => {
    clearInterval(indexInterval);
    changeDot();
    beforeSliding(1);
    changeActive();
});
arrowLeft.addEventListener('click', () => {
    clearInterval(indexInterval);
    changeDot();
    beforeSliding(0);
    changeActiveBack();
});

})(); 


// if (window.matchMedia("(max-width: 700px)").matches) {
//     alert("The viewport is less than, or equal to, 700 pixels wide")
//   } else {
//    alert(" The viewport is greater than 700 pixels wide")
//   }


export default slider;