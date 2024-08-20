$(document).ready(function () {
  let main_visual_sld = $('.main_visual .swiper .swiper-slide');
  const swiper = new Swiper('.main_visual .swiper', {
    loop: true,
    pagination: {
      el: '.main_visual .pagi',
      clickable: true,
      renderBullet: function (index, className) {
        return '<div class="' + className + '"><span class="caption pps">' + (main_visual_sld.eq(index).data('tit')) + '</span><p>' + (main_visual_sld.eq(index).data('info')) + '</p><i></i></div>';
      }
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  });

  const videos = document.querySelectorAll('.main_visual video');
  const slides = document.querySelectorAll('.main_visual .swiper-slide');
  let imageSlideTimeout;

  // 비디오 슬라이드 종료시 다음 슬라이드로
  videos.forEach((video, index) => {
      video.addEventListener('ended', () => {
          if (index < slides.length - 1) {
              swiper.slideNext(); // 다음 슬라이드로 넘어가기
          }
      });
  });

  // 슬라이드 변경시 비디오 자동 재생 및 이미지 슬라이드 처리
  swiper.on('slideChange', () => {
      clearTimeout(imageSlideTimeout); // 이전 타이머 제거

      slides.forEach((slide, index) => {
          const video = slide.querySelector('video.main_visual_sld_view');
          const img = slide.querySelector('img.main_visual_sld_view');

          if (index === swiper.activeIndex) {
              if (video) {
                  video.play(); // 현재 슬라이드가 비디오일 경우 재생
              } else if (img) {
                  imageSlideTimeout = setTimeout(() => {
                      swiper.slideNext(); // 이미지일 경우 3초 후 다음 슬라이드로
                  }, 3000);
              }
          } else {
              if (video) {
                  video.pause(); // 다른 슬라이드의 비디오는 일시정지
                  video.currentTime = 0; // 비디오를 처음으로 돌리기
              }
          }
      });
  });

  // 초기 로드 시 첫 번째 슬라이드에 대한 처리
  const firstSlideVideo = slides[0].querySelector('video.main_visual_sld_view');
  const firstSlideImg = slides[0].querySelector('img.main_visual_sld_view');
  if (firstSlideVideo) {
      firstSlideVideo.play();
  } else if (firstSlideImg) {
      imageSlideTimeout = setTimeout(() => {
          swiper.slideNext();
      }, 3000);
  }


  $(".main_tech").on("mousemove", function(event) {
    var mouseXpos = event.clientX;
    var mouseYpos = event.clientY;
    var YrotateDeg = mouseXpos * -0.02;
    var XrotateDeg = mouseYpos * -0.01;
    $(".leaf_box i img").css('transform',`translate(${XrotateDeg}rem, ${YrotateDeg}rem )`);
  });
});


