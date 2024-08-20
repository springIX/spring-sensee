<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'contact';
  $menuName = '';
  $img = '/src/images/'.$menuClass.'/'.$menuClass.'_';
  $pageDescription = '디스크립션';
  $pageTitle = '';
  $pageImages = '';
  $pageKeywords = '키워드';

  include $path."src/inc/head.php";
?>
</head>
<body>
  <div class="<?=$menuClass?>_wrap">
    <?php include $path."src/inc/header.php"; ?>
    <div id="contents" class="<?=$menuClass?>_container">
      <!-- Key visual -->
      <?php
          $Keyvisual = array(
            'media-type' => 'image', // required, image or video
            'media-d' => $img.'keyvisual_d.jpg', // required
            'media-m' => $img.'keyvisual_m.jpg', // option
            'media-alt' => '', // required
            'dimmed' => 'all', // required
            'title' => 'Contact Us', // required
            'desc' => '센시는 여러분과 함께하는 모든 순간을 소중하게 생각합니다. <br class="pc">문의사항이나 도움이 필요하신 경우, 언제든지 연락 주시길 바랍니다.', // option
          );
          printKeyvisual();
      ?>
      <!-- // Key visual -->
      <section class="<?=$menuClass?>_location">
        <div class="layout_inner">
          <div class="tit_wrap">
            <h3 class="h3_ pps">Location</h3>
          </div>
          <div class="tab_contents">
            <div class="tab_buttons">
                <button class="tab_button active" data-tab="tab1">Head Office</button>
                <button class="tab_button" data-tab="tab2">Seoul</button>
                <button class="tab_button" data-tab="tab3">Printing</button>
                <button class="tab_button" data-tab="tab4">R&D Center</button>
            </div>
            <div class="tab_content active" id="tab1">
              <div class="office_inner">
                <div class="office_img">
                  <picture>
                    <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>address_d.jpg" />
                    <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>address_m" />
                    <img src="<?=$img?>address_d.jpg" data-src="<?=$img?>address_d.jpg" alt="" />
                  </picture>
                </div>
                <div class="floating_area">
                  <div class="floating_txt">
                    <div class="office_tit">
                      <div class="sub_tit2">Head Office</div>
                      <div class="dot"></div>
                      <div class="body_txt">대전</div>
                    </div>
                    <div class="office_txt">
                      <div class="office_address">대전광역시 중구 테미로44번안길 33 (우: 34948)</div>
                      <div class="office_mail">company@sensee.world</div>
                      <div class="office_phone">1533-0308</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab_content" id="tab2">
              <div class="office_inner">
                <div class="office_img">
                  <picture>
                    <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>address_d.jpg" />
                    <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>address_m" />
                    <img src="<?=$img?>address_d.jpg" data-src="<?=$img?>address_d.jpg" alt="" />
                  </picture>
                </div>
                <div class="floating_area">
                  <div class="floating_txt">
                    <div class="office_tit">
                      <div class="sub_tit2">Seoul</div>
                      <div class="dot"></div>
                      <div class="body_txt">서울</div>
                    </div>
                    <div class="office_txt">
                      <div class="office_address">서울특별시 강남구 테헤란로 443, 4층</div>
                      <div class="office_mail">company@sensee.world</div>
                      <div class="office_phone">1533-0308</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab_content" id="tab3">
              <div class="office_inner">
                <div class="office_img">
                  <picture>
                    <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>address_d.jpg" />
                    <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>address_m" />
                    <img src="<?=$img?>address_d.jpg" data-src="<?=$img?>address_d.jpg" alt="" />
                  </picture>
                </div>
                <div class="floating_area">
                  <div class="floating_txt">
                    <div class="office_tit">
                      <div class="sub_tit2">Printing</div>
                      <div class="dot"></div>
                      <div class="body_txt">파주</div>
                    </div>
                    <div class="office_txt">
                      <div class="office_address">경기도 파주시 신촌1로 27</div>
                      <div class="office_mail">company@sensee.world</div>
                      <div class="office_phone">1533-0308</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab_content" id="tab4">
              <div class="office_inner">
                <div class="office_img">
                  <picture>
                    <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>address_d.jpg" />
                    <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>address_m" />
                    <img src="<?=$img?>address_d.jpg" data-src="<?=$img?>address_d.jpg" alt="" />
                  </picture>
                </div>
                <div class="floating_area">
                  <div class="floating_txt">
                    <div class="office_tit">
                      <div class="sub_tit2">R&D Center</div>
                      <div class="dot"></div>
                      <div class="body_txt">R&D</div>
                    </div>
                    <div class="office_txt">
                      <div class="office_address">대전광역시 유성구 문지로 272-16, 216호</div>
                      <div class="office_mail">company@sensee.world</div>
                      <div class="office_phone">1533-0308</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_map">
        <div class="layout_inner">
          <div class="map_contents">
            <div class="map_tit">
              <div class="bold">Head Office</div>
              <div class="dot"></div>
              <div class="">대전</div>
            </div>
            <div class="map_content">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.6619771299765!2d127.41933797627998!3d36.32050309459249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565492ba68f3675%3A0x42ab5acbbdc51ac2!2z64yA7KCE6rSR7Jet7IucIOykkeq1rCDthYzrr7jroZw0NOuyiOyViOq4uCAzMw!5e0!3m2!1sko!2skr!4v1724051358390!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_form">
        <div class="form_inner">
          <div class="form_tit">
            <div class="tit_txt pps">Get in touch</div>
          </div>
          <div class="form_wrap">
            <div class="sensee_logo">
              <img class="sensee_symbol_black" src="<?=$icon?>logo_cymbol_black_col.svg" alt="" />
            </div>
            <div class="form_contents">
              <div class="form_sub_tit">
                <div class="tit_txt pps">Send a Message</div>
                <div class="desc">
                  제품 및 서비스에 대한 자세한 정보 그리고<br class="pc">
                  문의사항이나 개선해야할 점 등이 있다면 자유롭게 의견을 전달해 주세요.
                </div>
              </div>
              <form id="contactForm" method="POST" action="contact/send_mail.php">
                <div class="name">
                  <label for="name">name</label><br>
                  <input type="text" id="name" name="name" required><br>
                </div>
                <div class="phone">
                  <input type="tel" id="phone" name="phone" required><br>
                </div>      
      
                <label for="category">Category:</label><br>
                <select id="category" name="category" required>
                    <option value="도입 문의">도입 문의</option>
                    <option value="투자 문의">투자 문의</option>
                    <option value="기타 문의">기타 문의</option>
                </select><br>
      
                <label for="email">이메일:</label><br>
                <input type="email" id="email" name="email" required><br>
      
                <button type="submit">보내기</button>
              </form>
            </div>
          </div>
        </div>
      </section>



      <!-- 팝업 창 -->
      <div id="popup">
          <h2 id="popupMessage">팝업 메시지</h2>
          <button onclick="closePopup()">닫기</button>
      </div>


    </div>    
    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/contact.js"></script>
  </div>
</body>

</html>