export default function search_handle() {
	if (!document.querySelector("[data-filter]")) return;

	console.log("--- Search Init ---");

	import(/* webpackChunkName: "print" */ "./search_init").then((module) => {
		const search_init = module.default;
		search_init();
	});
}
