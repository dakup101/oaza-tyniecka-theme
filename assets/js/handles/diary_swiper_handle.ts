export default function search_handle() {
	if (!document.querySelector("[data-diary]")) return;

	console.log("--- Diary Swiper Init ---");

	import(/* webpackChunkName: "print" */ "../inits/diary_swiper_init").then(
		(module) => {
			const diary_swiper_init = module.default;
			diary_swiper_init();
		}
	);
}
