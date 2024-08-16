<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'media';
  $menuName = '';
  $img = '/src/images/'.$menuClass.'/'.$menuClass.'_';
  $pageTitle = '';
  $pageImages = '';
  $pageDescription = '디스크립션';
  $pageKeywords = '키워드';

  include $path."src/inc/head.php";
?>
</head>
<body>
  <div class="<?=$menuClass?>_wrap">
    <?php include $path."/src/inc/header.php"; ?>
    <div id="contents" class="<?=$menuClass?>_container">
      <?php
        $Keyvisual = array(
          'media-type' => 'image', // required, image or video
          'media-d' => $img.'keyvisual_d.jpg', // required
          'media-m' => $img.'keyvisual_m.jpg', // option
          'media-alt' => '', // required
          'dimmed' => 'all', // required
          'title' => 'Media Room', // required
          'desc' => '센시는 환경과 사회를 위한 다양한 활동을 적극적으로 추진하고 있습니다. <br class="pc">최신 뉴스와 보도자료를 비롯하여, 다양한 콘텐츠가 담긴 뉴스레터와 이벤트 소식을 만나볼 수 있습니다.', // option
        );
        printKeyvisual();
      ?>
      <section class="<?=$menuClass?>_main_news">
         
      </section>
    </div>

    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/<?=$menuClass?>.js"></script>
  </div>
</body>

</html>