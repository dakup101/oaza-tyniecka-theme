import SimpleParallax, { IParallaxSettings } from "simple-parallax-js";

export default function parallax_init(selector) {
  const parallaxTarget = document.querySelectorAll(selector);

  parallaxTarget.forEach((target) => {
    const parallaxArgs: IParallaxSettings = {
      delay: target.dataset.delay,
      scale: target.dataset.scale,
      transition: target.dataset.transition,
      orientation: target.dataset.orientation,
      overflow: target.dataset.overflow == "1" ? true : false,
    };
    new SimpleParallax(target, parallaxArgs);
  });
}
