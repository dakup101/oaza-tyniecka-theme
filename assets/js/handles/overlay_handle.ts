export default function parallax_handle() {
	if (!document.querySelector("[data-lightbox_wrap]")) return;

	console.log("--- Site Overlay Init ---");

	import(/* webpackChunkName: "print" */ "../inits/overlay_init").then(
		(module) => {
			const overlay_init = module.default;
			overlay_init();
		}
	);
}
