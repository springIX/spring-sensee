$(function () { 
  const win = $(window);
  
  /********* BTN FUNCTION *********/
  $('[data-btn]').click(function () { 
    let btn_val = $(this).data('btn');
    $(`[data-view=${btn_val}]`).toggleClass('on');
  });
  
  /********* HEADER *********/
  win.on("scroll", function(){
    let scrTop = $(this).scrollTop();
    
    /* 불투명 헤더로 전환 */
    if (scrTop > 100) {
      $('.header').addClass('bg');
    } else { 
      $('.header').removeClass('bg');
    }
  });

  /* 텍스트 조절 버튼(보완필요) */
  let txtBtn = $('.setting_box .ctrl_txt .txt_size button');
  let txtZoom = 100; // 기본값
  let txtZoomVar = 5; // 버튼 누를때마다 텍스트 증감 값
  let txtZoomMax = txtZoom + txtZoomVar * 3; // 마지막 숫자가 최대 클릭 수)
  let txtZoomMin = txtZoom - txtZoomVar * 3; // 마지막 숫자가 최소 클릭 수)
  let crntZoom = window.sessionStorage.getItem('zoom'); 
  
  function txtSizeCtrl(txtZoom) {
    $('body').css('zoom', txtZoom + '%');
    sessionStorage.setItem("zoom", txtZoom);
  }
  $('body').css('zoom', crntZoom + '%');
  
  txtBtn.click(function () { 
    if ($(this).hasClass('size_up')) {
      // 증가 버튼
      txtZoom = txtZoom + txtZoomVar;
      if (txtZoom >= txtZoomMax) {
        txtZoom = txtZoomMax;
      }
      txtSizeCtrl(txtZoom);
    } else { 
      // 감소 버튼
      txtZoom = txtZoom - txtZoomVar;
      if (txtZoom <= txtZoomMin) {
        txtZoom = txtZoomMin;
      }
      txtSizeCtrl(txtZoom);
    }

    // 상한선에서 버튼 막기
    if (txtZoom >= txtZoomMax) {
      txtBtn.siblings('.size_up').addClass('disabled');
    } else if (txtZoom <= txtZoomMin) {
      txtBtn.siblings('.size_down').addClass('disabled');
    } else { 
      txtBtn.removeClass('disabled');
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

  /************** FOOTER **************/
  /* SCROLL TOP BTN */
  win.on("scroll", function () {
    if ($(this).scrollTop() > $(window).height()/2) {
      $('.scr_top').fadeIn(500);
    } else { 
      $('.scr_top').fadeOut(500);
    }
  });
  $('.scr_top').click(function () { 
    $('html, body').animate({'scrollTop' : 0}, 700);
    return false;
  });

  /* AOS */
  AOS.init({ duration: 1000, offset: 100, easing: 'cubic-bezier(0.25, 1, 0.5, 1);' });
});