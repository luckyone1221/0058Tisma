"use strict";

let div = document.createElement('div');
div.style.overflowY = 'scroll';
div.style.width = '50px';
div.style.height = '50px'; // мы должны вставить элемент в документ, иначе размеры будут равны 0

document.body.append(div);
let scrollWidth = div.offsetWidth - div.clientWidth;
let root = document.documentElement;
root.style.setProperty('--spacing-end', scrollWidth + 'px');
div.remove();
const JSCCommon = {
	btnToggleMenuMobile: [].slice.call(document.querySelectorAll(".toggle-menu-mobile--js")),
	menuMobile: document.querySelector(".menu-mobile--js"),
	menuMobileLink: [].slice.call(document.querySelectorAll(".menu-mobile--js ul li a")),

	modalCall() {
		const link = ".link-modal-js";
		$(link).fancybox({
			arrows: false,
			infobar: false,
			touch: false,
			type: 'inline',
			autoFocus: false,
			i18n: {
				en: {
					CLOSE: "Закрыть",
					NEXT: "Вперед",
					PREV: "Назад" // PLAY_START: "Start slideshow",
					// PLAY_STOP: "Pause slideshow",
					// FULL_SCREEN: "Full screen",
					// THUMBS: "Thumbnails",
					// DOWNLOAD: "Download",
					// SHARE: "Share",
					// ZOOM: "Zoom"

				}
			} // beforeLoad: function () {
			// 	root.style.setProperty('--spacing-end', scrollWidth + 'px');
			// },
			// afterClose: function () {
			// 	root.style.setProperty('--spacing-end', null);
			// },

		});
		$(".modal-close-js").click(function () {
			$.fancybox.close();
		});
		$.fancybox.defaults.backFocus = false;
		const linkModal = document.querySelectorAll(link);

		function addData() {
			linkModal.forEach(element => {
				element.addEventListener('click', () => {
					let modal = document.querySelector(element.getAttribute("href"));
					const data = element.dataset;

					function setValue(val, elem) {
						if (elem && val) {
							const el = modal.querySelector(elem);
							el.tagName == "INPUT" ? el.value = val : el.innerHTML = val; // console.log(modal.querySelector(elem).tagName)
						}
					}

					setValue(data.title, '.ttu');
					setValue(data.text, '.after-headline');
					setValue(data.btn, '.btn');
					setValue(data.order, '.order');
				});
			});
		}

		if (linkModal) addData();
	},

	// /modalCall
	toggleMenu() {
		const toggle = this.btnToggleMenuMobile;
		const menu = this.menuMobile;
		document.addEventListener("click", function (event) {
			const toggleEv = event.target.closest(".toggle-menu-mobile--js");
			if (!toggleEv) return;
			toggle.forEach(el => el.classList.toggle("on"));
			menu.classList.toggle("active");
			[document.body, document.querySelector('html')].forEach(el => el.classList.toggle("fixed"));
		}, {
			passive: true
		});
	},

	closeMenu() {
		let menu = this.menuMobile;
		if (!menu) return;

		if (menu.classList.contains("active")) {
			this.btnToggleMenuMobile.forEach(element => element.classList.remove("on"));
			this.menuMobile.classList.remove("active");
			[document.body, document.querySelector('html')].forEach(el => el.classList.remove("fixed"));
		}
	},

	mobileMenu() {
		if (!this.menuMobileLink) return;
		this.toggleMenu();
		document.addEventListener('mouseup', event => {
			let container = event.target.closest(".menu-mobile--js.active"); // (1)

			let link = event.target.closest(".navMenu__link"); // (1)

			if (!container || link) this.closeMenu();
		}, {
			passive: true
		});
		window.addEventListener('resize', () => {
			if (window.matchMedia("(min-width: 1200px)").matches) this.closeMenu();
		}, {
			passive: true
		});
	},

	// /mobileMenu
	tabscostume(tab) {
		let tabs = {
			Btn: [].slice.call(document.querySelectorAll(".".concat(tab, "__btn"))),
			BtnParent: [].slice.call(document.querySelectorAll(".".concat(tab, "__caption"))),
			Content: [].slice.call(document.querySelectorAll(".".concat(tab, "__content")))
		};
		tabs.Btn.forEach((element, index) => {
			element.addEventListener('click', () => {
				if (!element.classList.contains('active')) {
					//turn off old
					let oldActiveEl = element.closest(".".concat(tab)).querySelector(".".concat(tab, "__btn.active"));
					let oldActiveContent = tabs.Content[index].closest(".".concat(tab)).querySelector(".".concat(tab, "__content.active"));
					oldActiveEl.classList.remove('active');
					oldActiveContent.classList.remove('active'); //turn on new(cklicked el)

					element.classList.add('active');
					tabs.Content[index].classList.add('active');
				}
			});
		});
	},

	inputMask() {
		// mask for input
		let InputTel = [].slice.call(document.querySelectorAll('input[type="tel"]'));
		InputTel.forEach(element => element.setAttribute("pattern", "[+][0-9]{1}[(][0-9]{3}[)][0-9]{3}-[0-9]{2}-[0-9]{2}"));
		Inputmask("+9(999)999-99-99").mask(InputTel);
	},

	ifie() {
		var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;

		if (isIE11) {
			document.body.insertAdjacentHTML("beforeend", '<div class="browsehappy">	<p class=" container">К сожалению, вы используете устаревший браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите ваш браузер</a>, чтобы улучшить производительность, качество отображаемого материала и повысить безопасность.</p></div>');
		}
	},

	sendForm() {
		var gets = function () {
			var a = window.location.search;
			var b = new Object();
			var c;
			a = a.substring(1).split("&");

			for (var i = 0; i < a.length; i++) {
				c = a[i].split("=");
				b[c[0]] = c[1];
			}

			return b;
		}(); // form


		$(document).on('submit', "form", function (e) {
			e.preventDefault();
			const th = $(this);
			var data = th.serialize();
			th.find('.utm_source').val(decodeURIComponent(gets['utm_source'] || ''));
			th.find('.utm_term').val(decodeURIComponent(gets['utm_term'] || ''));
			th.find('.utm_medium').val(decodeURIComponent(gets['utm_medium'] || ''));
			th.find('.utm_campaign').val(decodeURIComponent(gets['utm_campaign'] || ''));
			$.ajax({
				url: 'action.php',
				type: 'POST',
				data: data
			}).done(function (data) {
				$.fancybox.close();
				$.fancybox.open({
					src: '#modal-thanks',
					type: 'inline'
				}); // window.location.replace("/thanks.html");

				setTimeout(function () {
					// Done Functions
					th.trigger("reset"); // $.magnificPopup.close();
					// ym(53383120, 'reachGoal', 'zakaz');
					// yaCounter55828534.reachGoal('zakaz');
				}, 4000);
			}).fail(function () {});
		});
	},

	heightwindow() {
		// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
		let vh = window.innerHeight * 0.01; // Then we set the value in the --vh custom property to the root of the document

		document.documentElement.style.setProperty('--vh', "".concat(vh, "px")); // We listen to the resize event

		window.addEventListener('resize', () => {
			// We execute the same script as before
			let vh = window.innerHeight * 0.01;
			document.documentElement.style.setProperty('--vh', "".concat(vh, "px"));
		}, {
			passive: true
		});
	}

};
const $ = jQuery;

