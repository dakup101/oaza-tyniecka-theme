import L from "leaflet";
import "leaflet/dist/leaflet.css";
import { ajaxUrl } from "../globals";
import { manage_locations } from "./locations_init";

let tilesLayer = L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
	attribution:
		"Tiles by <a href='https://www.openstreetmap.org'>© OpenStreetMap</a>",
});

export const locMap = L.map("map", {
	zoomControl: true,
	layers: [tilesLayer],
	maxZoom: 18,
	minZoom: 12,
	scrollWheelZoom: false,
}).setView([50.05187, 19.89938], 13);

export const locationIcon = L.icon({
	iconUrl:
		"http://oaza-tyniecka.everywhere.pl//wp-content/themes/oaza-tyniecka-theme/assets/img/yellow_pin.svg",
	iconSize: [35, 52.5],
	iconAnchor: [17.5, 52],
	popupAnchor: [0, -30],
});

export const mainLocIcon = L.icon({
	iconUrl:
		"http://oaza-tyniecka.everywhere.pl//wp-content/themes/oaza-tyniecka-theme/assets/img/oaza-mapa.svg",
	iconSize: [50, 50],
	iconAnchor: [25, 25],
});

export const markerGroup = L.layerGroup().addTo(locMap);
export const mapLoader = document.querySelector("[data-map_loader]");

const data = new FormData();
