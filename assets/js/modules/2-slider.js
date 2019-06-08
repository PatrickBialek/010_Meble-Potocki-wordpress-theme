const Flickity = require("flickity");
const elm = document.querySelector("#carousel-container");
const elm2 = document.querySelector("#products-carousel-container");

if (elm) {
	const flkty = new Flickity(elm, {
		cellAlign: 'left',
		contain: true,
		wrapAround: true,
		autoPlay: true,
		autoPlay: 2000
	});
}

if (elm2) {
	const flkty2 = new Flickity(elm2, {
		cellAlign: 'left',
		contain: true,
		wrapAround: true,
		autoPlay: true,
		autoPlay: 2000
	});
}