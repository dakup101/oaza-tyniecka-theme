import { ajaxUrl, galleryConfig, htmlLoaderString } from "../globals";
import lightbox_handle from "./lightbox_handle";

export default async function gallery_fetch_init() {
	let galleryWrap = document.querySelector("[data-gallery]");
	let data = new FormData();
	data.append("action", "gallery_images");
	data.append("category", galleryConfig.category);
	data.append("phase", galleryConfig.phase);

	galleryWrap.innerHTML = htmlLoaderString;

	let htmlGallery = await fetch(ajaxUrl, {
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

	if (!htmlGallery) return;

	galleryWrap.innerHTML = htmlGallery as string;
	lightbox_handle();
}
