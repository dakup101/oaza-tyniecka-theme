import apartamentsHandle from "./apartaments_handle";

export default function change_apartaments_style() {
	let styleChckbx = document.querySelector("[data-list_style]");
	let listWrapper = document.querySelector("[data-apartaments]");
	let curStyle = null;

	let cardsIcon = document.querySelector("[data-style_cards]");
	let listIcon = document.querySelector("[data-style_list]");

	styleChckbx.addEventListener("change", (ev) => {
		if ((ev.currentTarget as HTMLInputElement).checked) {
			listWrapper.setAttribute("data-apartaments", "table");
			curStyle = "table";
		} else {
			listWrapper.setAttribute("data-apartaments", "list");
			curStyle = "list";
		}

		switch (curStyle) {
			case "table":
				listIcon.classList.remove("text-gray");
				listIcon.classList.add("text-dark");
				listIcon.querySelector("[data-icon]").classList.add("fill-yellow");
				listIcon.querySelector("[data-icon]").classList.remove("fill-gray");

				cardsIcon.classList.add("text-gray");
				cardsIcon.classList.remove("text-dark");
				cardsIcon.querySelector("[data-icon]").classList.remove("fill-yellow");
				cardsIcon.querySelector("[data-icon]").classList.add("fill-gray");
				break;
			case "list":
				listIcon.classList.add("text-gray");
				listIcon.classList.remove("text-dark");
				listIcon.querySelector("[data-icon]").classList.remove("fill-yellow");
				listIcon.querySelector("[data-icon]").classList.add("fill-gray");

				cardsIcon.classList.remove("text-gray");
				cardsIcon.classList.add("text-dark");
				cardsIcon.querySelector("[data-icon]").classList.add("fill-yellow");
				cardsIcon.querySelector("[data-icon]").classList.remove("fill-gray");
				break;
			default:
				break;
		}

		// Fetch
		apartamentsHandle();
	});
}
