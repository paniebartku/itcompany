const addClasses = (() => {
  const navbar = document.querySelector(".navbar");
  const upperInfo = document.querySelector(".upperinfo");

  window.addEventListener("scroll", () => {
    let offset = window.pageYOffset;
    if (offset > 50) {
      navbar.classList.add("scrolled");
      navbar.classList.remove("scrolledAgain");
      upperInfo.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
      navbar.classList.add("scrolledAgain");
      upperInfo.classList.remove("scrolled");
    }
  });
})();

export default addClasses;
