$(function () {
  let aniTxt = document.querySelectorAll(".ani_txt");
  for (idx = 0; idx < aniTxt.length; idx++) {
    let aniTxtStr = aniTxt[idx].textContent;
    let aniTxtStrSplit = aniTxtStr.split("");
    aniTxt[idx].textContent = "";
    for (let i = 0; i < aniTxtStrSplit.length; i++){
      if (aniTxtStrSplit[i] == " ") {
        aniTxt[idx].innerHTML += "<i>&nbsp;</i>";
      } else { 
        aniTxt[idx].innerHTML += "<i>" + aniTxtStrSplit[i] + "</i>";
      } 
    }
  }
  
  /* BOOK TYPEPAGINATION */
  let bookPagi = $('.product_book_types .type_pagi a');
  let bookCont = $('.product_book_types .type_list li');
  bookPagi.on('click', function () {
    var anchor = $(this).attr('href');
    $('html, body').animate({'scrollTop' : $(anchor).offset().top}, 700);
    return false;
  });
  $(window).on('scroll load', function(){
    for (var i = 0; i < bookCont.length ; i++ )
    {
      if (bookCont.eq(i).offset().top <= $(this).scrollTop() + 1)
      {
        bookPagi.eq(i).addClass('on').siblings().removeClass('on');
      }
    }
  });
  
});