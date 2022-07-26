export default function parallax_handle() {
  let selector = ".parallax";
  if (!document.querySelectorAll(selector).length) return;

  console.log("--- Parallax Init ---");

  import(/* webpackChunkName: "print" */ "./parallax_init").then((module) => {
    const parallax_init = module.default;
    parallax_init(selector);
  });
}
