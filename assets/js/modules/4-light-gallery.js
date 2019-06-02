const lightGallery = require('lightgallery.js')

console.log(lightGallery);

const lightGalleryContainer = document.querySelector('#light-gallery-container');

lightGalleryContainer.lightGallery({
		thumbnail: true
	)
};