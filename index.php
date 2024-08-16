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

  include $path."src/inc/head.php";
?>
</head>
<body>
  <div class="<?=$menuClass?>_wrap">
    <?php include $path."/src/inc/header.php"; ?>
    <main id="contents" class="<?=$menuClass?>_container">
      <section class="<?=$menuClass?>_visual" style="height:100vh;">
      </section>
      <section class="<?=$menuClass?>_intro">
        <div class="section_tit taC layout_inner" data-aos="fade-up">
          <h5 class="h5_">sensee</h5>
          <h2 class="h3_">더 나은 <br class="mo"/>세상을 위한 노력</h2>
          <p class="body_txt">
          센시는 장애인과 비장애인, 남녀노소 누구나 겪을 수 있는 정보접근에 대한 <br>문제 해결을 위해 만들어졌습니다.
          </p>
        </div>
        <div class="<?=$menuClass?>_intro_visual">
          <strong class="bg_tit pps taC" data-aos="fade-in">
            TOGETHER <br>
            MEANINGFUL <br>
            BASICS
          </strong>
          <img src="<?=$img?>intro.png" alt="" class="hand_img" data-aos="fade-up" />
          <i data-aos=""></i>
        </div>
      </section>
      <section class="<?=$menuClass?>_brand">
        <div class="<?=$menuClass?>_brand_info layout_inner_l">
          <div class="section_tit" data-aos="fade-up">
            <h6 class="h5_">BRAND STORY</h6>
            <h3 class="h3_ pps">Touch the world and <br class="pc">See the unseen</h3>
          </div>
          <div class="txt_box">
            <div class="txt_wrap">
              <p data-aos="fade-up">
                센시는 사회적 기업으로서의 한계를 넘어 <br>
                빅데이터 기반의 AI 기술과 특수 인쇄술을 바탕으로 <br>
                플랫폼 & 콘텐츠 브랜드로써 지속가능한 비전 및 <br>
                지향가치를 새롭게 정립합니다.
              </p>
              <p data-aos="fade-up" data-aos-delay="100">
                점자책의 변화를 넘어서 디지털 콘텐츠 플랫폼을  <br>
                구축하고, 이를 통해 비장애인과 장애인들이  <br>
                정보를 교류하고 즐기는 세상을 만들고자 합니다. <br>
                점자책의 다양한 콘텐츠를 통해 <br>
                장애인과 비장애인의 경계가 없는 세상,<br>
                그것이 센시가 꿈꾸는 세상입니다.
              </p>
            </div>
            <a href="/about/" class="btn_more" data-aos="fade-up"></a>
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
                일상의 순간들을 읽어내고,  <br>
                일상의 경계를 지우며 확장시키는 온전한 삶을, <br>
                모두가 윤리적인 삶을 누릴 수 있는 세상을  <br>
                센시가 만들어 갑니다.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_tech">
        <div class="section_tit taC layout_inner" data-aos="fade-up">
          <h5 class="h5_">TECHNOLOGY</h5>
          <h5 class="h3_">모두를 위한 기술, 함께하는 세상</h5>
          <h5 class="body_txt">센시는 빅데이터 기반 AI 기술과 특수인쇄기술을 기반으로 독보적인 기술로 <br class="pc">다양한 플랫폼 & 콘텐츠의 점자 인쇄를 통해 모든 사람을 위한 세상을 만들고자 합니다.</h5>
          <a href="/tech/" class="btn_more"></a>
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
      <section class="<?=$menuClass?>_sustain layout_inner_w">
        <div class="section_tit" data-aos="fade-up">
          <h5 class="h5_">SUSTAINABILITY</h5>
          <h5 class="h3_">지속 가능한 세상을 만들며 <br class="pc">모두가 평등한 사회를 위해 <br class="pc">노력합니다.</h5>
        </div>
        <div class="sustain_info">
          <div class="cymbol_img"data-aos="fade-up">
            <img src="<?=$icon?>logo_cymbol_green.svg" alt=""/>
          </div>
          <div class="info_box">
            <ul>
              <li>
                <div class="img_box">
                  <img src="<?=$img?>sustain01.jpg" alt="" data-aos="clip-up">
                </div>
                <p data-aos="fade-up">
                  센시는 글로벌 제조 기업으로서 기후 위기 대응에 <br>
                  무거운 책임감과 의지를 갖고 있습니다. <br>
                  KC 인증, FSC 인증을 받은 제품을 친환경 소재를 사용하여 <br>
                  생산하고 있으며 환경을 위해 다양한 활동을 추진함으로써, <br> 
                  보다 깨끗하고 건강한 지구를 만드는 데 <br>
                  기여하고자 합니다.
                </p>
              </li>
              <li>
                <div class="img_box">
                  <img src="<?=$img?>sustain02.jpg" alt=""data-aos="clip-up" data-aos-delay="100">
                </div>
                <p data-aos="fade-up" data-aos-delay="100">
                  센시는 환경적 가치와 함께 <br>
                  장애인과 비장애인의 편견을 없애는 공평한 사회 추구, <br>
                  포용적 교육, 공익을 위한 사회 공헌 등 <br>
                  모두가 평등한 사회를 위한 경영철학을 가지고 있습니다. 
                </p>
              </li>
            </ul>
            <a href="/sustainability/" class="btn_more" data-aos="fade-up"></a>
          </div>
        </div>
      </section>
    </main>
    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/<?=$menuClass?>.js"></script>
    <script>
      $(function(){
        $(".main_tech").on("mousemove", function(event) {
          var mouseXpos = event.clientX;
          var mouseYpos = event.clientY;
          var YrotateDeg = mouseXpos * -0.02;
          var XrotateDeg = mouseYpos * -0.01;
          $(".leaf_box i img").css('transform',`translate(${XrotateDeg}rem, ${YrotateDeg}rem )`);
        });
      });
    </script>
  </div>
</body>

</html>