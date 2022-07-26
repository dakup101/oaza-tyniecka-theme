//Loaded
console.log("--- Loaded ---");
import handleParallax from "./sub/handle-parallax";

//Rendered
window.addEventListener("DOMContentLoaded", () => {
  console.log("--- Rendered ---");
  handleParallax();
});
