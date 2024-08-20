<?php 
  $path = './';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'error';
  $menuName = '';
  $img = '/src/images/'.$menuClass.'/'.$menuClass.'_';
  $pageTitle = '';
  $pageImages = '';
  $pageDescription = '디스크립션';
  $pageKeywords = '키워드';

  include $path."src/inc/head.php";
?>
<style>
  .error_wrap{ background:#F0F4F7; min-height:100vh; padding-bottom:94rem;}
  .error_wrap a{ margin:0 auto; width: max-content;}
  .error_wrap a::before{ content:'Go to home';}
  @media (max-width:750px) {
    .error_wrap{ padding-bottom:40rem;}

  }
</style>
</head>
<body>
  <div class="<?=$menuClass?>_wrap">
    <picture>
      <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$icon?>error_d.jpg" />
      <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$icon?>error_m.jpg" />
      <img src="<?=$icon?>error_d.jpg" data-src="<?=$icon?>error_d.jpg" alt="" />
    </picture>
    <a href="./index.php" class="btn_more"></a>
  </div>
</body>

</html>