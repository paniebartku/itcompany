const addClasses = (() => {

    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', ()=>{
    let offset = window.pageYOffset;
    if(offset > 50){
        navbar.classList.add('scrolled');
        navbar.classList.remove('scrolledAgain');
    } else {
        navbar.classList.remove('scrolled');
        navbar.classList.add('scrolledAgain');
    }
}); 


})();
 
export default addClasses;