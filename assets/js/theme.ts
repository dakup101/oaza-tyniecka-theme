//Loaded
console.log("--- Loaded ---");
import parallax_handle from "./sub/parallax_handle";
import scroll_handle from "./sub/scroll_handle";

//Rendered
window.addEventListener("DOMContentLoaded", () => {
  console.log("--- Rendered ---");
  parallax_handle();
  scroll_handle();
});
