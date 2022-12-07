import Swiper, { Navigation } from "swiper";
import "swiper/css/bundle";

Swiper.use([Navigation]);

export default function diarySwiper() {
	const swiper = new Swiper(".swiper", {
		// Optional parameters
		direction: "horizontal",
		loop: false,
		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		spaceBetween: 35,
		centeredSlides: true,
		centeredSlidesBounds: true,
	});
}
