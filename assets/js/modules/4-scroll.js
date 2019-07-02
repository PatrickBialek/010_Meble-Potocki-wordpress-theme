import jump from 'jump.js';

const links = Array.from(document.querySelectorAll('#small-nav-items-list li a'));

function scrollHandler(e) {
	const link = e.target.href.split("#")[1],
		el = document.querySelector(`.${link}`);

	jump(el, {
		duration: 1000,
		offset: -150
	});
}

links.forEach(link => link.addEventListener("click", scrollHandler));