<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'about';
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
    <div class="<?=$menuClass?>_container">
      <?php
        $Keyvisual = array(
          'media-type' => 'image', // required, image or video
          'media-d' => $img.'keyvisual_d.jpg', // required
          'media-m' => $img.'keyvisual_m.jpg', // option
          'media-alt' => '', // required
          'dimmed' => 'all', // required
          'title' => 'About Us', // required
          'desc' => '센시는 비장애인과 장애인이 함께 보고 즐길 수 있는 세상을 만들기 위해 <br>지속적인 연구를 수행하며, 근본적인 문제를 해결하기 위해 끊임없이 도전합니다.', // option
        );
        printKeyvisual();
      ?>
      <section class="<?=$menuClass?>_overview">
        <div class="section_tit layout_inner">
          <h5 class="h5_">OVERVIEW</h5>
          <h3 class="h3_ pps">Evolving to bring <br>the world together</h3>
        </div>
        <div class="overview_cont layout_inner_w">
          <div class="txt_wrap">
            <p class="sub_head pps">Brand history</p>
            <div class="info_wrap">
              <p class="info">가족의 사랑과 배려와 함께, 시각 장애를 가진 분들이 <br>
              정보에 더 쉽게 접근할 수 있도록 두 마음을 잇는 <br>
              하나의 기술로 시작하여, 모두를 위한 기술로 <br>지속 가능한 세상을 만들어갑니다.</p>
              <div class="ceo_info">
                <div class="profile">
                  <div class="img_box">
                    <img src="<?=$img?>ceo_profile.png" alt=""/>
                  </div>
                  <div class="txt_box">
                    <span>Victor Insik (서인식)</span>
                    <p>CE0 & Founder of SENSEE, Inc</p>
                  </div>
                </div>
                <button class="btn_more" data-btn="ceo"></button>
              </div>
              <div class="img1">
                <picture>
                  <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>overview01_d.jpg" />
                  <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>overview01_m.jpg" />
                  <img src="<?=$img?>overview01_d.jpg" data-src="<?=$img?>overview01_d.jpg" alt="" />
                </picture>
              </div>
            </div>
          </div>
          <div class="img_wrap">
            <div class="img2">
              <picture>
                <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>overview02_d.jpg" />
                <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>overview02_m.jpg" />
                <img src="<?=$img?>overview02_d.jpg" data-src="<?=$img?>overview02_d.jpg" alt="" />
              </picture>
            </div>
            <div class="img3">
              <picture>
                <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>overview03_d.jpg" />
                <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>overview03_m.jpg" />
                <img src="<?=$img?>overview03_d.jpg" data-src="<?=$img?>overview03_d.jpg" alt="" />
              </picture>
            </div>
            <p>
              센시의 내일은 <br>
              점자산업의 보편화와 함께 <br>
              장애인과 비장애인의 경계가 사라지는 <br class="mo">교육시장과 <br class="pc"> 
              지속가능한 미래를 위한 <br class="mo">DE&I를 선도 합니다.
            </p>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_movie taC layout_inner">
        <div class="tit_box">
          <img src="<?=$icon?>logo_cymbol_black.svg" alt="" class="logo_cymbol">
          <h4 class="h4_">Touch the world and <br>See the unseen</h4>
          <p class="body_txt">차이로 차별하지 않으며, 변화에 변함없는 원칙 <br class="pc">
          모두가 윤리적인 삶을 누릴 수 있는 세상을 SENSEE가 만들어 갑니다.</p>
        </div>
        <div class="movie_btn_wrap">
          <div class="movie_btn">
            <button>
              <img src="<?=$img?>movie_thumb.png" alt=""/>
              <i></i>
            </button>
          </div>
          <p class="sub_tit4 pps">SENSEE BRAND MOVIE</p>
        </div>
      </section>
      <section class="<?=$menuClass?>_value">
        <div class="sticky_box">
          <strong class="value_tit p_center">CORE VALUE</strong>
          <div class="value_cont">
            <ul>
              <li class="value_together">
                <picture class="value_bg">
                  <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>value_together_d.jpg" />
                  <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>value_together_m.jpg" />
                  <img src="<?=$img?>value_together_d.jpg" data-src="<?=$img?>value_together_d.jpg" alt="" />
                </picture>
                <div class="txt_box">
                  <span class="sub_tit3">센시의 보편적 일상의 순간</span>
                  <p>SENSEE는 모든 사람이 누릴 수 있는 보편적인 삶을 지향합니다. <br>기술과 혁신을 통해 장애인과 비장애인 모두에게 평등하고 <br>포용적인 환경을 제공하는 것을 목표로 합니다. </p>
                </div>
              </li>
              <li class="value_meaningful">
                <picture class="value_bg">
                  <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>value_meaningful_d.jpg" />
                  <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>value_meaningful_m.jpg" />
                  <img src="<?=$img?>value_meaningful_d.jpg" data-src="<?=$img?>value_meaningful_d.jpg" alt="" />
                </picture>
                <div class="txt_box">
                  <span class="sub_tit3">센시의 유의미함</span>
                  <p>센시는 일상의 경계를 허물고 확장된 온전한 삶을 지향합니다. <br>다양한 삶의 방식을 수용하고 존중하며, 규정된 삶의 방식과 <br>경계를 뛰어넘어 확장하는 것을 목표로 합니다.</p>
                </div>
              </li>
              <li class="value_basic">
                <picture class="value_bg">
                  <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>value_basic_d.jpg" />
                  <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>value_basic_m.jpg" />
                  <img src="<?=$img?>value_basic_d.jpg" data-src="<?=$img?>value_basic_d.jpg" alt="" />
                </picture>
                <div class="txt_box">
                  <span class="sub_tit3">센시의 일관된 경험</span>
                  <p>센시는 ‘기본’을 원칙으로 삼습니다. <br>차이로 차별하지 않으며, 변화에도 변함없이 <br>모두가 윤리적인 삶을 누릴 수 있도록 목표로 합니다.</p>
                </div>
              </li>
            </ul>
            <div class="tit_box p_center">
              <strong>TOGETHER</strong>
              <strong>MEANINGFUL</strong>
              <strong>BASIC</strong>
            </div>
            <div class="pagi caption layout_inner_l pps">
              <p class="current">
                <span>01</span>
                <span>02</span>
                <span>03</span>
              </p>
              <p class="total">03</p>
            </div>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_business">
        <div class="section_tit">
          <h5 class="h5_">BUSINESS AREA</h5>
          <h5 class="h3_">사회적 기업의 <br>한계를 넘어</h5>
          <h5 class="body_txt">머신러닝 기반의 데이터 변환 기술과 특수 인쇄술을 바탕으로 한 <br>
          지속 가능한 사업모델을 구축합니다.</h5>
        </div>
        <ol class="busi_list">
          <li>
            <div class="img_box">
              <img src="<?=$img?>business01.jpg" alt="">
            </div>
            <div class="txt_box layout_inner_l">
              <p class="sub_tit2 pps">Commercial</p>
              <div class="info">
                <ul class="body_txt dot_list">
                  <li>B2C 중심 사업 확장, 온/오프라인 활성화</li>
                  <li>장애 시장 (시각장애 및 발달장애)</li>
                  <li>3세 이상 아동 교육 시장 서브 브랜딩 사업 , 프리미엄 감각 발달 & 교육제품</li>
                </ul>
                <p class="sub_tit3"></p>
              </div>
            </div>
          </li>
          <li>
            <div class="img_box">
              <img src="<?=$img?>business02.jpg" alt="">
            </div>
            <div class="txt_box layout_inner_r">
              <p class="sub_tit2 pps">Education</p>
              <div class="info">
                <ul class="body_txt dot_list">
                  <li>수학 및 이공계 시각장애인용 교재 사업, UC 계열 대학 등 프로젝트 연계</li>
                  <li>K-12 교육과정 등 교과서 제작 사업, Perkins School 등 프로젝트 연계 </li>
                </ul>
                <p class="sub_tit3"></p>
              </div>
            </div>
          </li>
          <li>
            <div class="img_box">
              <img src="<?=$img?>business03.jpg" alt="">
            </div>
            <div class="txt_box layout_inner_l">
              <p class="sub_tit2 pps">Database <br>infrastructure</p>
              <div class="info">
                <ul class="body_txt dot_list">
                  <li>교육 DB 구축 사업, 행정전산망 대체자료 제공 시스템 통합 사업</li>
                  <li>Joing Venture,  개도국 DB Center & Printing Center</li>
                  <li>디지털 전환, Content + H/W 결합 Adaptive Education</li>
                </ul>
                <p class="sub_tit3"></p>
              </div>
            </div>
          </li>
        </ol>
      </section>
    </div>
    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/<?=$menuClass?>.js"></script>
  </div>
</body>

</html>