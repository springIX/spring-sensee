<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'sustainability';
  $menuName = '';
  $img = '/src/images/'.$menuClass.'/'.$menuClass.'_';
  $pageDescription = '디스크립션';
  $pageTitle = '';
  $pageImages = '';
  $pageKeywords = '키워드';

  include $path."src/inc/head.php";
?>
</head>
<body style="background-color: #000;">
  <div class="<?=$menuClass?>_wrap">
    <?php include $path."src/inc/header.php"; ?>
      <!-- Key visual -->
      <?php
					$Keyvisual = array(
						'media-type' => 'image', // required, image or video
						'media-d' => $img.'keyvisual_d.jpg', // required
						'media-m' => $img.'keyvisual_m.jpg', // option
						'media-alt' => '', // required
						'dimmed' => 'circle', // required
						'title' => 'Sustainability', // required
						'desc' => '센시는 환경적 가치와 함께 장애인과 비장애인의 편견을 없애는 공평한 사회 추구, <br>포용적 교육, 공익을 위한 사회공헌등 모두가 평등한 사회를 위한 경영철학을 가지고 있습니다. ', // option
					);
					printKeyvisual();
				?>
				<!-- // Key visual -->
    <?php include $path."/src/inc/footer.php"; ?>
  </div>
</body>

</html>