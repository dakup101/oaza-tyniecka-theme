import manageRange from "../sub/multi_range_manage_range";
import stepper from "../sub/multi_range_stepper";

export default function multiRange() {
	let meters = {
		lowerVal: null,
		upperVal: null,
	};
	let price = {
		lowerVal: null,
		upperVal: null,
	};

	let multiRanges = document.querySelectorAll("[data-multi_range]");

	Array.from(multiRanges).forEach((el) => {
		let lower = el.querySelector("[data-lower]") as HTMLInputElement;
		let upper = el.querySelector("[data-upper]") as HTMLInputElement;
		let lefty = el.querySelector("[data-min]") as HTMLElement;
		let righty = el.querySelector("[data-max]") as HTMLElement;
		let lowerValue = parseInt(lower.value);
		let upperValue = parseInt(upper.value);
		let range = parseInt(upper.max) - parseInt(lower.min);
		let stepsLeft = 0;
		let stepsRight = 0;
		let thisType = parseInt(upper.dataset.type);
		manageRange(thisType, lowerValue, upperValue, meters, price);
		// Sliders on mous up
		upper.onmouseup = makeSearch;
		lower.onmouseup = makeSearch;
		// Sliders on input
		upper.oninput = () => {
			if (upperValue < parseInt(upper.value)) stepsRight--;
			else stepsRight++;
			upperValue = parseInt(upper.value);
			stepper(righty, upperValue, 0, parseInt(upper.max) - upperValue, range);
			stepper(lefty, lowerValue, 1, lowerValue - parseInt(lower.min), range);
			if (upperValue < lowerValue + 1) {
				lower.value = (upperValue - 1).toString();
				lowerValue = parseInt(lower.value);
				stepper(lefty, lowerValue, 1, upperValue - parseInt(upper.min), range);
			}
			manageRange(thisType, lowerValue, upperValue, meters, price);
		};
		lower.oninput = () => {
			if (parseInt(lower.value) > lowerValue) stepsLeft++;
			else stepsLeft--;
			lowerValue = parseInt(lower.value);
			stepper(lefty, lowerValue, 1, lowerValue - parseInt(lower.min), range);
			stepper(righty, upperValue, 0, parseInt(upper.max) - upperValue, range);
			if (lowerValue > upperValue - 1) {
				upper.value = (upperValue + 1).toString();
				upperValue = parseInt(upper.value);
				stepper(righty, upperValue, 0, upperValue, range);
			}
			manageRange(thisType, lowerValue, upperValue, meters, price);
		};
	});
}

function makeSearch() {
	console.log("--- Search Apartaments ---");
}
