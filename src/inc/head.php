<!doctype html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
  <meta name="format-detection" content="telephone=no" />

  <title>SENSEE <?=$menuName==""?"":"｜$menuName"?></title>
  <meta name="description" content="센시가 제안하는 새로운 미래를 경험해보세요. 센시의 가치, 철학 그리고 기술 등을 깊이 있게 살펴볼 수 있습니다.">
  <meta name="keywords" content="<?=$pageKeywords==""?"":"$pageKeywords"?>">
  <meta property="og:title" content="<?=$pageTitle==""?"":"$pageTitle"?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?=$pageUrl==""?"":"$pageUrl"?>" />
  <meta property="og:image" content="<?=$icon?>og.jpg" />
  <link rel="canonical" href="<?=$pageUrl==""?"":"$pageUrl"?>" />

  <link rel="shortcut icon" href="/favicon.ico"><!-- Chrome, Safari, IE -->
  <!-- Firefox, Opera (Chrome and Safari say thanks but no thanks) -->
  <link rel="icon" href="" sizes="16x16">
  <link rel="icon" href="" sizes="32x32">
  <link rel="icon" href="" sizes="72x72">
  <link rel="icon" href="" sizes="120x120">
  <link rel="icon" href="" sizes="128x128">
  <link rel="icon" href="" sizes="144x144">
  <link rel="icon" href="" sizes="152x152">

  <!-- for apple -->
  <link rel="apple-touch-icon-precomposed" href="/favicon/">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="/favicon/"><!-- 투명 -->

  <link rel="stylesheet" href="<?=$path?>src/css/common.css">
  <link rel="stylesheet" href="<?=$path?>src/css/<?=$menuClass?>.css">
  
  <?php
    require_once $path.'mobile-detect.php';
    $detect = new Mobile_Detect;
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'desktop');
    $scriptVersion = $detect->getScriptVersion();
    $icon = '/src/images/common/';
  
    include $path.'/functions.php';
  ?>

  <script type="text/javascript">var deviceType = "<?=$deviceType?>";</script>

