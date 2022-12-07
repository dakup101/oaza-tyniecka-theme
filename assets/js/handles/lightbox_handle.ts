export default function parallax_handle() {
	if (!document.querySelector("[data-lightbox]")) return;

	console.log("--- Lightbox Init ---");

	import(/* webpackChunkName: "print" */ "../inits/lightbox_init").then(
		(module) => {
			const lightbox_init = module.default;
			lightbox_init();
		}
	);
}
