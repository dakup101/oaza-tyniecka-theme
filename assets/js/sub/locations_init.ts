import { ajaxUrl } from "../globals";

export default function locations_init() {
  let locations = document.querySelectorAll("[data-location_id]");
  console.log(locations);
  locations.forEach((loc) => {
    loc.addEventListener("click", (e) => {
      e.preventDefault();
      let target = e.currentTarget as HTMLAnchorElement;
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
          console.log(json);
        });
    });
  });
}
