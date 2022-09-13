export default function apartaments_style_handle() {
	if (!document.querySelector("[data-list_style]")) return;

	console.log("--- Apartamenst Style Init ---");

	import(/* webpackChunkName: "print" */ "./apartaments_style_init").then(
		(module) => {
			const apartaments_style_init = module.default;
			apartaments_style_init();
		}
	);
}
