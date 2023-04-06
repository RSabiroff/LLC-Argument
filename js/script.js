'use strict';


/* ОТКРЫТИЕ МЕНЮ-БУРГЕРА */
document.querySelector('.header__burger').onclick = function() {
	document.querySelector('.header__burger-items').style.display = 'flex';
	document.body.style.overflow = 'hidden';
};



/* ЗАКРЫТИЕ МЕНЮ-БУРГЕРА ПРИ НАЖАТИИ НА КРЕСТИК */
document.querySelector('.burger__close').onclick = function(e) {
	e.stopPropagation();

	document.querySelector('.header__burger-items').style.display = 'none';
	document.body.style.overflow = '';
};



/* ЗАКРЫТИЕ МЕНЮ-БУРГЕРА ПРИ НАЖАТИИ НА ПУНКТ МЕНЮ */
document.querySelectorAll('.header__burger-items a').forEach(function (item) {
	item.onclick = function(e) {
		e.stopPropagation();
		
		document.querySelector('.header__burger-items').style.display = 'none';
		document.body.style.overflow = '';
	};
});



/* ОТКРЫТИЕ ПОПАПА */
let popupOpen = function() {
	document.querySelector('.popup-wrapper').style.display = 'flex';
	document.body.style.overflow = 'hidden';
};



/* ОТКРЫТИЕ ПОПАПА ИЗ ХЕДЕРА */
document.querySelector('.header__button').onclick = function() {
	popupOpen();
};



/* ЗАКРЫТИЕ ПОПАПА */
document.querySelector('.popup__close').onclick = function() {
	document.querySelector('.popup-wrapper').style.display = 'none';
	document.body.style.overflow = '';
};



/* ПЕРЕКЛЮЧЕНИЕ КАРТИНОК */
document.querySelectorAll('.services__mini-images img').forEach(function (item) {
	item.onclick = function() {
		document.querySelector('.services__mini-images_active').className = '';
		
		document.querySelector('.services__big-image img').src = item.src;
		
		item.parentElement.classList.add('services__mini-images_active');
	};
});



/* ЛЕВАЯ СТРЕЛОЧКА У СЛАЙДЕРА */
document.querySelector('.services__left-arrow').onclick = function() {
	let activeImage = document.querySelector('.services__mini-images_active');

	if (activeImage != activeImage.parentElement.firstElementChild) {
		activeImage.className = '';

		document.querySelector('.services__big-image img').src = activeImage.previousElementSibling.firstElementChild.src;

		activeImage.previousElementSibling.classList.add('services__mini-images_active');
	}
};



/* ПРАВАЯ СТРЕЛОЧКА У СЛАЙДЕРА */
document.querySelector('.services__right-arrow').onclick = function() {
	let activeImage = document.querySelector('.services__mini-images_active');

	if (activeImage != activeImage.parentElement.lastElementChild) {
		activeImage.className = '';

		document.querySelector('.services__big-image img').src = activeImage.nextElementSibling.firstElementChild.src;

		activeImage.nextElementSibling.classList.add('services__mini-images_active');
	}
};



/* ОТКРЫТИЕ ПОПАПА ИЗ УСЛУГ */
document.querySelector('.services__button-inner').onclick = function() {
	popupOpen();
};








