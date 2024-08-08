<?php 
	$path = './';
	$menuClass = 'main';
	$menuName = '';
	$pageDescription = '디스크립션';
	$pageKeywords = '키워드';
	$pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$pageImages = '';

  include $path."/src/inc/head.php";   
?>
</head>
<body style="background:#000; height:200vh;" class="<?=$menuClass?>">
  <?php include $path."/src/inc/header.php"; ?>
  
  <div>
    main10234
  </div>

  <?php include $path."/src/inc/footer.php"; ?>
</body>

</html>