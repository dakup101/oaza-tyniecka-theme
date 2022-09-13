export default function lightbox_init() {
	let lboxes = document.querySelectorAll("[data-lightbox]");
    let overlay document.querySelector(".site-overlay");
	Array.from(lboxes).forEach((el) => {
		el.addEventListener("click", () => {
			overlay.classList.add("show");
		});
	});
}
