export default function handleSortIcon(icon, dir) {
	let icons = document.querySelectorAll("[data-sort_icon]");
	Array.from(icons).forEach((sIcon) => {
		let paths = sIcon.children;
		Array.from(paths).forEach((el) => {
			(el as HTMLElement).classList.remove("fill-dark");
		});
	});

	let paths = icon.children;

	switch (dir) {
		case "asc":
			paths[0].classList.add("fill-dark");
			break;
		case "desc":
			paths[1].classList.add("fill-dark");
			break;
	}
}
