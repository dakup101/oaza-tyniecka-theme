export default function scroll_init() {
  document.addEventListener("scroll", () => {
    // Site Header
    let siteHeader = document.querySelector("[data-site_header]");
    let scrollPosition = window.scrollY;
    let scrollIcon = document.querySelector("[data-scroll_icon]");
    if (scrollPosition >= 100) {
      siteHeader.classList.add("scrolled");
      if (scrollIcon) scrollIcon.classList.add("opacity-0");
    } else {
      if (scrollIcon) scrollIcon.classList.remove("opacity-0");
      siteHeader.classList.remove("scrolled");
    }
  });
}
