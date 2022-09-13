import sortTable from "./apartaments_table_sort";
import handleSortIcon from "./apartaments_table_icons";

export default function apartametsTablesEvents() {
	let table = document.querySelector("[data-sort_table]");
	if (!table) return;
	console.log("--- Table Events Loaded --");
	let cols = document.querySelectorAll("[data-sort]");
	Array.from(cols).forEach((el) => {
		let col = parseInt(el.getAttribute("data-sort"));
		el.addEventListener("click", (ev) => {
			ev.preventDefault();
			let dir = sortTable(col);
			let target = ev.currentTarget as HTMLElement;
			let icon = target.querySelector("[data-sort_icon]");
			handleSortIcon(icon, dir);
		});
	});
}
