import Swiper, { Navigation } from "swiper";
import "swiper/css/bundle";
Swiper.use([Navigation]);

import { galleryConfig, ajaxUrl } from "./globals";

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
	houseInfos();

	let mobileMenuBtn = document.querySelector("[data-nav_mobile_open]");
	let mobileMenuClose = document.querySelector("[data-nav_mobile_close]");
	let mobileMenuWrap = document.querySelector("[data-nav_mobile]");

	mobileMenuBtn.addEventListener("click", (ev) => {
		ev.preventDefault();
		mobileMenuWrap.classList.add("active");
	});

	mobileMenuClose.addEventListener("click", (ev) => {
		ev.preventDefault();
		mobileMenuWrap.classList.remove("active");
	});
});

window.addEventListener("click", (ev) => {
	console.log(ev.target);
	house_info_remover(ev.target);
});

window.addEventListener("touchstart", (ev) => {
	house_info_remover(ev.target);
});

function house_info_remover(target) {
	if (target.classList.contains("house-picker")) return;

	let houseTriggers = document.querySelectorAll(".house-picker__info-card");
	if (!houseTriggers) return;

	Array.from(houseTriggers).forEach((card) => {
		cardHide(card);
	});
}

function gallery_cats_swiper_init() {
	let currentCategory = null;
	let currentPhase = null;

	const swiper = new Swiper(".gallery-cats", {
		// Optional parameters
		direction: "horizontal",
		loop: true,
		slidesPerView: 1,
		centeredSlides: false,
		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		slideToClickedSlide: true,
		breakpoints: {
			991: {
				slidesPerView: 3,
				centeredSlides: true,
			},
		},
	});

	swiper.on("slideChange", (ev) => {
		let currentSlide = swiper.slides[swiper.realIndex];
		let btn = currentSlide.querySelector("[data-category]");
		galleryConfig.category = btn.getAttribute("data-category");
		gallery_fetch_init();
	});
}

function houseInfos() {
	let houseTriggers = document.querySelectorAll("[data-house_info]");
	if (!houseTriggers) return;

	Array.from(houseTriggers).forEach((el) => {
		el.addEventListener("click", async (ev: MouseEvent) => {
			let target = ev.currentTarget as HTMLElement,
				house = target.getAttribute("data-house_info"),
				pageX = ev.pageX,
				pageY = ev.pageY - 45,
				activeCards = document.querySelectorAll(".house-picker__info-card");

			Array.from(activeCards).forEach((card) => {
				cardHide(card);
			});

			let divCard = document.createElement("div");
			divCard.classList.add("house-picker__info-card");
			divCard.innerHTML = "Ładuję dom...";
			divCard.style.position = "absolute";
			divCard.style.transform = "translate(-50%, -100%)";
			divCard.style.left = pageX + "px";
			divCard.style.top = pageY + "px";
			console.log(divCard);
			document.body.appendChild(divCard);
			cardShow(divCard);
			fetchHouseInfo(house, divCard, pageX, pageY);
		});
	});
}

function cardHide(card) {
	card.classList.add("hiding");
}

function cardShow(card) {
	card.classList.add("showing");
}

async function fetchHouseInfo(tileId, card, pageX, pageY) {
	let data = new FormData();
	data.append("action", "apartaments_info");
	data.append("tile_id", tileId);

	let htmlHouseInfo = await fetch(ajaxUrl, {
		method: "POST",
		body: data,
		credentials: "same-origin",
	})
		.then((response) => {
			if (!response.ok)
				throw new Error("Didn't fetch apartaments table. Check data");
			return response.text();
		})
		.then((text) => {
			return text;
		})
		.catch((err) => console.log(err));

	if (!htmlHouseInfo) return;

	card.innerHTML = htmlHouseInfo as string;
	card.style.left = pageX + "px";
	card.style.top = pageY + "px";
}
