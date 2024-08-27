<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'location';
  $menuName = 'Location';
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
            'title' => $menuName, // required
            'desc' => '전 세계 주요 도시에 위치한 센시의 지사 위치를 한눈에 확인할 수 있으며,<br /> 각 지사의 주소와 연락처를 손쉽게 찾아보세요.', // option
          );
          printKeyvisual();
      ?>
      <!-- // Key visual -->
      <section class="<?=$menuClass?>_inner">
        <div class="tab_contents">
            <div class="tab_buttons x_scrollbar">
                <button class="tab_button active" data-tab="tab1">Head Office</button>
                <button class="tab_button" data-tab="tab2">R&D Center</button>
                <button class="tab_button" data-tab="tab3">Manufacture</button>
                <button class="tab_button" data-tab="tab4">Contents Lab</button>
                <button class="tab_button" data-tab="tab5">USA</button>
            </div>

            <div class="layout_inner tab_content active" id="tab1">
              <div class="office_inner">
                <div class="tab_content_tit">
                  Head Office
                </div>
                <div class="sub_tab_buttons">
                    <button class="sub_tab_button active" data-tab="sub1_tab1">대전</button>
                </div>
                <div class="sub_tab_content active" id="sub1_tab1">
                  <div class="map_contents">
                    <div class="map_desc">대전광역시 중구 테미로44번안길 33 (우: 34948)</div>
                    <div class="map_content">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.6619771299765!2d127.41933797627998!3d36.32050309459249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565492ba68f3675%3A0x42ab5acbbdc51ac2!2z64yA7KCE6rSR7Jet7IucIOykkeq1rCDthYzrr7jroZw0NOuyiOyViOq4uCAzMw!5e0!3m2!1sko!2skr!4v1724730233888!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="layout_inner tab_content" id="tab2">
              <div class="office_inner">
                <div class="tab_content_tit">
                  R&D Center
                </div>
                <div class="sub_tab_buttons">
                    <button class="sub_tab_button active" data-tab="sub2_tab1">대전</button>
                </div>
                <div class="sub_tab_content active" id="sub2_tab1">
                  <div class="map_contents">
                    <div class="map_desc">대전광역시 유성구 문지로 272-16 대전인공지능센터 216호 (우: 34050)</div>
                    <div class="map_content">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.7640852449185!2d127.40300188839035!3d36.39070471943733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356549dcf5911ff3%3A0xc58b7678e9c3f2b3!2z64yA7KCE6rSR7Jet7IucIOycoOyEseq1rCDrrLjsp4DroZwgMjcyLTE2IDIxNu2YuA!5e0!3m2!1sko!2skr!4v1724730216300!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="layout_inner tab_content" id="tab3">
              <div class="office_inner">
                <div class="tab_content_tit">
                  Manufacture
                </div>
                <div class="sub_tab_buttons">
                    <button class="sub_tab_button active" data-tab="sub3_tab1">파주</button>
                    <button class="sub_tab_button" data-tab="sub3_tab2">대전</button>
                    <button class="sub_tab_button" data-tab="sub3_tab3">멕시코</button>
                </div>
                <div class="sub_tab_content active" id="sub3_tab1">
                  <div class="map_contents">
                    <div class="map_desc">경기도 파주시 신촌1로 27 (우: 10880)</div>
                    <div class="map_content">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.6619771299765!2d127.41933797627998!3d36.32050309459249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565492ba68f3675%3A0x42ab5acbbdc51ac2!2z64yA7KCE6rSR7Jet7IucIOykkeq1rCDthYzrr7jroZw0NOuyiOyViOq4uCAzMw!5e0!3m2!1sko!2skr!4v1724051358390!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="sub_tab_content" id="sub3_tab2">
                  <div class="map_contents">
                    <div class="map_desc">대전광역시 유성구 신동 661-5외 1필지</div>
                    <div class="map_content">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3208.3562425952455!2d127.36807268841083!3d36.473110914767574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565341a64462773%3A0x846c71f5b8fe3863!2z64yA7KCE6rSR7Jet7IucIOycoOyEseq1rCDsi6Drj5kgNjYxLTU!5e0!3m2!1sko!2skr!4v1724726812606!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="sub_tab_content" id="sub3_tab3">
                  <div class="map_contents">
                    <div class="map_desc">C.3 Nte. 557, Chilpancingo, 22446 Tijuana, B.C., Mexico</div>
                    <div class="map_content">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.3488713356896!2d-116.91752802384225!3d32.54353319588068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d947157cd9c165%3A0x9bf6ae3101a7b6e6!2zQy4gMyBOdGUuIDU1NywgQ2hpbHBhbmNpbmdvLCAyMjQ0NiBUaWp1YW5hLCBCLkMuLCDrqZXsi5zsvZQ!5e0!3m2!1sko!2skr!4v1724726831238!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="layout_inner tab_content" id="tab4">
              <div class="office_inner">
                <div class="tab_content_tit">
                  Contents Lab
                </div>
                <div class="sub_tab_buttons">
                    <button class="sub_tab_button active" data-tab="sub4_tab1">서울 지점</button>
                </div>
                <div class="sub_tab_content active" id="sub4_tab1">
                  <div class="map_contents">
                    <div class="map_desc">서울특별시 강남구 테헤란로 443, 4층 (우: 06158)</div>
                    <div class="map_content">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.0371379055864!2d127.05297987632106!3d37.50704222753653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca413f2f03e6d%3A0xdc3e4f5438979c4f!2z7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDthYztl6TrnoDroZwgNDQzIDTsuLU!5e0!3m2!1sko!2skr!4v1724731167924!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="layout_inner tab_content" id="tab5">
              <div class="office_inner">
                <div class="tab_content_tit">
                  USA
                </div>
                <div class="sub_tab_buttons">
                    <button class="sub_tab_button active" data-tab="sub5_tab1">미국법인 사무실</button>
                    <button class="sub_tab_button" data-tab="sub5_tab2">미국법인 창고</button>
                </div>
                <div class="sub_tab_content active" id="sub5_tab1">
                  <div class="map_contents">
                    <div class="map_desc">19700 S. Vermont Ave. Suite #200, Torrance CA 90502 USA</div>
                    <div class="map_content">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.47157050854!2d-118.2921448238015!3d33.8517358282902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2caad36aaaaab%3A0xb7d6bc84e45225b5!2s19700%20S%20Vermont%20Ave%20Ste%20200%2C%20Torrance%2C%20CA%2090502%20%EB%AF%B8%EA%B5%AD!5e0!3m2!1sko!2skr!4v1724731229914!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="sub_tab_content" id="sub5_tab2">
                  <div class="map_contents">
                    <div class="map_desc">15111 S. Figueroa St, Gardena CA 90248 USA</div>
                    <div class="map_content">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.819029862607!2d-118.28592412380004!3d33.89431432605201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2ca620aa44e79%3A0x5938a78b0160e26!2zMTUxMTEgUyBGaWd1ZXJvYSBTdCwgR2FyZGVuYSwgQ0EgOTAyNDgg66-46rWt!5e0!3m2!1sko!2skr!4v1724731262893!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="layout_inner">
        </div>
      </section>
      <!-- <section class="<?=$menuClass?>_form">
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
      </section> -->
      <!-- <div id="popup">
          <h2 id="popupMessage">팝업 메시지</h2>
          <button onclick="closePopup()">닫기</button>
      </div> -->


    </div>    
    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/location.js"></script>
  </div>
</body>

</html>