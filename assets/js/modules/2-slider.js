const Flickity = require("flickity");
const elm = document.querySelector("#carousel-container");

if (elm) {
	const flkty = new Flickity(elm, {
		cellAlign: 'left',
		contain: true,
		wrapAround: true,
		autoPlay: true,
		autoPlay: 2000
	});
}