function eventHandler() {
	JSCCommon.ifie();
	JSCCommon.modalCall();
	JSCCommon.tabscostume('tabs');
	JSCCommon.mobileMenu();
	JSCCommon.inputMask();
	JSCCommon.sendForm();
	JSCCommon.heightwindow();

	function setFixedNav() {
		let topNav = document.querySelector('.top-nav  ');
		if (!topNav) return;
		window.scrollY > 0 ? topNav.classList.add('fixed') : topNav.classList.remove('fixed');
	}

	function whenResize() {
		setFixedNav();
	}

	window.addEventListener('scroll', () => {
		setFixedNav();
	}, {
		passive: true
	});
	window.addEventListener('resize', () => {
		whenResize();
	}, {
		passive: true
	});
	whenResize(); // modal window
	//luckyone Js

	let sFeedBackSlider = new Swiper('.sFeedBack-slider-js', {
		loop: true,
		slidesPerView: 'auto',
		spaceBetween: 34,
		navigation: {
			nextEl: '.sFeedBack-next-js',
			prevEl: '.sFeedBack-prev-js'
		}
	});
	$('.faq-btn-js').click(function () {
		$(this).slideUp(function () {});
		$(this).closest('.faq-item-js').find('.faq-question-js').addClass('active');
		$(this).closest('.faq-item-js').find('.faq-reply-js').slideDown(function () {
			$(this).toggleClass('active');
		});
	}); //

	$('.tn-contact-btn-js').click(function () {
		$(this).toggleClass('active');
		$('.tn-contacts-js').fadeToggle(function () {
			$(this).toggleClass('active');
		});
	});
	document.body.addEventListener('click', function () {
		if (!event.target.closest('.tn-contact-btn-js') && !event.target.closest('.tn-contacts-js')) {
			$('.tn-contact-btn-js').removeClass('active');
			$('.tn-contacts-js').fadeOut(function () {
				$(this).removeClass('active');
			});
		}
	}); //

	let sMaterialSlider = new Swiper('.sMaterial-slider-js', {
		slidesPerView: 'auto',
		spaceBetween: 14
	}); //quize-js

	let quizeStepsSlider = new Swiper('.quize-steps-slider-js', {
		slidesPerView: 'auto',
		breakpoints: {
			0: {
				spaceBetween: 12
			},
			992: {
				spaceBetween: 15
			}
		}
	});
	let allSlides = document.querySelectorAll('.quize-step-slide-js');
	let cardWraps = document.querySelectorAll('.quize-card-wrap-js');
	let starCardIndex = 0; //move forward

	$('.forward-btn-js').click(function () {
		let cardWrap = this.closest('.quize-card-wrap-js');

		if (somethingWasChosen(cardWrap)) {
			goToNextStep(starCardIndex);
			starCardIndex++;
			$(cardWrap).slideUp(function () {
				$(this).removeClass('active');
			});
			$(cardWraps[starCardIndex]).slideDown(function () {
				$(this).addClass('active');
			});
		}
	}); //on radio choise

	$('.q-radio-choise-js').click(function () {
		let name = this.getAttribute('name');
		let value = this.getAttribute('value');
		let hiddenInput = document.querySelector(".quize-hidden-inp-js[name=".concat(name, "]"));
		hiddenInput.value = value;
	}); //add funcs

	function goToNextStep(index) {
		$(allSlides[index]).find('.quize-step-btn-js').addClass('active');
		quizeStepsSlider.slideNext();
	}

	function somethingWasChosen(card) {
		let cardInputsName = card.querySelector('.q-radio-choise-js').getAttribute('name'); //refers to current card

		let hiddenInput = document.querySelector(".quize-hidden-inp-js[name=".concat(cardInputsName, "]")).value;
		return hiddenInput;
	} //end luckyone Js

}

;

if (document.readyState !== 'loading') {
	eventHandler();
} else {
	document.addEventListener('DOMContentLoaded', eventHandler);
}