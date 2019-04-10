const navElements = Array.from(document.querySelectorAll('.header__nav ul li a')),
	hamburgerIcon = document.querySelector('#hamburger-icon'),
	header = document.querySelector('#website-main-header');

function markCurrentLink() {
	const currentHref = document.URL;

	navElements.forEach(navElement => {
		const href = navElement.href;

		if (currentHref == href) {
			navElement.classList.add('header__active');
		} else {
			navElement.classList.remove('header__active');
		}
	});
}

function mobileMenuHandler() {
	if (header.classList.contains("active")) {
		header.classList.remove("active");
	} else {
		header.classList.add("active");
	}
}

hamburgerIcon.addEventListener('click', mobileMenuHandler);
document.addEventListener('DOMContentLoaded', markCurrentLink);