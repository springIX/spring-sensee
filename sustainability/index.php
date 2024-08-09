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
<body>
  <div class="<?=$menuClass?>_wrap">
    <?php include $path."src/inc/header.php"; ?>
    <div class="<?=$menuClass?>_container">
      <!-- Key visual -->
      <?php
          $Keyvisual = array(
            'media-type' => 'image', // required, image or video
            'media-d' => $img.'keyvisual_d.jpg', // required
            'media-m' => $img.'keyvisual_m.jpg', // option
            'media-alt' => '', // required
            'dimmed' => 'circle', // required
            'title' => 'Sustainability', // required
            'desc' => '센시는 환경적 가치와 함께 장애인과 비장애인의 편견을 없애는 공평한 사회 추구, <br class="pc">포용적 교육, 공익을 위한 사회공헌등 모두가 평등한 사회를 위한 경영철학을 가지고 있습니다. ', // option
          );
          printKeyvisual();
      ?>
      <!-- // Key visual -->
      <section class="<?=$menuClass?>_inner">
        <div class="<?=$menuClass?>_esg">
          <div class="_contents" id="content1">
            <div class="esg_inner layout_inner_l">
              <div class="section_tit">
                <div class="eye">ESG</div>
                <h3 class="h3_">작은 실천으로 더 큰 꿈을 향해</h3>
              </div>
              <div class="txt_box">
                센시는 KC 인증, FSC 인증을 받은 제품을 친환경 소재를 사용하여<br class="pc">
                생산하고 있습니다. 환경을 위해 다양한 활동을 추진함으로써,<br class="pc">
                보다 깨끗하고 건강한 지구를 만드는데 기여하고자 합니다.<br class="pc">
              </div>
            </div>
          </div>
          <div class="<?=$menuClass?>_esg_contents" id="content2">
            <div class="f_center">
              <h3 class="esg_title">ESG</h3>
            </div>
          </div>
          <div class="esg_earth_wrap">
            <div class="<?=$menuClass?>_esg_contents" id="content3">
              <div class="p_center">
                <img class="sensee_symbol_black" src="<?=$icon?>logo_cymbol_black.svg" alt="" />
              </div>
            </div>
            <div class="<?=$menuClass?>_esg_contents" id="content4">
              <div class="p_center" id="esg_contents_img">
                <img class="<?=$menuClass?>_earth_img" src="<?=$img?>earth.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>


      <div style="height: 200vh;">
        Scroll to see the effect...
      </div>
    </div>        
    <?php include $path."/src/inc/footer.php"; ?>
    <!-- <script src="<?=$path?>src/js/sustainability.js"></script> -->
    <script>
      gsap.registerPlugin(ScrollTrigger);

      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: ".sustainability_inner",
          start: "top top", // 섹션이 화면 상단에 닿으면 트리거
          end: "+=300%", // 3배 길이 동안 애니메이션이 지속됨
          scrub: true, // 스크롤에 따라 애니메이션 진행
          pin: true, // 섹션을 고정
          markers: true, // 디버그용 마커
        }
      });

      tl.to("#content1", { opacity: 0, duration: 2 })
        .to("#content2", { opacity: 1, duration: 2 }, "-=0.5")
        .to("#content2", { 
          opacity: 0, 
          scale: 0.4,
          duration: 2 // 애니메이션 지속 시간
        })
        .to("#content3", { opacity: 1, duration: 2 }, "-=0.5")
        .to("#content4", { opacity: 1, duration: 2 }, "+=0.5")
        .to("#content3", { opacity: 0, duration: 2 })
        .to("#esg_contents_img", {
          left: "50%", // 왼쪽으로 200px 이동 (원하는 값으로 조정 가능)
          y: "350rem",
          scale: 10, // 크기를 두 배로 키움
          duration: 2 // 애니메이션 지속 시간
        }); 
    </script>
  </div>
</body>

</html>