import SimpleParallax from "simple-parallax-js";

export default function initParallax(selector) {
  const parallaxTarget = document.querySelectorAll(selector);
  parallaxTarget.forEach((target) => {
    const parallax = new SimpleParallax(target, {
      delay: 0.5,
      transition: "cubic-bezier(0,0,0,1)",
    });
  });
}
