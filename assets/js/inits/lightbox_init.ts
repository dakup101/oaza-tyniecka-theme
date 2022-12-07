export default function lightbox_init() {
	let lboxes = document.querySelectorAll("[data-lightbox]");
	let overlay = document.querySelector(".site-overlay");
	let popup = document.querySelector(".lightbox__popup");
	Array.from(lboxes).forEach((el) => {
		el.addEventListener("click", (ev) => {
			let target = ev.currentTarget as HTMLElement;
			let img = target.children[0] as HTMLImageElement;
			let desc = img.alt;
			overlay.classList.add("show");
			setTimeout(() => {
				popup.classList.toggle("show");
				(popup.querySelector("[data-lightbox_image]") as HTMLImageElement).src =
					img.src;
				popup.querySelector(".lightbox__desc").innerHTML = desc;
			}, 200);
		});
	});
}
