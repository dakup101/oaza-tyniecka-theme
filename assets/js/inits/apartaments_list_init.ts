import { ajaxUrl, htmlLoaderString } from "../globals";

export default async function init_list() {
	let tableWrap = document.querySelector("[data-apartaments]") as HTMLElement;
	let amount = tableWrap.getAttribute("data-amount");
	tableWrap.innerHTML = htmlLoaderString;

	let data = new FormData();
	data.append("action", "apartaments_list");
	data.append("amount", amount);
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
}
