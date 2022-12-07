export default function apartaments_list_handle() {
	console.log("--- Apartaments List Init ---");

	import(/* webpackChunkName: "print" */ "../inits/apartaments_list_init").then(
		(module) => {
			const apartaments_list_init = module.default;
			apartaments_list_init();
		}
	);
}
