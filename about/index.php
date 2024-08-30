<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'about';
  $menuName = 'About Us';
  $img = '/src/images/'.$menuClass.'/'.$menuClass.'_';
  $pageTitle = '';
  $pageImages = '';
  $pageDescription = '디스크립션';
  $pageKeywords = '키워드';

  include $path."src/inc/head.php";
?>
</head>
<body>
  <div class="<?=$menuClass?>_wrap">
    <?php include $path."/src/inc/header.php"; ?>
    <div id="contents" class="<?=$menuClass?>_container">
      <?php
        $Keyvisual = array(
          'media-type' => 'image', // required, image or video
          'media-d' => $img.'keyvisual_d.jpg', // required
          'media-m' => $img.'keyvisual_m.jpg', // option
          'media-alt' => '', // required
          'dimmed' => 'all', // required
          'desc' => '센시는 비장애인과 장애인이 함께 보고 즐길 수 있는 세상을 만들기 위해 <br class="pc">지속적인 연구를 수행하며, 근본적인 문제를 해결하기 위해 끊임없이 도전합니다.', // option
        );
        printKeyvisual();
      ?>
      <section class="<?=$menuClass?>_overview">
        <div class="section_tit layout_inner" data-aos="fade-up">
          <h5 class="h5_">OVERVIEW</h5>
          <h3 class="h3_ eng">Evolving to <br class="mo">bring <br class="pc">the world together</h3>
        </div>
        <div class="overview_cont layout_inner_w">
          <div class="txt_wrap">
            <p class="sub_head " data-aos="fade-up">Brand history</p>
            <div class="info_wrap">
              <p class="body_txt info" data-aos="fade-up" data-aos-delay="100">
                ESG의 진정한 핵심가치는 내재화에 있으며 <br>
                센시는 다양성이 존중되고 장애가 차별받지 않는 <br>
                세상을 위해 하나의 기술로 시작하여,  <br>
                모두를 위한 기술로 지속가능한 세상을 만들어 갑니다.
              </p>
              <div class="ceo_info" data-aos="fade-up" data-aos-delay="200">
                <div class="profile">
                  <div class="img_box">
                    <img src="<?=$img?>ceo_profile.png"/>
                  </div>
                  <div class="txt_box">
                    <span>Victor Insik (서인식)</span>
                    <p>CEO & Founder of SENSEE, Inc</p>
                  </div>
                </div>
                <div class="profile">
                  <div class="img_box">
                    <img src="<?=$img?>ceo_profile02.png"/>
                  </div>
                  <div class="txt_box">
                    <span>Alice Jiyun Cho (조지윤)</span>
                    <p>CO - Founder & VP <br class="mo">of SENSEE, Inc</p>
                  </div>
                </div>
                <button class="btn_more" data-btn="ceo"><i></i></button>
              </div>
              <div class="img1">
                <picture data-aos="clip-up">
                  <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>overview01_d.jpg" />
                  <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>overview01_m.jpg" />
                  <img src="<?=$img?>overview01_d.jpg" data-src="<?=$img?>overview01_d.jpg" alt="" />
                </picture>
              </div>
            </div>
          </div>
          <div class="img_wrap">
            <div class="img2">
              <picture data-aos="clip-up">
                <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>overview02_d.jpg" />
                <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>overview02_m.jpg" />
                <img src="<?=$img?>overview02_d.jpg" data-src="<?=$img?>overview02_d.jpg" alt="" />
              </picture>
            </div>
            <div class="img3">
              <picture data-aos="clip-up" data-aos-delay="100">
                <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>overview03_d.jpg" />
                <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>overview03_m.jpg" />
                <img src="<?=$img?>overview03_d.jpg" data-src="<?=$img?>overview03_d.jpg" alt="" />
              </picture>
            </div>
            <p data-aos="fade-up" data-aos-delay="200">
              센시의 내일은 <br>
              점자 산업의 보편화와 함께 <br>
              장애인과 비장애인의 경계가 사라지는 <br class="mo">교육시장과 <br class="pc"> 
              지속 가능한 미래를 위한 <br class="mo">DE&I를 선도합니다.
            </p>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_movie taC layout_inner">
        <div class="tit_box" data-aos="fade-up">
          <img src="<?=$icon?>logo_cymbol_black.svg" alt="" class="logo_cymbol">
          <h4 class="h4_">Touch the world and <br>See the unseen</h4>
          <p class="body_txt">차이로 차별하지 않으며, 변화에 변함없는 원칙 <br>
          모두가 윤리적인 삶을 누릴 수 있는 세상을 <br class="mo">SENSEE가 만들어 갑니다.</p>
        </div>
        <div class="movie_btn_wrap" data-aos="fade-up">
          <div class="movie_btn">
            <button data-btn="brand_movie">
              <img src="<?=$img?>movie_thumb.png" alt=""/>
              <i></i>
            </button>
          </div>
          <p class="sub_tit4 ">SENSEE BRAND MOVIE</p>
        </div>
      </section>
    </div>

    <!-- CEO INTRODUCE POPUP -->
    <div class="popup" data-view="ceo">
      <button class="close" data-btn="ceo"></button>
      <div class="swiper">
        <ul class="swiper-wrapper">
          <li class="swiper-slide layout_inner ceo_sis">
            <div class="txt_box">
              <div class="meant">
                <p class="caption ">Touch the world and <br>See the unseen</p>
                <div class="sub_tit">
                  ESG의 진정한 핵심가치는 내재화에 있으며 <br>
                  센시는 다양성이 존중되고 장애가 차별받지 않는 <br>
                  세상을 위해 하나의 기술로 시작하여, <br>
                  모두를 위한 기술로 지속가능한 세상을 만들어 갑니다.
                </div>
              </div>
              <div class="name">
                <strong>Victor Insik (서인식)</strong><br>
                CEO & Founder of SENSEE, Inc
              </div>
            </div>
            <img src="<?=$img?>ceo.png" alt="" class="ceo_img">
          </li>
          <li class="swiper-slide layout_inner ceo_jjy">
            <div class="txt_box">
              <div class="meant">
                <p class="caption ">Touch the world and <br>See the unseen</p>
                <div class="sub_tit">
                  센시는 다양한 배경과 능력을 가진 <br>
                  모든 사람들이 접근할 수 있는 제품을 설계하고, <br>
                  함께 하는 경험의 가치를 중요시하며, <br>
                  포용적이고 지속 가능한 미래를 위해 <br>
                  기여하고자 합니다.
                </div>
              </div>
              <div class="name">
                <strong>Alice Jiyun Cho (조지윤)</strong><br>
                CO - Founder & VP of SENSEE, Inc
              </div>
            </div>
            <img src="<?=$img?>ceo02.png" alt="" class="ceo_img">
          </li>
        </ul>
        <div class="sld_nav">
          <span class="nxt"></span>
          <span class="prv"></span>
        </div>
      </div>
    </div>

    <!-- BRAND MOVIE POPUP -->
    <div class="popup" data-view="brand_movie">
      <button class="close" data-btn="brand_movie"></button>
      <video src="<?=$img?>brand_movie.mp4" playsinline controls></video>
    </div>
    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/<?=$menuClass?>.js"></script>
  </div>
</body>

</html>