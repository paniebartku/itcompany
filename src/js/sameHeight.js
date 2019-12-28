const sameHeight = (() => {
  const blockquotes = [
    ...document.querySelectorAll(".block-cs__loop--blockquote")
  ];
  let tallest = 0;

  for (let i = 0; i < blockquotes.length; i++) {
    let element = blockquotes[i];
    let elementHeight = element.offsetHeight;
    tallest = elementHeight > tallest ? elementHeight : tallest;
  }
  for (let i = 0; i < blockquotes.length; i++) {
    blockquotes[i].style.height = tallest + "px";
  }

  window.addEventListener("resize", () => {
    if (window.innerWidth >= 991) {
      for (let i = 0; i < blockquotes.length; i++) {
        let element = blockquotes[i];
        element.style.height = "";
        let elementHeight = element.offsetHeight;

        tallest = elementHeight > tallest ? elementHeight : tallest;

        blockquotes[i].style.height = tallest + "px";
      }
    } else {
      for (let i = 0; i < blockquotes.length; i++) {
        blockquotes[i].style.height = "";
      }
    }
  });
})();

export default sameHeight;
