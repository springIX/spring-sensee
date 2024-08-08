<?php 
  $path = './';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'main';
  $menuName = '';
  $img = '/src/images/'.$menuClass.'/';
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
</body>

</html>