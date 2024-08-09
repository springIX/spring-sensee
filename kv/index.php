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
  .full-visual .image-area {
  z-index: 0
  }

  .full-visual .image-area img {
    width: 100%;
    vertical-align: top
  }

  .full-visual .floating-area {
    z-index: 1
  }

  .full-visual .text-box {
    color: #fff
  }

  .full-visual .bg-bright .text-box {
    color: #000
  }

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

  .main-wrap .gray {
    background-color: #f5f5f5
  }

  .main-wrap .main-title .desc {
    padding-top: 4vw
  }

  @media(min-width: 751px) {
    .main-wrap .main-title .desc {
      padding-top: 1.4184397163vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .main-title .desc {
      padding-top: 20px
    }
  }

  .main-wrap .main-title .desc {
    color: #333
  }

  @media(max-width: 750px) {
    .main-wrap .main-title .desc {
      max-width: 84vw;
      line-height: 153.3333333333%
    }
  }

  .main-wrap .main-kv {
    height: 100vh
  }

  @media(min-width: 751px) {
    .main-wrap .main-kv {
      height: auto
    }
  }

  .main-wrap .key-visual {
    background-color: #000
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual {
      max-height: 92vh
    }
  }

  .main-wrap .key-visual .swiper-slide *,
  .main-wrap .key-visual .swiper-slide *:after,
  .main-wrap .key-visual .swiper-slide *:before {
    -webkit-backface-visibility: hidden;
    -webkit-transform: translateZ(0);
    -webkit-transform: translate3d(0, 0, 0)
  }

  .main-wrap .key-visual .swiper-wrapper {
    will-change: transform;
    align-items: flex-start;
    height: 100% !important
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-wrapper {
      max-height: 92vh
    }
  }

  .main-wrap .key-visual .swiper-slide {
    position: relative;
    display: block;
    will-change: contents;
    z-index: 1;
    min-width: 100%
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-slide {
      min-width: 0;
      text-align: center;
      max-height: 66.6666666667vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-slide {
      max-height: 940px
    }
  }

  .main-wrap .key-visual .swiper-slide-active {
    z-index: 2
  }

  .main-wrap .key-visual .swiper-slide .image-area {
    position: relative;
    max-height: 92vh;
    overflow: hidden
  }

  .main-wrap .key-visual .swiper-slide .image-area:before {
    display: block;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 21.3333333333vw;
    background: linear-gradient(360deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%);
    z-index: 1
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-slide .image-area:before {
      height: 14.1843971631vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-slide .image-area:before {
      height: 200px
    }
  }

  .main-wrap .key-visual .swiper-slide .image-area:after {
    display: block;
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 21.3333333333vw;
    background: linear-gradient(360deg, rgb(0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%);
    z-index: 1
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-slide .image-area:after {
      display: block;
      height: 28.3687943262vw;
      background: linear-gradient(360deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 100%)
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-slide .image-area:after {
      height: 400px
    }
  }

  .main-wrap .key-visual .swiper-slide .image-area .inner {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden
  }

  @media(max-width: 750px) {
    .main-wrap .key-visual .swiper-slide .image-area .inner {
      height: 120vw
    }
  }

  .main-wrap .key-visual .swiper-slide .image-area .inner .kv-video {
    position: absolute;
    z-index: 4;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0
  }

  .main-wrap .key-visual .swiper-slide .image-area .kv-video {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%
  }

  .main-wrap .key-visual .swiper-slide .image-area video {
    width: 100%;
    height: 120vw;
    will-change: auto;
    transform: translateZ(0);
    object-fit: cover
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-slide .image-area video {
      height: 100%;
      vertical-align: top
    }
  }

  .main-wrap .key-visual .swiper-pagination {
    display: flex;
    align-items: center;
    color: #fff;
    padding: 9.3333333333vw 0 8vw
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-pagination {
      padding: 0
    }
  }

  .main-wrap .key-visual .swiper-pagination-wrap {
    width: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-pagination-wrap {
      position: absolute;
      z-index: 10;
      bottom: 1.4893617021vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-pagination-wrap {
      bottom: 21px
    }
  }

  .main-wrap .key-visual .swiper-pagination-wrap .btn-play,
  .main-wrap .key-visual .swiper-pagination-wrap .btn-pause {
    padding: 0;
    background: none;
    margin-top: .6666666667vw;
    margin-left: 3.2vw;
    color: #fff
  }

  @media(min-width: 751px) {

    .main-wrap .key-visual .swiper-pagination-wrap .btn-play,
    .main-wrap .key-visual .swiper-pagination-wrap .btn-pause {
      margin-top: 0;
      margin-left: .7092198582vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {

    .main-wrap .key-visual .swiper-pagination-wrap .btn-play,
    .main-wrap .key-visual .swiper-pagination-wrap .btn-pause {
      margin-left: 10px
    }
  }

  .main-wrap .key-visual .swiper-pagination-wrap .btn-play:not(.active),
  .main-wrap .key-visual .swiper-pagination-wrap .btn-pause:not(.active) {
    display: none
  }

  .main-wrap .key-visual .swiper-pagination-bullet {
    display: inline-block;
    background-color: #fff;
    cursor: pointer;
    position: relative;
    width: 4vw;
    height: 1.0666666667vw;
    margin: 0 1.3333333333vw
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-pagination-bullet {
      width: 1.4184397163vw;
      height: .2836879433vw;
      margin: 0 .4255319149vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-pagination-bullet {
      width: 20px
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-pagination-bullet {
      height: 4px
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-pagination-bullet {
      margin: 0 6px
    }
  }

  .main-wrap .key-visual .swiper-pagination-bullet .category {
    position: absolute;
    overflow: hidden;
    top: -5.8666666667vw;
    left: 0;
    font-size: 3.2vw;
    line-height: 125%;
    white-space: nowrap
  }

  @media(min-width: 375px)and (max-width: 750px) {
    .main-wrap .key-visual .swiper-pagination-bullet .category {
      font-size: 3.2vw
    }
  }

  @media(min-width: 375px)and (max-width: 375pxpx) {
    .main-wrap .key-visual .swiper-pagination-bullet .category {
      font-size: 12px
    }
  }

  @media(max-width: 374px) {
    .main-wrap .key-visual .swiper-pagination-bullet .category {
      font-size: 12px
    }
  }

  @media(min-width: 1411px) {
    .main-wrap .key-visual .swiper-pagination-bullet .category {
      font-size: 14px
    }
  }

  @media(min-width: 751px)and (max-width: 1410px) {
    .main-wrap .key-visual .swiper-pagination-bullet .category {
      font-size: .9929078014vw
    }
  }

  @media(min-width: 751px)and (max-width: 1208.5714285714px) {
    .main-wrap .key-visual .swiper-pagination-bullet .category {
      font-size: 12px
    }
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-pagination-bullet .category {
      top: -1.5602836879vw;
      line-height: 121.4285714286%
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-pagination-bullet .category {
      top: -22px
    }
  }

  .main-wrap .key-visual .swiper-pagination-bullet .category span {
    display: block;
    vertical-align: top;
    opacity: 0;
    transform: translateY(100%)
  }

  .main-wrap .key-visual .swiper-pagination-bullet-active {
    width: 21.3333333333vw;
    background: rgba(255, 255, 255, .2)
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-pagination-bullet-active {
      width: 7.0921985816vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-pagination-bullet-active {
      width: 100px
    }
  }

  .main-wrap .key-visual .swiper-pagination-bullet-active .category span {
    opacity: 1;
    transform: translateY(0px);
    transition: all .3s linear;
    transition-delay: .8s
  }

  .main-wrap .key-visual .swiper-pagination-bullet-active .progress {
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

  .main-wrap .key-visual .swiper-pagination-bullet.on {
    position: relative;
    width: 21.3333333333vw;
    background: rgba(255, 255, 255, .2)
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .swiper-pagination-bullet.on {
      width: 7.0921985816vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .swiper-pagination-bullet.on {
      width: 100px
    }
  }

  .main-wrap .key-visual .text-box {
    color: #fff;
    width: 100%;
    padding: 0 5.3333333333vw
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .text-box {
      display: inline-block;
      max-width: 65.9574468085vw;
      transition: all .1s linear;
      padding: 0
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box {
      max-width: 930px
    }
  }

  .main-wrap .key-visual .text-box .eyebrow {
    font-size: 4.2666666667vw;
    line-height: 125%;
    font-weight: 600
  }

  @media(min-width: 375px)and (max-width: 750px) {
    .main-wrap .key-visual .text-box .eyebrow {
      font-size: 4.2666666667vw
    }
  }

  @media(min-width: 375px)and (max-width: 375pxpx) {
    .main-wrap .key-visual .text-box .eyebrow {
      font-size: 16px
    }
  }

  @media(max-width: 374px) {
    .main-wrap .key-visual .text-box .eyebrow {
      font-size: 16px
    }
  }

  @media(min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow {
      font-size: 24px
    }
  }

  @media(min-width: 751px)and (max-width: 1410px) {
    .main-wrap .key-visual .text-box .eyebrow {
      font-size: 1.7021276596vw
    }
  }

  @media(min-width: 751px)and (max-width: 940px) {
    .main-wrap .key-visual .text-box .eyebrow {
      font-size: 16px
    }
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .text-box .eyebrow {
      line-height: 141.6666666667%
    }
  }

  .main-wrap .key-visual .text-box .eyebrow .icon-oled {
    display: inline-block;
    width: 16.2666666667vw;
    height: 4.2666666667vw;
    margin-right: 1.0666666667vw;
    background: url(../images/main/logo-oled.svg) no-repeat center;
    background-size: auto 100%
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled {
      width: 8.085106383vw;
      height: 2.1276595745vw;
      margin-right: .5673758865vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled {
      width: 114px
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled {
      height: 30px
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled {
      margin-right: 8px
    }
  }

  .main-wrap .key-visual .text-box .eyebrow .icon-oled-t {
    display: inline-block;
    width: 22.8vw;
    height: 4.2666666667vw;
    background: url(../images/main/logo-oled-t.svg) no-repeat center;
    background-size: auto 100%
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-t {
      width: 11.3475177305vw;
      height: 2.1276595745vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-t {
      width: 160px
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-t {
      height: 30px
    }
  }

  .main-wrap .key-visual .text-box .eyebrow .icon-oled-secret-cinema {
    display: inline-block;
    width: 56vw;
    height: 3.2vw;
    background: url(../images/main/lg-display-oledspace-main-secret-cinema-logo.svg) no-repeat center;
    background-size: auto 100%
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-secret-cinema {
      width: 24.8226950355vw;
      height: 1.4184397163vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-secret-cinema {
      width: 350px
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-secret-cinema {
      height: 20px
    }
  }

  .main-wrap .key-visual .text-box .eyebrow .icon-oled-meta {
    display: inline-block;
    width: 38.6666666667vw;
    height: 4.2666666667vw;
    background: url(../images/main/lg-display-oledspace-main-meta-technology-logo-d.svg) no-repeat center;
    background-size: auto 100%
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-meta {
      width: 19.2907801418vw;
      height: 2.1276595745vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-meta {
      width: 272px
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-meta {
      height: 30px
    }
  }

  .main-wrap .key-visual .text-box .eyebrow .icon-oled-gaming {
    display: inline-block;
    width: 34.1333333333vw;
    height: 4.2666666667vw;
    background: url(../images/main/lg-display-oledspace-main-oled-gaming-logo.svg) no-repeat center;
    background-size: auto 100%
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-gaming {
      width: 17.0212765957vw;
      height: 2.1276595745vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-gaming {
      width: 240px
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .text-box .eyebrow .icon-oled-gaming {
      height: 30px
    }
  }

  .main-wrap .key-visual .text-box .title {
    margin: 0 auto;
    max-width: 80vw
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .text-box .title {
      max-width: 100%
    }
  }

  .main-wrap .key-visual .text-box .desc {
    max-width: 80vw
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .text-box .desc {
      max-width: 100%
    }
  }

  .main-wrap .key-visual .text-box>div:not(.cta-wrap) {
    overflow: hidden
  }

  .main-wrap .key-visual .text-box>div:not(.cta-wrap) span {
    display: inline-block;
    vertical-align: top;
    align-items: center;
    opacity: 0;
    transform: translateY(100%)
  }

  .main-wrap .key-visual .text-box>div:not(.cta-wrap).eyebrow span {
    display: block
  }

  .main-wrap .key-visual .text-box .cta-wrap {
    opacity: 0;
    transform: translateY(50px)
  }

  .main-wrap .key-visual .text-box .cta-wrap .btn span::after {
    transform: rotate(135deg)
  }

  .main-wrap .key-visual.swiper-load .text-box>div:not(.cta-wrap) span {
    opacity: 1;
    transform: translateY(0px);
    transition: all .5s linear;
    transition-delay: 300ms
  }

  .main-wrap .key-visual.swiper-load .text-box .cta-wrap {
    opacity: 1;
    transform: translateY(0px);
    transition: all .5s linear;
    transition-delay: 300ms
  }

  .main-wrap .key-visual .image-area {
    position: relative;
    width: 100%;
    transition: all .1s linear
  }

  .main-wrap .key-visual .image-area .img {
    position: relative
  }

  .main-wrap .key-visual .image-area .img:before {
    display: block;
    content: "";
    width: 100%;
    padding-top: 120%
  }

  .main-wrap .key-visual .image-area .img>picture,
  .main-wrap .key-visual .image-area .img>img,
  .main-wrap .key-visual .image-area .img>video,
  .main-wrap .key-visual .image-area .img>iframe {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .image-area .img {
      position: relative
    }

    .main-wrap .key-visual .image-area .img:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 48.9583333333%
    }

    .main-wrap .key-visual .image-area .img>picture,
    .main-wrap .key-visual .image-area .img>img,
    .main-wrap .key-visual .image-area .img>video,
    .main-wrap .key-visual .image-area .img>iframe {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      width: 100%
    }
  }

  .main-wrap .key-visual .image-area .dimmed {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .5);
    z-index: 1;
    opacity: 0
  }

  .main-wrap .key-visual .btn-floating {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    text-decoration: none
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .btn-floating {
      display: none
    }
  }

  .main-wrap .key-visual .btn-floating:hover~.floating-area .btn.box,
  .main-wrap .key-visual .btn-floating:focus~.floating-area .btn.box {
    background: #c00f41;
    color: #fff;
    border-color: #c00f41;
    transition: background-color .2s, border-color .2s, color .2s
  }

  .main-wrap .key-visual .btn-floating:hover~.floating-area .btn.box span:after,
  .main-wrap .key-visual .btn-floating:focus~.floating-area .btn.box span:after {
    transition: border-color .2s;
    border-color: #fff
  }

  .main-wrap .key-visual .floating-area {
    position: relative;
    margin-top: -21.3333333333vw;
    width: 100%;
    z-index: 3;
    pointer-events: none
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .floating-area {
      position: absolute;
      left: 0;
      width: 100%;
      z-index: 3;
      pointer-events: none;
      margin-top: 0;
      bottom: 8.5106382979vw
    }
  }

  @media(min-width: 751px)and (min-width: 1411px) {
    .main-wrap .key-visual .floating-area {
      bottom: 120px
    }
  }

  .main-wrap .key-visual .floating-area a {
    pointer-events: all
  }

  .main-wrap .key-visual .floating-area:before {
    display: block;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(360deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 100%);
    z-index: 0
  }

  @media(min-width: 751px) {
    .main-wrap .key-visual .floating-area:before {
      height: 43.3333333333vw
    }
  }

</style>
</head>


<body>
  <div class="<?=$menuClass?>_wrap">
    <?php include $path."/src/inc/header.php"; ?>
    <main class="<?=$menuClass?>_container">
      <!-- key visual -->
				<div class="main-kv full-visual key-visual swiper-container">
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
								<div class="eyebrow"><span><em class="icon-oled"><span class="sr-only">OLED 로고</span></em></span></div>
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
								<div class="eyebrow"><span><em class="icon-oled-t"><span class="sr-only">OLED.T 로고</span></em></span></div>
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
								<div class="eyebrow"><span><em class="icon-oled-meta"><span class="sr-only">META Technology 로고</span></em></span></div>
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