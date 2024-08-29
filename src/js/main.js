$(document).ready(function () {
  let main_visual_sld = $('.main_visual .swiper .swiper-slide');
  let img_sld_delay = 3000;
  const swiper = new Swiper('.main_visual .swiper', {
    loop: true,
    speed: 500,
    touchRatio: 0,
    pagination: {
      el: '.main_visual .pagi',
      clickable: true,
      renderBullet: function (index, className) {
        return '<div class="' + className + '" data-aos="fade-up" data-aos-offset="-500" data-aos-delay="'+ index +'00"><span class="caption">' + (main_visual_sld.eq(index).data('tit')) + '</span><p>' + (main_visual_sld.eq(index).data('info')) + '</p><i></i></div>';
      }
    },
    navigation: {
        nextEl: '.main_visual .nxt',
        prevEl: '.main_visual .prv',
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
      $('.btn_ctrl.pause').removeClass('disabled');
      $('.btn_ctrl.play').addClass('disabled');
      $('.main_visual .main_visual_cont .pagi .swiper-pagination-bullet i').css('animation-play-state', 'running');
    
      slides.forEach((slide, index) => {
          const video = slide.querySelector('video.main_visual_sld_view');
          const img = slide.querySelector('img.main_visual_sld_view');

          if (index === swiper.activeIndex) {
              $('.main_visual_cont .pagi .swiper-pagination-bullet i').css('animation-duration', video.duration+'s');
              video.play(); // 현재 슬라이드가 비디오일 경우 재생

              // 슬라이드 정지버튼
              $('.btn_ctrl.pause').click(function(){
                video.pause();   
              });
              $('.btn_ctrl.play').click(function () {
                video.play(); 
              });
          } else {
              if (video) {
                  video.pause(); // 다른 슬라이드의 비디오는 일시정지
                  video.currentTime = 0; // 비디오를 처음으로 돌리기
              }
          }
      });
  });

  $('.btn_ctrl.pause').click(function () {
    $('.btn_ctrl.play').removeClass('disabled');
    $(this).addClass('disabled');
    $('.main_visual .main_visual_cont .pagi .swiper-pagination-bullet i').css('animation-play-state', 'paused');
  });
  $('.btn_ctrl.play').click(function(){
    $('.btn_ctrl.pause').removeClass('disabled');
    $(this).addClass('disabled');
    $('.main_visual .main_visual_cont .pagi .swiper-pagination-bullet i').css('animation-play-state', 'running');
  });

  // 초기 로드 시 첫 번째 슬라이드에 대한 처리
  const firstSlide = swiper.slides[swiper.activeIndex].querySelector('.main_visual_sld_view');
  if (firstSlide.tagName === 'VIDEO') {
    firstSlide.addEventListener("canplay", function () {
      firstSlide.play();
      $('.main_visual_cont .pagi .swiper-pagination-bullet i').css('animation-duration', firstSlide.duration + 's');
      // 슬라이드 정지버튼
      $('.btn_ctrl.pause').click(function () {
        firstSlide.pause();
      });
      $('.btn_ctrl.play').click(function () {
        firstSlide.play(); 
      });
    }, false);
  } else if (firstSlide.tagName === 'IMG') {
    setTimeout(() => {
      swiper.slideNext();
    }, img_sld_delay);
  }

  
  // 나뭇잎 효과
  $(".main_tech").on("mousemove", function(event) {
    var mouseXpos = event.clientX;
    var mouseYpos = event.clientY;
    var YrotateDeg = mouseXpos * -0.06;
    var XrotateDeg = mouseYpos * -0.03;
    $(".leaf_box i img").css('transform',`translate(${XrotateDeg}rem, ${YrotateDeg}rem )`);
  });

  let main_together = gsap.timeline({
    scrollTrigger: { 
      trigger: '.main_together_visual',
      start: "top center",
      end: "200%",
      toggleClass:{targets:'.main_together',className:'on'},
      scrub: true,
    },
  });

  ScrollTrigger.matchMedia({
    "(min-width: 751px)": function () {
      let main_innovation = gsap.timeline({
        scrollTrigger: {
          trigger: '.main_innovation',
          start: "top top",
          end: "200%",
          scrub: true,
          pin: true,
          pinnedContainer: '.main_innovation .sticky_box',
          pinSpacing: true,
        },
      });
      
      main_innovation
        .to('.main_innovation .sticky_box .h3_, .main_innovation .sticky_box .h5_', 1, { opacity: 0 }, 'group1')
        .to('.main_innovation .sticky_box .innovation_bg', 2, { left: 0, top: 0, width: "100%", height: "100%", }, 'group1')
        .to('.main_innovation .sticky_box .innovation_bg video', 2, { scale: 1, filter: "brightness(.6)", }, 'group1')
        .to('.main_innovation .sticky_box .innovation_bg p', 1, { opacity: 1, y: 0 }, "-=50%")
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(1)', 1, { backgroundSize: '100% 100%', ease: 'none', },)
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(2)', 1, { backgroundSize: '100% 100%', ease: 'none', }, "-=20%")
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(3)', 1, { backgroundSize: '100% 100%', ease: 'none', }, "-=20%")
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(4)', 1, { backgroundSize: '100% 100%', ease: 'none', }, "-=20%")
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(4)', 1, { backgroundSize: '100% 100%', ease: 'none', },)
    },
    "(max-width: 750px)": function () {      
      let main_innovation2 = gsap.timeline({
        scrollTrigger: {
          trigger: '.main_innovation .innovation_bg',
          start: "top 50%",
          end: "bottom 80%",
          scrub: true,
        },
      });
      
      main_innovation2
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(1)', 1, { backgroundSize: '100% 100%', ease: 'none', },)
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(2)', 1, { backgroundSize: '100% 100%', ease: 'none', }, "+=50%")
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(3)', 1, { backgroundSize: '100% 100%', ease: 'none', }, "+=50%")
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(4)', 1, { backgroundSize: '100% 100%', ease: 'none', }, "+=50%")
        .to('.main_innovation .sticky_box .innovation_bg p strong:nth-child(4)', 1, { backgroundSize: '100% 100%', ease: 'none', },)
    }
  });

  $(window).resize(function () { 
    ScrollTrigger.update;
  });
});


