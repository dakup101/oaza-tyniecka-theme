import { ajaxUrl } from "../globals";
// Imports to separate map init and config from locations reload :P
import {
	locMap,
	mainLocIcon,
	locationIcon,
	markerGroup,
	mapLoader,
} from "./map_init";
import L from "leaflet";

export default function locations_init() {
	let locations = document.querySelectorAll("[data-location_id]");
	console.log(locations);
	resetMap();
	L.marker([50.05187, 19.89938], { icon: mainLocIcon }).addTo(locMap);

	Array.from(locations).forEach((loc) => {
		loc.addEventListener("click", (e) => {
			e.preventDefault();
			locations.forEach((el) => {
				el.classList.remove("active-location");
			});
			mapLoader.classList.remove("not-active");
			let target = e.currentTarget as HTMLAnchorElement;
			target.classList.add("active-location");
			let locID = target.dataset.location_id;
			console.log(locID);
			const data = new FormData();
			data.append("action", "fetch_locations");
			data.append("id", locID);

			fetch(ajaxUrl, {
				method: "POST",
				body: data,
				credentials: "same-origin",
			})
				.then((response) => response.json())
				.then((json) => {
					manage_locations(json);
				});
		});
	});

	(locations[0] as HTMLAnchorElement).click();
}

export function manage_locations(locations) {
	resetMap();
	if (!locations.length) {
		mapLoader.classList.add("not-active");
		return;
	}
	locations.forEach((location) => {
		let popupString =
			"<strong>" + location.name + "</strong><br/>" + location.desc;
		let marker = L.marker([location.x, location.y], {
			icon: locationIcon,
		}).addTo(markerGroup);
		marker.bindPopup(popupString);
		mapLoader.classList.add("not-active");
	});
}

export function resetMap() {
	markerGroup.eachLayer((layer) => {
		markerGroup.removeLayer(layer);
	});
}
