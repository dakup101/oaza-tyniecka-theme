import apartamentsTableHandle from "./apartaments_table_handle";
import apartamentsListHandle from "./apartaments_list_handle";

export default function apartamentsHandle() {
	if (!document.querySelector("[data-apartaments]")) return;
	console.log("--- Apartaments Handle ---");
	let showType = document
		.querySelector("[data-apartaments]")
		.getAttribute("data-apartaments");
	switch (showType) {
		case "table":
			apartamentsTableHandle();
			break;
		case "list":
			apartamentsListHandle();
			break;
		default:
			console.log("!-- Apartaments display error --!");
			break;
	}
}
