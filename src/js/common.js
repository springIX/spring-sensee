$(function () { 
  const win = $(window);
  
  /************** BTN FUNCTION **************/
  $('[data-btn]').click(function () { 
    let btn_val = $(this).data('btn');
    $(`[data-view=${btn_val}]`).toggleClass('on');
  });
  
  /********* HEADER *********/
  let prvScr = 0;
  win.on("scroll", function(){
    let scrTop = $(this).scrollTop();

    /* 스크롤 내리면 사라지는 헤더 */
    // var crntScr = win.scrollTop();
    // if (crntScr > prvScr) {
    //   $('.header').addClass('hide');
    //   $('[data-view]').removeClass('on');
    // } 
    // else {
    //   $('.header').removeClass('hide');
    // }
    // prvScr = crntScr;
    
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
  
  function txtSizeCtrl(txtZoom) {
    $('body').css('zoom', txtZoom + '%');
  }
  
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
      sessionStorage.setItem("txtColor", colorVal);
      $(this).addClass('on').siblings().removeClass('on');
    });
  });


});