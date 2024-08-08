<?php 
	$path = './';
	$menuClass = 'main';
	$menuName = '';
	$pageDescription = '디스크립션';
	$pageKeywords = '키워드';
	$pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$pageImages = '';

  include $path."src/inc/head.php";   
?>
</head>
<body class="<?=$menuClass?>">
  <?php include $path."/src/inc/header.php"; ?>
  <div style="background:url(/src/images/main/main_visual.png)no-repeat center center / cover; height:100vh;"></div>
  
  <?php include $path."/src/inc/footer.php"; ?>
</body>

</html>