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
                  <p>This is the content of Tab 1.</p>
              </div>
              <div class="tab_content" id="tab2">
                  <p>This is the content of Tab 2.</p>
              </div>
              <div class="tab_content" id="tab3">
                  <p>This is the content of Tab 3.</p>
              </div>
              <div class="tab_content" id="tab4">
                  <p>This is the content of Tab 3.</p>
              </div>
          </div>
        </div>
      </section>
      <section>
        <div class="layout_inner">
          <form id="contactForm" method="POST" action="contact/send_mail.php">
            <label for="name">이름:</label><br>
            <input type="text" id="name" name="name" required><br>
  
            <label for="phone">전화번호:</label><br>
            <input type="tel" id="phone" name="phone" required><br>
  
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
      </section>



      <!-- 팝업 창 -->
      <div id="popup">
          <h2 id="popupMessage">팝업 메시지</h2>
          <button onclick="closePopup()">닫기</button>
      </div>


    </div>        
    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/contact.js"></script>
    <script>
    </script>
  </div>
</body>

</html>