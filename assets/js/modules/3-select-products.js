const btns = Array.from(document.querySelectorAll('.services__button'));
const galleryItems = Array.from(document.querySelectorAll('.services__image-box'));

let filters = ["table", "cupboard", "chair"];

function filteringElements() {
	galleryItems.forEach(galleryItem => {
		const itemData = galleryItem.dataset.filter;

		if (filters.includes(itemData)) {
			galleryItem.style.display = "flex";
		} else {
			galleryItem.style.display = "none";
		}
	})
}

function selectItemFunction() {
	const btn = event.target;

	if (btn.classList.contains('active')) {
		btn.classList.remove('active');

		const filter = btn.dataset.filter;
		const index = filters.indexOf(filter);

		if (index > -1) {
			filters.splice(index, 1);
		}

		filteringElements(filters);
	} else {
		btn.classList.add('active');

		const filter = btn.dataset.filter;
		filters.push(filter);

		filteringElements(filters);
	}
}

btns.forEach(btn => btn.addEventListener('click', selectItemFunction));