export default function scroll_init() {
  document.addEventListener("scroll", () => {
    // Site Header
    let siteHeader = document.querySelector("[data-site_header]");
    let scrollPosition = window.scrollY;
    if (scrollPosition >= 30) siteHeader.classList.add("scrolled");
    else siteHeader.classList.remove("scrolled");
  });
}
