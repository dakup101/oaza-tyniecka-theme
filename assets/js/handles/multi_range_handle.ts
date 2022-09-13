export default function multi_range_handle() {
	if (!document.querySelector("[data-multi_range]")) return;

	console.log("--- Multi Range Init ---");

	import(/* webpackChunkName: "print" */ "../inits/multi_range_init").then(
		(module) => {
			const multi_range_init = module.default;
			multi_range_init();
		}
	);
}
