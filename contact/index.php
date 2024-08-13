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
    <div class="<?=$menuClass?>_container">
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
      <section>
        <form id="contactForm" method="POST" action="path/to/send_mail.php">
          <label for="name">이름:</label><br>
          <input type="text" id="name" name="name" required><br><br>

          <label for="phone">전화번호:</label><br>
          <input type="tel" id="phone" name="phone" required><br><br>

          <label for="category">Category:</label><br>
          <select id="category" name="category" required>
              <option value="General Inquiry">일반 문의</option>
              <option value="Support">지원</option>
              <option value="Feedback">피드백</option>
          </select><br><br>

          <label for="email">이메일:</label><br>
          <input type="email" id="email" name="email" required><br><br>

          <button type="submit">보내기</button>
        </form>
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