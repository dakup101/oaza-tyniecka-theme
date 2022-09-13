import Swiper, { Navigation } from "swiper";
import "swiper/css/bundle";
Swiper.use([Navigation]);

import { galleryConfig } from "./globals";

//Loaded
console.log("--- Loaded ---");
import parallax_handle from "./handles/parallax_handle";
import scroll_handle from "./handles/scroll_handle";
import locations_handle from "./handles/locations_handle";
import multi_range_handle from "./handles/multi_range_handle";
import apartamentsHandle from "./handles/apartaments_handle";
import apartaments_style_handle from "./handles/apartaments_style_handle";
import search_handle from "./handles/search_handle";
import diary_handle from "./handles/diary_swiper_handle";
import overlay_handle from "./handles/overlay_handle";
import lightbox_handle from "./handles/lightbox_handle";

import gallery_fetch_init from "./inits/gallery_fetch_init";
import gallery_phase_init from "./inits/gallery_phase_init";

//Rendered
window.addEventListener("DOMContentLoaded", () => {
	console.log("--- Rendered ---");
	parallax_handle();
	scroll_handle();
	locations_handle();
	multi_range_handle();
	apartamentsHandle();
	apartaments_style_handle();
	search_handle();
	diary_handle();
	overlay_handle();
	lightbox_handle();
	gallery_cats_swiper_init();
	gallery_phase_init();
});

function gallery_cats_swiper_init() {
	let currentCategory = null;
	let currentPhase = null;

	const swiper = new Swiper(".gallery-cats", {
		// Optional parameters
		direction: "horizontal",
		loop: true,
		slidesPerView: 3,
		centeredSlides: true,
		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		slideToClickedSlide: true,
	});

	swiper.on("slideChange", (ev) => {
		let currentSlide = swiper.slides[swiper.realIndex];
		let btn = currentSlide.querySelector("[data-category]");
		galleryConfig.category = btn.getAttribute("data-category");
		gallery_fetch_init();
	});
}
