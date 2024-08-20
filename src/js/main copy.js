$(document).ready(function () {
  
  // Key visual
	function initKvSwiper(t) {
		const swipeCont = t;
		const $btnPause = $(swipeCont).find(".btn-pause");
		const $btnPlay = $(swipeCont).find(".btn-play");

		let isPaused = false;
		let remainingTime = 0;

		if ($(swipeCont).find(".swiper-slide ").eq(0).hasClass("video-slide")) {
			kvAutoPlay = false;
		}

		const KvSwiper = new Swiper(t, {
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
				renderBullet: function (index, className) {
					return (
						'<span class="' +
						className +
						'" role="button" aria-label="Go to slide ' +
						(index + 1) +
						'"><span class="progress"></span></span>'
					);
				},
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			loop: true,
			speed: 500,
			autoplay: kvAutoPlay,
			keyboard: {
				enabled: true,
				onlyInViewport: false,
			},
			noSwiping: true,
			// preloadImages: true,
			allowTouchMove: true,
			// lazy: true,
			lazy: {
				loadPrevNext: true,
			},
			breakpoints: {
				// min 750px
				751: {
					speed: 1000,
					allowTouchMove: false,
				},
			},
			on: {
				init: (swiper) => {
				},
			},
		});

		function videoPlayAfterLoad() {
			let video = document.querySelector(".key-visual .swiper-slide-active .inner.mobile .video");
			if (window.innerWidth > 750) {
				video = document.querySelector(".key-visual .swiper-slide-active .inner.desktop .video");
			}
			if (video) {
				const loadedVideo = function () {
					// $(".logo").css("color", "white").html(video.readyState);
					if (video.readyState >= 2) {
						$(".key-visual video").removeAttr("style");
						$btnPlay.click();
						KvSwiper.params.autoplay.delay = 5000;
						KvSwiper.params.autoplay.disableOnInteraction = false;
						KvSwiper.params.autoplay.enabled = true;
						KvSwiper.autoplay.run();
						startProgressAnimation();
					} else {
						setTimeout(function () {
							loadedVideo();
						}, 500);
					}
				};
				video.addEventListener("loadeddata", function () {
					loadedVideo();
				});
				video.load();
			}
		}
		videoPlayAfterLoad();

		let progressInterval; // 전역 변수로 선언

		function startProgressAnimation() {
			const progressEl = $(swipeCont).find(".swiper-pagination-bullet-active .progress");
			progressEl.css("transform", "scaleX(0)");
			const duration = KvSwiper.params.autoplay.delay || 6000;
			const increment = 10 / duration; // 10ms마다 (1/duration) 만큼 증가하도록 변경
			let progress = 0;
			progressInterval = setInterval(() => {
				if (!isPaused) {
					progress += increment;
					if (progress >= 1) {
						progress = 1;
						clearInterval(progressInterval);
						// 만약 일시 정지된 시간이 있다면, 해당 시간만큼 재생 후 다음 슬라이드로 이동
						if (remainingTime > 0) {
							KvSwiper.slideNext();
							remainingTime = 0; // 일시 정지된 시간 초기화
						}
					}
					progressEl.css("transform", "scaleX(" + progress + ")");
				}
			}, 10);
		}

		function resetProgressAnimation() {
			clearInterval(progressInterval);
		}

		// page load
		const $activePaging = $(swipeCont).find(".swiper-pagination-bullet-active");
		setTimeout(function () {
			$activePaging.addClass("on");
		}, 10);
		if (!!kvAutoPlay) startProgressAnimation();

		KvSwiper.on("slideChange", function () {
			const $activePaging = $(swipeCont).find(".swiper-pagination-bullet-active");
			let $activeSlide = $(swipeCont).find(".swiper-slide-active");
			$activePaging.siblings().removeClass("on");
			$activePaging.addClass("on");
			resetProgressAnimation();
			startProgressAnimation();
			const $siblingsDesktopVideo = $activeSlide.siblings().find(".desktop video");
			const $siblingsMobileVideo = $activeSlide.siblings().find(".mobile video");
			const $desktopVideo = $(swipeCont).find(".desktop video");
			const $mobileVideo = $(swipeCont).find(".mobile video");
			if ($desktopVideo.is(":visible") && $siblingsDesktopVideo.length > 0) {
				$siblingsDesktopVideo[0].pause();
				$siblingsDesktopVideo[0].currentTime = 0;
				setTimeout(function () {
					let $activeSlide = $(swipeCont).find(".swiper-slide-active");
					const $activeDesktopVideo = $activeSlide.find(".desktop video");
					if (!isPaused && $activeDesktopVideo.is(":visible")) {
						$activeDesktopVideo[0].play();
					}
				}, 10);
			}
			if ($mobileVideo.is(":visible") && $siblingsMobileVideo.length > 0) {
				$siblingsMobileVideo[0].pause();
				$siblingsMobileVideo[0].currentTime = 0;
				setTimeout(function () {
					let $activeSlide = $(swipeCont).find(".swiper-slide-active");
					const $activeMobileVideo = $activeSlide.find(".mobile video");
					if (!isPaused && $activeMobileVideo.is(":visible")) {
						$activeMobileVideo[0].play();
					}
				}, 10);
			}
		});

		function kvPause() {
			isPaused = true;
			KvSwiper.autoplay.stop();
			$btnPause.removeClass("active");
			$btnPlay.addClass("active");
			remainingTime = (KvSwiper.params.autoplay.delay || 6000) * (1 - getProgress());
		}
		function kvPlay() {
			isPaused = false;
			KvSwiper.autoplay.start();
			$btnPause.addClass("active");
			$btnPlay.removeClass("active");
		}
		function getProgress() {
			const $activePaging = $(swipeCont).find(".swiper-pagination-bullet-active");
			const progressEl = $activePaging.find(".progress");
			const progress = parseFloat(progressEl.css("transform").split("(")[1].split(")")[0]);
			return progress || 0;
		}

		let $desktopActiveVideo = $(swipeCont).find(".swiper-slide-active .desktop video");
		let $mobileActiveVideo = $(swipeCont).find(".swiper-slide-active .mobile video");

		$btnPause.on("click", function () {
			$desktopActiveVideo = $(swipeCont).find(".swiper-slide-active .desktop video");
			$mobileActiveVideo = $(swipeCont).find(".swiper-slide-active .mobile video");

			kvPause();
			$btnPause.addClass("clicked");
			$btnPlay.removeClass("clicked");
			if (window.innerWidth > 750 && $desktopActiveVideo.is(":visible")) {
				$desktopActiveVideo[0].pause(); // 데스크탑 버전 비디오 일시정지
			}

			if (window.innerWidth <= 750 && $mobileActiveVideo.is(":visible")) {
				$mobileActiveVideo[0].pause(); // 모바일 버전 비디오 일시정지
			}
		});
		$btnPlay.on("click", function () {
			$desktopActiveVideo = $(swipeCont).find(".swiper-slide-active .desktop video");
			$mobileActiveVideo = $(swipeCont).find(".swiper-slide-active .mobile video");
			const $activePaging = $(swipeCont).find(".swiper-pagination-bullet-active");
			$activePaging.removeClass("on");
			// $(swipeCont).find(".full").removeClass("full");
			kvPlay();
			$btnPlay.addClass("clicked");
			$btnPause.removeClass("clicked");
			setTimeout(function () {
				$activePaging.addClass("on");
			}, 100);
			if ($(window).width() <= 750) {
				$activePaging.addClass("on");
			}
			if (window.innerWidth > 750 && $desktopActiveVideo.is(":visible")) {
				$desktopActiveVideo[0].play(); // 데스크탑 버전 비디오 재생
			}

			if (window.innerWidth <= 750 && $mobileActiveVideo.is(":visible")) {
				$mobileActiveVideo[0].play(); // 모바일 버전 비디오 재생
			}
		});
		$(".swiper-pagination-bullet").on("click", function () {
			setTimeout(function () {
				const $activePaging = $(swipeCont).find(".swiper-pagination-bullet-active");
				$activePaging.removeClass("on");
				if ($btnPlay.hasClass("clicked") || $btnPause.hasClass("active")) {
					kvPlay();
				} else {
					kvPause();
				}
			}, 100);
			if ($(window).width() <= 750) {
				const $activePaging = $(swipeCont).find(".swiper-pagination-bullet-active");
				$activePaging.removeClass("on");
				if ($btnPlay.hasClass("clicked") || $btnPause.hasClass("active")) {
					kvPlay();
				} else {
					kvPause();
				}
			}
		});
	};
	if ($(".main_wrap .key-visual").length > 0) {
		const mainKv = $(".key-visual");
		initKvSwiper(".key-visual");
		mainKv.addClass("swiper-load");

		const kvEl = document.querySelector(".main-kv");

		const fixKVHeight = function () {
			kvEl.style.height = "auto";
			if ($(window).width() <= 750) {
				kvEl.querySelector(".swiper-wrapper").style.height = `${window.innerHeight - 69}px`;
				setTimeout(function () {
					kvEl.querySelector(".swiper-wrapper").style.height = `${window.innerHeight - 69}px`;
				}, 500);
				setTimeout(function () {
					kvEl.querySelector(".swiper-wrapper").style.height = `${window.innerHeight - 69}px`;
				}, 800);
			} else {
				kvEl.querySelector(".swiper-wrapper").style.height = "auto";
				setTimeout(function () {
					kvEl.querySelector(".swiper-wrapper").style.height = "auto";
				}, 800);
			}
		};

		$(window).on("resize", fixKVHeight).resize();
	}
});
