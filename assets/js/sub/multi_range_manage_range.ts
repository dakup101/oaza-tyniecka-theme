export default function manageRange(
	type: number,
	lowerValue: number,
	upperValue: number,
	meters,
	price
) {
	switch (type) {
		case 0:
			meters.upperVal = upperValue;
			meters.lowerVal = lowerValue;
			break;
		case 1:
			price.upperVal = upperValue;
			price.lowerVal = lowerValue;
			break;
		default:
			console.log("ERR: Range sliders object switch insuficient case");
			break;
	}
}
