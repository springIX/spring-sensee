<?php 
  $path = './';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'main';
  $menuName = '';
  $img = '/src/images/'.$menuClass.'/'.$menuClass.'_';
  $pageTitle = '';
  $pageImages = '';
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
        <div style="background:url(<?=$img?>main_visual.png)no-repeat center center / cover; height:100vh;"></div>  
      </section>
      <section class="<?=$menuClass?>_intro">
        <div class="section_tit taC">
          <h5 class="h5_">sensee</h5>
          <h2 class="h3_">더 나은 세상을 위한 노력</h2>
          <p class="body_txt">
            센시는 <br>
            장애인과 비장애인, 남녀노소 누구나 겪을 수 있는 정보접근에 대한 <br>
            문제 해결을 위해 만들어졌습니다.
          </p>
          <strong class="bg_tit pps">
            TOGETHER <br>
            MEANINGFUL <br>
            BASICS
          </strong>
          <img src="<?=$img?>intro.png" alt="" class="hand_img">
        </div>
      </section>
      <section class="<?=$menuClass?>_brand">
        <div class="<?=$menuClass?>_brand_info layout_inner_l">
          <div class="section_tit">
            <h6 class="h5_">Brand story</h6>
            <h3 class="h3_ pps">Touch the world and <br>See the unseen</h3>
          </div>
          <div class="txt_box">
            <div class="txt_wrap">
              <p>
                센시는 사회적 기업으로서의 한계를 넘어 <br>
                빅데이터 기반의 AI 기술과 특수 인쇄술을 바탕으로 <br>
                플랫폼 & 콘텐츠 브랜드로써 지속가능한 비전 및 <br>
                지향가치를 새롭게 정립합니다.
              </p>
              <p>
                점자책의 변화를 넘어서 디지털 콘텐츠 플랫폼을  <br>
                구축하고, 이를 통해 일반인과 장애인들이  <br>
                정보를 교류하고 즐기는 세상을 만들고자 합니다. <br>
                점자책의 다양한 콘텐츠를 통해  <br>
                장애와 비장애의 경계가 없는 세상, <br>
                그것이 센시가 꿈꾸는 세상입니다.
              </p>
            </div>
            <a href="" class="btn_more"></a>
          </div>
        </div>
        <div class="<?=$menuClass?>_brand_visual">
          <picture class="brand_bg">
            <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>brand_d.jpg" />
            <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>brand_m.jpg" />
            <img src="<?=$img?>brand_d.jpg" data-src="<?=$img?>brand_d.jpg" alt="" />
          </picture>
          <div class="txt_box">
            <p class="tit body_txt">
              <span>TOGETHER</span>
              <span>MEANINGFUL</span>
              <span>BASICS</span>
            </p>
            <p class="txt">
              일상의 순간들을 읽어내고,  <br>
              일상의 경계를 지우며 확장시키는 온전한 삶을, <br>
              모두가 윤리적인 삶을 누릴 수 있는세상을  <br>
              센시가 만들어 갑니다.
            </p>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_tech">
        <div class="section_tit taC">
          <h5 class="h5_">TECHNOLOGY</h5>
          <h5 class="h3_">모두를 위한 기술, 함께하는 세상</h5>
          <h5 class="body_txt">센시는 빅데이터 기반 AI기술과 특수인쇄기술을 기반으로 독보적인 기술로 <br>다양한 플랫폼 & 콘텐츠의 점자인쇄를 통해 모든 사람을 위한 세상을 만들고자 합니다.</h5>
        </div>
        <div class="tech_visual">
          <div class="visual_wrap">
            <img src="<?=$img?>tech.png" alt="" class="mom_baby"/>
          </div>
          <img src="<?=$icon?>leaf.png" alt="" class="leaf leaf1"/>
          <img src="<?=$icon?>leaf.png" alt="" class="leaf leaf2"/>
          <img src="<?=$icon?>leaf.png" alt="" class="leaf leaf3"/>
          <img src="<?=$icon?>leaf.png" alt="" class="leaf leaf4"/>
          <img src="<?=$icon?>leaf.png" alt="" class="leaf leaf5"/>
          <img src="<?=$icon?>leaf.png" alt="" class="leaf leaf6"/>
        </div>
      </section>
      <section class="<?=$menuClass?>_tech">
        <div class="section_tit">
          <h5 class="h5_">SUSTAINABILITY</h5>
          <h5 class="h3_">지속 가능한 세상을 만들며 <br>모두가 평등한 사회를 위해 <br>노력합니다.</h5>
          <h5 class="body_txt">센시는 빅데이터 기반 AI기술과 특수인쇄기술을 기반으로 독보적인 기술로 <br>다양한 플랫폼 & 콘텐츠의 점자인쇄를 통해 모든 사람을 위한 세상을 만들고자 합니다.</h5>
        </div>
      </section>
    </main>
    <?php include $path."/src/inc/footer.php"; ?>
  </div>
</body>

</html>