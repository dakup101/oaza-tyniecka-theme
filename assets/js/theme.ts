//Loaded
import SimpleParallax from "simple-parallax-js";

//Rendered
window.addEventListener("DOMContentLoaded", () => {
  parallaxInit(".parallax");
});

function parallaxInit(selector) {
  const parallaxTarget = document.querySelectorAll(selector);
  parallaxTarget.forEach((target) => {
    const parallax = new SimpleParallax(target, {
      delay: 0.5,
      transition: "cubic-bezier(0,0,0,1)",
    });
  });
}
