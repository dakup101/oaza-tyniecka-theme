import Parallax from "scroll-parallax";
//Loaded
function parallaxInit(selectors) {
  selectors.forEach((el) => {
    // const parallaxContainer = document.querySelector(el);
    const parallaxInstance = new Parallax(el, {
      offsetYBounds: 50,
      intensity: 30,
      center: 0.5,
      safeHeight: 0.15,
    });
    parallaxInstance.init();
  });
}
//Rendered
window.addEventListener("DOMContentLoaded", () => {
  parallaxInit([".gawno"]);
});
