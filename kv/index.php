<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'main';
  $menuName = '';
  $img = '/src/images/'.$menuClass.'/'.$menuClass.'_';
  $icon = '/src/images/common/';
  $pageTitle = '';
  $pageImages = '';
  $pageDescription = '디스크립션';
  $pageKeywords = '키워드';

  include $path."/src/inc/head.php";
  
?>
<style>
  body.hidden {
    height: 100%;
    min-height: 100%;
    overflow: hidden !important;
    touch-action: none
  }

  .desktop {
    display: none
  }

  @media(min-width: 751px) {
    .desktop {
      display: block
    }
  }

  .mobile {
    display: block
  }

  @media(min-width: 751px) {
    .mobile {
      display: none
    }
  }
  .main-kv {
    height: 100vh
  }

  @media(min-width: 751px) {
    .main-kv {
      height: auto
    }
  }

  .key-visual {
    background-color: #000
  }

  @media(min-width: 751px) {
    .key-visual {
      max-height: 92vh
    }
  }

  .key-visual .swiper-slide *,
  .key-visual .swiper-slide *:after,
  .key-visual .swiper-slide *:before {
    -webkit-backface-visibility: hidden;
    -webkit-transform: translateZ(0);
    -webkit-transform: translate3d(0, 0, 0)
  }

  .key-visual .swiper-wrapper {
    will-change: transform;
    align-items: flex-start;
    height: 100% !important
  }

  .key-visual .swiper-slide {
    position: relative;
    display: block;
    will-change: contents;
    z-index: 1;
    min-width: 100%
  }


  .key-visual .swiper-slide-active {
    z-index: 2
  }

  .key-visual .swiper-slide .image-area {
    position: relative;
    max-height: 1080rem;
    overflow: hidden
  }

  .key-visual .swiper-slide .image-area .inner {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden
  }

  .key-visual .swiper-slide .image-area .inner .kv-video {
    position: absolute;
    z-index: 4;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0
  }

  .key-visual .swiper-slide .image-area .kv-video {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%
  }

  .key-visual .swiper-slide .image-area video {
    width: 100%;
    height: 100vh;
    will-change: auto;
    transform: translateZ(0);
    object-fit: cover
  }

  .key-visual .swiper-pagination {
    position: static;
    display: flex;
    align-items: center;
    color: #fff;
  }

  .key-visual .swiper-pagination-wrap {
    width: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    position: relative;
    z-index: 999;
  }

  .key-visual .swiper-pagination-wrap .btn-play,
  .key-visual .swiper-pagination-wrap .btn-pause {
    padding: 0;
    background: none;
    margin-left: 10rem;
    color: #fff
  }

  .key-visual .swiper-pagination-wrap .btn-play:not(.active),
  .key-visual .swiper-pagination-wrap .btn-pause:not(.active) {
    display: none
  }

  .key-visual .swiper-pagination-bullet {
    display: inline-block;
    background-color: #fff;
    cursor: pointer;
    position: relative;
    width: 20rem;
    height: 4rem;
    margin: 0 6rem;
    border-radius: 0;
    opacity: 1;
  }

  .key-visual .swiper-pagination-bullet-active {
    width: 100rem;
    background: rgba(255, 255, 255, .2)
  }

  .key-visual .swiper-pagination-bullet-active .progress {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transform-origin: left;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    background-color: #c00f41
  }

  .key-visual .swiper-pagination-bullet.on {
    position: relative;
    width: 100rem;
    background: rgba(255, 255, 255, .2)
  }

  .key-visual .text-box {
    color: #fff;
    width: 100%;
    padding: 0 5.3333333333vw
  }

  .key-visual .text-box .title {
    margin: 0 auto;
    max-width: 80vw
  }

  .key-visual .text-box .desc {
    max-width: 80vw
  }
  .key-visual .text-box>div:not(.cta-wrap) {
    overflow: hidden
  }

  .key-visual .text-box>div:not(.cta-wrap) span {
    display: inline-block;
    vertical-align: top;
    align-items: center;
    opacity: 0;
    transform: translateY(100%)
  }

  .key-visual.swiper-load .text-box>div:not(.cta-wrap) span {
    opacity: 1;
    transform: translateY(0px);
    transition: all .5s linear;
    transition-delay: 300ms
  }

  .key-visual .image-area {
    position: relative;
    width: 100%;
    transition: all .1s linear
  }

  .key-visual .image-area .img {
    position: relative
  }

  .key-visual .image-area .img:before {
    display: block;
    content: "";
    width: 100%;
    padding-top: 120%
  }

  .key-visual .image-area .img>picture,
  .key-visual .image-area .img>img,
  .key-visual .image-area .img>video,
  .key-visual .image-area .img>iframe {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%
  }
  .key-visual .btn-floating:hover~.floating-area .btn.box,
  .key-visual .btn-floating:focus~.floating-area .btn.box {
    background: #c00f41;
    color: #fff;
    border-color: #c00f41;
    transition: background-color .2s, border-color .2s, color .2s
  }

  .key-visual .btn-floating:hover~.floating-area .btn.box span:after,
  .key-visual .btn-floating:focus~.floating-area .btn.box span:after {
    transition: border-color .2s;
    border-color: #fff
  }

  .key-visual .floating-area {
    position: relative;
    margin-top: -21.3333333333vw;
    width: 100%;
    z-index: 3;
    pointer-events: none
  }

  .key-visual .floating-area a {
    pointer-events: all
  }


