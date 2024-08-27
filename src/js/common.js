$(function () { 
  const win = $(window);
  
  /********* BTN FUNCTION *********/
  $('[data-btn]').click(function () { 
    let btn_val = $(this).data('btn');
    $(`[data-view=${btn_val}]`).toggleClass('on');
  });
  
  /********* HEADER *********/
  win.on('load resize',function(){
    /* 수납식 헤더 */
    let didScroll = false;
    let lastScrollTop = 0;
    let delta = 5;
    let navbarHeight = $('.header').outerHeight();

    win.scroll(function(event){
      //$('.header').addClass('scrolled');
      didScroll = true;

      /* 불투명 헤더 */
      if (win.scrollTop() > navbarHeight) {
        $('.header').addClass('bg');
      } else { 
        $('.header').removeClass('bg');
      }

      $('.header [data-view]').removeClass('on');
    });

    setInterval(function() {
      if (didScroll) {
        hasScrolled();
        didScroll = false;
      }
    }, 0);

    function hasScrolled() {
      let st = $(this).scrollTop();
      
      // Make sure they scroll more than delta
      if(Math.abs(lastScrollTop - st) <= delta)
        return;
      
      if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        if($('.header').hasClass('active') == false){
          $('.header').removeClass('nav_up').addClass('nav_down');
        }
        
      } else {
        // Scroll Up
        if(st + win.height() < $(document).height()) {
          $('.header').removeClass('nav_down').addClass('nav_up');
        }
      }
      
      lastScrollTop = st;
    }
  });

  /* 텍스트 색상 버튼 */
  let txtColorBtn = $('.setting_box .txt_color .btn_wrap button');
  let crntColor = window.sessionStorage.getItem('txtColor'); 
  $('body').addClass(crntColor);
  txtColorBtn.siblings(`[data-color=${crntColor}]`).addClass('on').siblings().removeClass('on');

  txtColorBtn.each(function () { 
    let colorVal = $(this).data('color');
    $(this).click(function () { 
      $('body').removeClass().addClass(colorVal);
      sessionStorage.setItem("txtColor", colorVal);
      $(this).addClass('on').siblings().removeClass('on');
    });
  });

  /************** KEY VISUAL ANI **************/
  if ($('.keyvisual')) { 
    let keyvisual = gsap.timeline({
      scrollTrigger: { 
        trigger: '.keyvisual',
        start: "top top",
        end: "bottom top",
        scrub: true,
      },
    });
    
    keyvisual
    .to('.keyvisual',{padding:"0 20rem"},'group1')
    .to('.keyvisual .image_area img, .keyvisual .swiper',{y:"30%"},'group1')
  }

  /************** X SCROLLBAR **************/
  $('.x_scrollbar').on('touchstart mousedown', function(e) {
    $(this).addClass('on');
  });
  $('.x_scrollbar').on('touchend mouseup', function(e) {
    $(this).removeClass('on');
  });
  
  /************** FOOTER **************/
  /* SCROLL TOP BTN */
  win.on("scroll", function () {
    let scrTop = $(this).scrollTop();
    if (scrTop < win.height() / 2 || scrTop > $('body').height() - $('footer').height()) {
      $('.scr_top').fadeOut(500);
    }else { 
      $('.scr_top').fadeIn(500);
    }
  });
  $('.scr_top').click(function () { 
    $('html, body').animate({'scrollTop' : 0}, 700);
    return false;
  });
  
  /* 커서 */
  cursor = $(".cursor"); 
  if (win.width() >= 750) {
    $('body').css('padding-bottom', $('footer').outerHeight());
    
    let posX = 0,
        posY = 0;
    let mouseX = 0,
        mouseY = 0;
    TweenMax.to({}, 0.01, {
      repeat: -1,
      onRepeat: function() {
        posX += (mouseX - posX) / 9;
        posY += (mouseY - posY) / 9;
        TweenMax.set(cursor, {
          css: {
          left: mouseX,
          top: mouseY
          }
        });
      }
    });

    // 커서가 활성화되는 영역
    $("html,body").on("mousemove", function(e) {
      mouseX = e.clientX;
      mouseY = e.clientY;
    }).on("mouseenter", function(e) {
      cursor.css('opacity', 1);
    }).on("mouseleave", function(e) {
      cursor.css('opacity', 0);
    });
  }
  
  $("input, a, input, button").on("mouseenter", function() {
    cursor.addClass("on");
  }).on("mouseleave", function() {
    cursor.removeClass("on");
  });

  /* AOS */
  AOS.init({ duration: 1000, offset: 100, easing: 'cubic-bezier(0.25, 1, 0.5, 1);' });
  win.scrollTop(function () { 
    AOS.refresh();
  });
});

// HTML 요소를 변수로 저장
const increaseButton = document.getElementById('increase_font');
const decreaseButton = document.getElementById('decrease_font');
const body = document.body;
// 폰트 크기의 최소값과 최대값 설정
const minFontSize = 0.85;
const maxFontSize = 1.15;
// 현재 폰트 크기를 추출하는 함수
function getFontSize() {
  return parseFloat(window.getComputedStyle(body).zoom);
}
// 폰트 크기를 세션 스토리지에 저장하는 함수
function saveFontSize(fontSize) {
  sessionStorage.setItem('fontSize', fontSize.toFixed(2));
}
// 저장된 폰트 크기를 불러오는 함수
function loadFontSize() {
  const savedFontSize = sessionStorage.getItem('fontSize');
  if (savedFontSize) {
    body.style.zoom = savedFontSize;
  }
  if(savedFontSize == maxFontSize){
    increaseButton.classList.add('disabled');
  }else if(savedFontSize == minFontSize){
    decreaseButton.classList.add('disabled');
  }else{
    increaseButton.classList.remove('disabled');
    decreaseButton.classList.remove('disabled');
  }
}
// 폰트 크기를 증가시키는 함수
function increaseFontSize() {
  let fontSize = getFontSize();
  if (fontSize <= maxFontSize) {
    fontSize += 0.05; // 폰트 크기를 1px씩 증가
    body.style.zoom = fontSize;
    saveFontSize(fontSize);
    increaseButton.classList.remove('disabled');
    decreaseButton.classList.remove('disabled');
  }else{
    increaseButton.classList.add('disabled');
  }
}
// 폰트 크기를 감소시키는 함수
function decreaseFontSize() {
  let fontSize = getFontSize();
  if (fontSize >= minFontSize) {
    fontSize -= 0.05; // 폰트 크기를 1px씩 감소
    body.style.zoom = fontSize;
    saveFontSize(fontSize);
    decreaseButton.classList.remove('disabled');
    increaseButton.classList.remove('disabled');
  }else{
    decreaseButton.classList.add('disabled');
  }
}
// 버튼 클릭 이벤트 리스너 추가
increaseButton.addEventListener('click', increaseFontSize);
decreaseButton.addEventListener('click', decreaseFontSize);
// 페이지 로드 시 저장된 폰트 크기를 불러오기
window.addEventListener('load', loadFontSize);