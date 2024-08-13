<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'product';
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
    <div class="<?=$menuClass?>_container">
      <?php
        $Keyvisual = array(
          'media-type' => 'image', // required, image or video
          'media-d' => $img.'keyvisual_d.jpg', // required
          'media-m' => $img.'keyvisual_m.jpg', // option
          'media-alt' => '', // required
          'dimmed' => 'circle', // required
          'title' => 'Product', // required
          'desc' => '센시의 기술은 시각 장애인을 위한 점자와 비장애인을 위한 일반 텍스트 및 <br>이미지를 통합하여 한 권의 책에서 모두 접근할 수 있게 합니다.', // option
        );
        printKeyvisual();
      ?>
      <section class="<?=$menuClass?>_introduce">
        <h3 class="h3_ pps">BOOKS FOR EVERYONE</h3>
      </section>

    </div>

    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/<?=$menuClass?>.js"></script>
  </div>
</body>

</html>