</style>
</head>


<body>
  <div class="<?=$menuClass?>_wrap">
    <?php include $path."/src/inc/header.php"; ?>
    <main class="<?=$menuClass?>_container">
      <!-- key visual -->
				<div class="main-kv key-visual swiper mySwiper">
					<ul class="swiper-wrapper">
						<li class="swiper-slide video-slide">
							<a href="#" class="btn-floating" aria-hidden="true" tabindex="-1">&nbsp;</a>
							<div class="image-area">
								<div class="inner desktop">
									<video 
										class="video" 
										poster="<?=$img?>visual_d.jpg"
										src="<?=$img?>visual01_d.mp4" aria-label="" preload="none" autoplay loop muted playsinline></video>
								</div>
								<div class="inner mobile">
									<video 
										class="video" 
										poster=""
										src="<?=$img?>visual01_m.mp4" aria-label="" preload="none" autoplay loop muted playsinline></video>
									<span class="test"></span>
								</div>
								<span class="dimmed"></span>
							</div>							
							<div class="floating-area">
								<div class="text-box">
									<div class="title"><span>Mini LED vs OLED</span></div>
									<div class="desc"><span>어떤 디스플레이를 선택해야 할까요?<br>정답은 결국 OLED입니다.</span></div>
								</div>
							</div>
						</li>
						<li class="swiper-slide video-slide">
							<a href="#" class="btn-floating" aria-hidden="true" tabindex="-1">&nbsp;</a>
							<div class="image-area">
								<div class="inner desktop">
									<video 
										class="video" 
										poster="<?=$img?>visual_d.jpg"
										src="<?=$img?>visual02_d.mp4" aria-label="" preload="none" autoplay loop muted playsinline></video>
								</div>
								<div class="inner mobile">
									<video 
										class="video" 
										poster=""
										src="<?=$img?>visual01_m.mp4" aria-label="" preload="none" autoplay loop muted playsinline></video>
									<span class="test"></span>
								</div>
								<span class="dimmed"></span>
							</div>							
							<div class="floating-area">
								<div class="text-box">
									<div class="title"><span>디스플레이 너머의 새로운 세상</span></div>
									<div class="desc"><span>공간의 경계를 허무는 투명 OLED를 소개합니다.</span></div>
								</div>
							</div>
						</li>
						<li class="swiper-slide">
							<a href="#" class="btn-floating" aria-hidden="true" tabindex="-1">&nbsp;</a>
							<div class="image-area">
								<div class="img">
									<picture>
										<source media="(min-width: 751px)" srcset="<?=$img?>visual_d.jpg" />
										<source media="(max-width: 750px)" srcset="<?=$img?>/sustainability_keyvisual_m.jpg" />
										<img src="<?=$aPath?>/assets/images/blank.svg" data-src="<?=$img?>/sustainability_keyvisual_m.jpg, <?=$img?>visual_d.jpg" class="lazy" alt="" aria-hidden="true" />
									</picture>
								</div>
								<span class="dimmed"></span>
							</div>
							<div class="floating-area">
								<div class="text-box">
									<div class="title"><span>프리미엄 OLED의 진화된 밝기와 디테일</span></div>
									<div class="desc"><span>3세대 OLED META Technology는 완전히 새로운 세상을 보여줍니다.</span></div>
								</div>
							</div>
						</li>
					</ul>
					<button type="button" class="swiper-button-prev"></button>
					<button type="button" class="swiper-button-next"></button>
					<div class="swiper-pagination-wrap">
						<div class="swiper-pagination"></div>
						<button type="button" class="btn btn-play size-regular"></button>
						<button type="button" class="btn btn-pause size-regular active"></button>
					</div>
				</div>
				<!-- // key visual -->
    </main>
    <?php include $path."src/inc/footer.php"; ?>
  </div>
</body>

</html>