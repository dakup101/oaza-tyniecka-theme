export default function site_overlay_init() {
	const siteOverlay = document.querySelector(".site-overlay");
	let info = document.getElementById("overlayInfo");
	let left: number, top: number;

	siteOverlay.addEventListener("click", (e) => {
		let overlay = e.currentTarget as HTMLElement;
		if ((e.target as HTMLElement).contains(overlay)) {
			for (let el of document.querySelectorAll(".show")) {
				el.classList.remove("show");
			}
		}
	});

	siteOverlay.addEventListener("mousemove", (e) => {
		left = (e as MouseEvent).clientX;
		top = (e as MouseEvent).clientY;
		info.style.opacity = "1";
		info.style.left = left + "px";
		info.style.top = top + "px";
	});

	siteOverlay.addEventListener("mouseout", () => {
		info.style.opacity = "0";
	});

	document
		.querySelector(".lightbox__popup--close")
		.addEventListener("click", (e) => {
			(siteOverlay as HTMLElement).click();
		});
}
