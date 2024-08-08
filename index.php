<?php 
  $path = './';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'main';
  $menuName = '';
  $img = '/src/images/'.$menuClass.'/';
  $pageTitle = '';
  $pageImages = '';
  $pageDescription = '디스크립션';
  $pageKeywords = '키워드';

  include "./src/inc/head.php";
?>
</head>
<body>
  <div class="<?=$menuClass?>_wrap">
    <?php include $path."/src/inc/header.php"; ?>
    <main class="<?=$menuClass?>_container">
      <section class="<?=$menuClass?>_visual">
        <div style="background:url(<?=$img?>main_visual.png)no-repeat center center / cover; height:100vh;"></div>  
      </section>
      <section class="<?=$menuClass?>_intro">
        <div class="section_tit taC">
          <h5 class="h5_">sensee</h5>
          <h2 class="h3_">더 나은 세상을 위한 노력</h2>
          <p class="body_txt">
            센시는 <br>
            장애인과 비장애인, 남녀노소 누구나 겪을 수 있는 정보접근에 대한 <br>
            문제 해결을 위해 만들어졌습니다.
          </p>
          <strong class="bg_tit pps">
            TOGETHER <br>
            MEANINGFUL <br>
            BASICS
          </strong>
          <img src="<?=$img?>main_intro.png" alt="" class="hand_img">
        </div>
      </section>
      <section class="<?=$menuClass?>_brand">
        <div class="section_tit">
          <h6 class="h5_">Brand story</h6>
          <h2 class="h3_ pps">Touch the world and <br>See the unseen</h2>
        </div>
      </section>
    </main>
    <?php include $path."/src/inc/footer.php"; ?>
  </div>
</body>

</html>