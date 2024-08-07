$(function () { 
  const win = $(window);
  
  /************** BTN FUNCTION **************/
  $('[data-btn]').click(function () { 
    let btn_val = $(this).data('btn');
    $(`[data-view=${btn_val}]`).toggleClass('on');
  });
  
  /********* HEADER *********/
  /* 스크롤 내리면 사라지는 헤더 */
  let prvScr = 0;
  document.addEventListener("scroll", function(){
    var crntScr = win.scrollTop();
    if (crntScr > prvScr) {
      $('.header').addClass('hide');
      $('[data-view]').removeClass('on');
    } 
    else {
      $('.header').removeClass('hide');
    }
    prvScr = crntScr;
  });
  
});