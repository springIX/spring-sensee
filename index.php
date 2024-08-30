<?php 
  $path = './';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'main';
  $menuName = 'Touch the world and See the unseen';
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
    <main id="contents" class="<?=$menuClass?>_container">
      <section class="<?=$menuClass?>_visual m_vh100">
        <div class="swiper image_area">
          <ul class="swiper-wrapper">
            <li class="swiper-slide video-slide" data-tit="TOGETHER" data-info="센시의 보편적 일상의 순간" data-cont="vid" data-aos="zoom-out">
              <video src="<?=$img?>visual01.mp4" muted playsinline autoplay class="main_visual_sld_view" poster="/src/images/main/main_visual01.jpg"></video>
            </li>
            <li class="swiper-slide video-slide" data-tit="MEANINGFUL" data-info="모두를 위한 유의미함" data-cont="vid">
              <video src="<?=$img?>visual02.mp4" muted playsinline autoplay class="main_visual_sld_view" poster="/src/images/main/main_visual02.jpg"></video>
            </li>
            <li class="swiper-slide video-slide" data-tit="BASICS" data-info="차이로 차별하지 않는 기본" data-cont="vid">
              <video src="<?=$img?>visual03.mp4" muted playsinline autoplay class="main_visual_sld_view" poster="/src/images/main/main_visual03.jpg"></video>
            </li>
          </ul>
        </div>
        <div class="layout_inner main_visual_cont">
          <div class="inner">
            <h2 class="h2_" data-aos="fade-up">Touch the world <i></i> See the unseen</h2>
            <div class="pagi"></div>
            <span class="btn_ctrl play" data-aos="zoom-in" data-aos-delay="400"></span>
            <span class="btn_ctrl pause" data-aos="zoom-in" data-aos-delay="400"></span>
          </div>
        </div>
        <div class="sld_nav">
          <span class="nxt"></span>
          <span class="prv"></span>
        </div>
      </section>
      <section class="<?=$menuClass?>_intro">
        <div class="section_tit taC layout_inner" data-aos="fade-up">
          <h5 class="h5_">SENSEE</h5>
          <h2 class="h3_">모두를 위한 기술</h2>
          <p class="body_txt">
          센시는 정보 접근의 차별이 없는 세상을 위해 <br>다양한 기술과 솔루션을 공급합니다.
          </p>
        </div>
        <div class="<?=$menuClass?>_intro_visual">
          <strong class="bg_tit  taC" data-aos="fade-in">
            TOGETHER <br>
            MEANINGFUL <br>
            BASICS
          </strong>
          <img src="<?=$img?>intro.png" alt="" class="hand_img" data-aos="" />
          <i data-aos=""></i>
        </div>
      </section>
      <section class="<?=$menuClass?>_brand">
        <div class="<?=$menuClass?>_brand_info layout_inner_l">
          <div class="section_tit" data-aos="fade-up">
            <h6 class="h5_">BRAND STORY</h6>
            <h3 class="h3_ eng">Touch the world and <br class="pc">See the unseen</h3>
          </div>
          <div class="txt_box">
            <div class="txt_wrap">
              <p data-aos="fade-up">
                센시는 AI 기술로 모두에게 포용적인 콘텐츠를 <br>
                제공하며, 인공지능 기반의 점자 편집, <br>
                이미지 변환, 점자 디스플레이 기술을 통해 <br>
                모든 사람이 접근할 수 있도록 합니다.
              </p>
              <p data-aos="fade-up" data-aos-delay="100">
                센시는 미래를 선도합니다. <br>
                2024년 UN Zero Project에서 <br>
                포용적 교육(Inclusive Education)과 ICT 분야를 <br> 
                비롯하여 국내 최초로 전 세계 12개 혁신 솔루션에 <br>
                선정되었으며, 다양한 점자 콘텐츠와 특수 패키지 <br>
                등을 기획하고 솔루션을 제공합니다.
              </p>
            </div>
            <a href="/about/" class="btn_more" data-aos="fade-up"><i></i></a>
          </div>
        </div>
        <div class="<?=$menuClass?>_brand_visual">
          <picture class="brand_bg" data-aos="clip-up">
            <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>brand_d.jpg" />
            <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>brand_m.jpg" />
            <img src="<?=$img?>brand_d.jpg" data-src="<?=$img?>brand_d.jpg" alt="" />
          </picture>
          <div class="txt_box">
            <p class="tit body_txt">
              <span>TOGETHER</span><i></i>
              <span>MEANINGFUL</span><i></i>
              <span>BASICS</span>
            </p>
            <div class="txt">
              <p data-aos="fade-up">
                센시는 차별 없는 세상을 지향합니다. <br>
                모두가 공존할 수 있는 윤리적이고 포용적인 세상을 위해 지속적으로 변화하며, <br class="pc"> 
                점자와 융합된 인쇄산업의 새로운 문화를 창조해 나갑니다. <br><br>

                일상의 순간들을 읽어내고, <br>
                일상의 경계를 지우며 확장시키는 온전한 삶을, <br class="pc">
                다양성을 인정하여 모두가 함께 즐기는 세상을 센시가 만들어 갑니다.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_tech">
        <div class="section_tit taC layout_inner" data-aos="fade-up">
          <h5 class="h5_">TECHNOLOGY</h5>
          <h5 class="h3_">모두를 위한 기술, <br class="mo">함께하는 세상</h5>
          <h5 class="body_txt">
            센시의 독자적인 AI 데이터 분석 및 자동 편집 기술은 시각장애인도 함께 볼 수 있는 Universal 콘텐츠를 공급합니다. <br>
            센시의 AI 기술력과 모두를 위한 콘텐츠 디자인은 UN Zero Project의 혁신 솔루션으로 선정되어 <span class="ib_br">글로벌로 확장하고 있습니다.</span> <br><br>
            글자와 점자를 함께 제공할 수 있는 개인형, 산업용 및 디지털 플랫폼 구축 기술은 장애인과 비장애인이 함께 <span class="ib_br">즐기는 세상에 기여합니다.</span><br>
            끊임없는 기술 개발, 기술의 산업 연결 및 글로벌 인프라 구축으로 진정한 ESG의 가치를 실천합니다.
          </h5>
        </div>
        <div class="tech_visual" data-aos="">
          <div class="visual_wrap">
            <img src="<?=$img?>tech.png" alt="" class="mom_baby" data-aos="fade-up"/>
          </div>
          <div class="leaf_box">
            <i class="leaf1"><img src="<?=$icon?>leaf.png" alt=""/></i>
            <i class="leaf2 pc"><img src="<?=$icon?>leaf.png" alt=""/></i>
            <i class="leaf3"><img src="<?=$icon?>leaf.png" alt=""/></i>
            <i class="leaf4"><img src="<?=$icon?>leaf.png" alt=""/></i>
            <i class="leaf5"><img src="<?=$icon?>leaf.png" alt=""/></i>
            <i class="leaf6"><img src="<?=$icon?>leaf.png" alt=""/></i>
          </i>
        </div>
      </section>
      <section class="<?=$menuClass?>_together layout_inner" data-aos="" data-aos-offset="600">
        <div class="section_tit" data-aos="fade-up">
          <h5 class="h5_">DESIGN STORY</h5>
          <h3 class="h3_">
            센시의 디자인은 <br>
            모든 사람을 위한 철학이 <br> 
            담겨있습니다.
          </h3>
        </div>
        <div class="<?=$menuClass?>_together_visual">
          <div class="circle_box">
            <i class="circle circle1 p_center"></i>
            <i class="circle circle2 p_center"></i>
            <i class="circle circle3 p_center"></i>
            <i class="circle circle4 p_center"></i>
            <i class="ball ball1 yellow"></i>  
            <i class="ball ball2 green"></i>  
            <i class="ball ball3 red"></i>  
            <i class="ball ball4 blue"></i>  
            <i class="ball ball5 blue pc"></i>  
            <i class="ball ball6 green"></i>  
            <i class="ball ball7 red pc"></i>  
            <i class="ball ball8 red"></i>  
            <i class="ball ball9 yellow"></i>  
            <i class="ball ball10 yellow"></i>  
            <i class="ball ball11 green"></i>  
            <i class="ball ball12 green pc"></i>  
            <img src="<?=$icon?>logo_cymbol.svg" alt="" class="logo_cymbol p_center">
          </div>
        </div>
        <div class="txt_box sub_tit3">
          <p class="body_txt">
            센시의 기술력은 <br>
            세상의 모든 글과 그림, 그리고 사진에 이르기까지 <br>
            기존의 콘텐츠들을 모두에게 제공할 수 있으며, <br>
            센시가 독자 개발한 콘텐츠는 점자 교육시장을 <br class="mo"> 
            선도합니다.
          </p>
        </div>
        <img src="<?=$img?>together_hand.png" alt="" class="hand_img">
      </section>
      <section class="<?=$menuClass?>_innovation">
        <div class="sticky_box layout_inner vh100">
          <span class="sub_tit4">
            세상을 만지고 <br>
            보이지 않는 것을 보다
          </span>
          <h3 class="h3_">
            <i class="pc"></i>우리의 기술이 모두의 가능성이 
            되도록, 센시의 기술과 콘텐츠는 빅데이터 기반 
            AI기술과 특수 인쇄술로 48개 언어의 점자 
            변환을 지원하여, 모두가 공평한 기회와 능력을 
            발휘할 수 있도록 합니다. 
          </h3>
          <h5 class="h5_ flex_cnt">
            <span>INNOVATION</span>
            <p>Technology for everyone</p>
          </h5>
          <div class="innovation_bg f_center">
            <video src="<?=$img?>innovation.mp4" playsinline muted autoplay loop></video>
            <p data-aos="">
              <strong>센시는 기술이 활용될 수 있도록</strong>
              <strong>새로운 공정과 공법의 끊임없는 연구와</strong>
              <strong>글로벌 기술 공급 및 구축사업을 통한</strong>
              <strong>가치의 확산을 이끌어 갑니다.</strong>
            </p>
          </div>
        </div>
      </section>
    </main>
    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/<?=$menuClass?>.js"></script>
  </div>
</body>

</html>