export default function locations_handle() {
  if (!document.querySelector("[data-location_id]")) return;

  console.log("--- Locations Init ---");

  import(/* webpackChunkName: "print" */ "./locations_init").then((module) => {
    const locations_init = module.default;
    locations_init();
  });
}
