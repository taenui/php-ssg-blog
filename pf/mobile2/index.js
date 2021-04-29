console.clear();

const app = (() => {
	let body;
	let menu;
	let menuItems;

	const init = () => {
		body = document.querySelector('body');
		menu = document.querySelector('.menu-icon');
		menuItems = document.querySelectorAll('.nav__list-item');

		applyListeners();
	}

	const applyListeners = () => {
		menu.addEventListener('click', () => toggleClass(body, 'nav-active'));
	}

	const toggleClass = (element, stringClass) => {
		if (element.classList.contains(stringClass))
			element.classList.remove(stringClass);
		else
			element.classList.add(stringClass);
	}

	init();
})();



var swiper = new Swiper('.swiper-container-1', {
	direction: 'vertical',
	slidesPerView: 1,
	spaceBetween: 30,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.swiper-pagination-1',
		clickable: true,
	},
});