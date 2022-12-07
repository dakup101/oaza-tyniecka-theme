export default function stepper(
	target: HTMLElement,
	value: number,
	direction: number,
	steps: number,
	range: number
) {
	let transformation = (steps / range) * 100;
	if (direction == 0) {
		target.style.right = transformation + "%";
		target.style.transform = "translateX(" + transformation + "%)";
		console.log(transformation);
	} else {
		target.style.left = transformation + "%";
		target.style.transform = "translateX(-" + transformation + "%)";
		console.log(transformation);
	}
	target.innerHTML = value.toString();
	if (target.dataset.for == "meter") target.innerHTML += "m²";
}
