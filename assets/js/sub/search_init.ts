import { ajaxUrl, htmlLoaderString } from "../globals";
import apartametsTablesEvents from "./apartaments_table_events";

export default async function search_init() {
	let searchBtn = document.querySelector("[data-filter]") as HTMLButtonElement;
	searchBtn.addEventListener("click", async (ev) => {
		ev.preventDefault();
		let metersWrap = document.querySelector(".filters__sliders--item.meters");
		let priceWrap = document.querySelector(".filters__sliders--item.price");
		let listWrapper = document.querySelector("[data-apartaments]");
		let curStyle = listWrapper.getAttribute("data-apartaments");

		let minMeters = (
			metersWrap.querySelector("[data-lower]") as HTMLInputElement
		).value;
		let maxMeters = (
			metersWrap.querySelector("[data-upper]") as HTMLInputElement
		).value;

		let minPrice = (priceWrap.querySelector("[data-lower]") as HTMLInputElement)
			.value;
		let maxPrice = (priceWrap.querySelector("[data-upper]") as HTMLInputElement)
			.value;

		let action = curStyle == "table" ? "apartaments_table" : "apartaments_list";

		let tableWrap = document.querySelector("[data-apartaments]") as HTMLElement;
		let amount = tableWrap.getAttribute("data-amount");
		tableWrap.innerHTML = htmlLoaderString;
		console.log({ minMeters, maxMeters, minPrice, maxPrice });

		let data = new FormData();
		data.append("action", action);
		data.append("amount", amount);
		data.append("minMeters", minMeters);
		data.append("maxMeters", maxMeters);
		data.append("minPrice", minPrice);
		data.append("maxPrice", maxPrice);

		let htmlTable = await fetch(ajaxUrl, {
			method: "POST",
			body: data,
			credentials: "same-origin",
		})
			.then((response) => {
				if (!response.ok)
					throw new Error("Didn't fetch apartaments table. Check data");
				return response.text();
			})
			.then((text) => {
				return text;
			})
			.catch((err) => console.log(err));

		if (!htmlTable) return;

		tableWrap.innerHTML = htmlTable as string;
		if (curStyle == "table") apartametsTablesEvents();
	});
}
