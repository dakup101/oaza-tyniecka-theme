//Loaded
console.log("--- Loaded ---");
import parallax_handle from "./sub/parallax_handle";
import scroll_handle from "./sub/scroll_handle";
import locations_handle from "./sub/locations_handle";
import multi_range_handle from "./sub/multi_range_handle";
import apartamentsHandle from "./sub/apartaments_handle";
import apartaments_style_handle from "./sub/apartaments_style_handle";
import search_handle from "./sub/search_handle";
import diary_handle from "./sub/diary_swiper_handle";
import overlay_init from "./sub/overlay_init";
import lightbox_init from "./sub/lightbox_init";

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
	overlay_init();
	lightbox_init();
});
