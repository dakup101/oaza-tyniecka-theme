export default function scroll_handle() {
	if (!document.querySelector("[data-site_header]")) return;

	console.log("--- Scroll Init ---");

	import(/* webpackChunkName: "print" */ "../inits/scroll_init").then(
		(module) => {
			const scroll_init = module.default;
			scroll_init();
		}
	);
}
