<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'about';
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
          'dimmed' => 'all', // required
          'title' => 'About Us', // required
          'desc' => '센시는 비장애인과 장애인이 함께 보고 즐길 수 있는 세상을 만들기 위해 <br>지속적인 연구를 수행하며, 근본적인 문제를 해결하기 위해 끊임없이 도전합니다.', // option
        );
        printKeyvisual();
      ?>
    </div>
    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/<?=$menuClass?>.js"></script>
  </div>
</body>

</html>