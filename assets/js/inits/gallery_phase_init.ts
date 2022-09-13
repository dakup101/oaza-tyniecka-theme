import { galleryConfig } from "../globals";
import gallery_fetch_init from "./gallery_fetch_init";

export default function gallery_phase_init() {
	let phases = document.querySelectorAll("[data-phase]");
	Array.from(phases).forEach((phase) => {
		phase.addEventListener("click", (ev) => {
			ev.preventDefault();
			Array.from(phases).forEach((el) => {
				el.classList.remove("text-3xl");
				el.classList.remove("text-yellow");
				el.classList.add("text-lg");
				el.classList.add("text-dark");
			});
			let target = ev.currentTarget as HTMLElement;
			target.classList.add("text-3xl");
			target.classList.add("text-yellow");
			target.classList.remove("text-lg");
			target.classList.remove("text-dark");
			let curPhase = target.getAttribute("data-phase");
			galleryConfig.phase = curPhase;
			gallery_fetch_init();
		});
	});
}
