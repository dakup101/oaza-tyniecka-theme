export default function handleParallax() {
  let selector = ".parallax";
  if (!document.querySelectorAll(selector).length) return;

  console.log("--- Parallax Init ---");

  import(/* webpackChunkName: "print" */ "./init-parallax").then((module) => {
    const parallaxInit = module.default;
    parallaxInit(selector);
  });
}
