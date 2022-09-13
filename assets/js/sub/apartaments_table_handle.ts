export default function locations_handle() {
	console.log("--- Apartaments Table Init ---");

	import(/* webpackChunkName: "print" */ "./apartaments_table_init").then(
		(module) => {
			const apartaments_table_init = module.default;
			apartaments_table_init();
		}
	);
}
