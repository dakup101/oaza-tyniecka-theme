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

  L.marker([50.05187, 19.89938], { icon: mainLocIcon }).addTo(locMap);

  locations.forEach((loc) => {
    loc.addEventListener("click", (e) => {
      e.preventDefault();
      locations.forEach((el) => {
        el.classList.remove("active-location");
      });
      mapLoader.classList.remove("hidden");
      let target = e.currentTarget as HTMLAnchorElement;
      target.classList.add("active-location");
      let locID = target.dataset.location_id;
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
}

export function manage_locations(locations) {
  resetMap();
  locations.forEach((location) => {
    let popupString =
      "<strong>" + location.name + "</strong><br/>" + location.desc;
    let marker = L.marker([location.x, location.y], {
      icon: locationIcon,
    }).addTo(markerGroup);
    marker.bindPopup(popupString);
    mapLoader.classList.add("hidden");
  });
}

export function resetMap() {
  markerGroup.eachLayer((layer) => {
    markerGroup.removeLayer(layer);
  });
}
