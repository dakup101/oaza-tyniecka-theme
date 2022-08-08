//Loaded
console.log("--- Loaded ---");
import parallax_handle from "./sub/parallax_handle";
import scroll_handle from "./sub/scroll_handle";
import locations_handle from "./sub/locations_handle";
import L from "leaflet";
import "leaflet/dist/leaflet.css";

//Rendered
window.addEventListener("DOMContentLoaded", () => {
  console.log("--- Rendered ---");
  parallax_handle();
  scroll_handle();
  locations_handle();
  if (document.querySelector(".map")) {
    let tilesLayer = L.tileLayer(
      "https://maps.omniscale.net/v2/oaza-tyniecka-41b82192/style.grayscale/{z}/{x}/{y}.png ",
      {
        attribution:
          "Tiles by <a href='https://maps.omniscale.com/en/'>Omniscale</a>",
      }
    );
    let map = L.map("map", {
      zoomControl: true,
      layers: [tilesLayer],
      maxZoom: 18,
      minZoom: 12,
      scrollWheelZoom: false,
    }).setView([50.06465, 19.94552], 13);

    let oazaIcon = L.icon({
      iconUrl:
        "https://oaza.local/wp-content/themes/oaza-tyniecka-theme/assets/img/yellow_pin.svg",
      iconSize: [35, 52.5],
      iconAnchor: [17.5, 52],
      popupAnchor: [0, -30],
    });

    let oazaIcon2 = L.icon({
      iconUrl:
        "https://oaza.local/wp-content/themes/oaza-tyniecka-theme/assets/img/oaza-mapa.svg",
      iconSize: [50, 50],
      iconAnchor: [25, 25],
    });
    let cords = [
      [50.05187, 19.89938, oazaIcon],
      [50.06465, 19.94552, oazaIcon],
      [50.08258, 19.89608, oazaIcon2],
    ];

    cords.forEach((location) => {
      let marker = L.marker([location[0], location[1]], {
        icon: location[2],
      }).addTo(map);
      marker.bindPopup("Gówno jebane");
    });
  }
});
