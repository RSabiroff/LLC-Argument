'use strict';


document.querySelectorAll('.services__mini-images img').forEach(function (item) {
	item.onclick = function() {
		document.querySelector('.services__mini-images_active').className = '';
		
		document.querySelector('.services__big-image img').src = item.src;
		
		item.parentElement.classList.add('services__mini-images_active');
	};
});


document.querySelector('.services__right-arrow').onclick = function() {
	let activeImage = document.querySelector('.services__mini-images_active');

	if (activeImage != activeImage.parentElement.lastElementChild) {
		activeImage.className = '';

		document.querySelector('.services__big-image img').src = activeImage.nextElementSibling.firstElementChild.src;

		activeImage.nextElementSibling.classList.add('services__mini-images_active');
	}
};


document.querySelector('.services__left-arrow').onclick = function() {
	let activeImage = document.querySelector('.services__mini-images_active');

	if (activeImage != activeImage.parentElement.firstElementChild) {
		activeImage.className = '';

		document.querySelector('.services__big-image img').src = activeImage.previousElementSibling.firstElementChild.src;

		activeImage.previousElementSibling.classList.add('services__mini-images_active');
	}
};
