<?php 
  $menuClass = 'main';
  $menuName = '';
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
        <div style="background:url(<?=$img?>main-visual.png)no-repeat center center / cover; height:100vh;"></div>  
      </section>
      <section class="<?=$menuClass?>_intro">
        
      </section>
    </main>
    <?php include $path."/src/inc/footer.php"; ?>
  </div>
<body style="background:url(/src/images/main/main_visual.png); height:200vh;" class="<?=$menuClass?>">
  <?php include $path."/src/inc/header.php"; ?>
  
  <div>
d  
</div>

  <?php include $path."/src/inc/footer.php"; ?>
</body>

</html>