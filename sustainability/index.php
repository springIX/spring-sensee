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
    <div id="contents" class="<?=$menuClass?>_container">
      <!-- Key visual -->
      <?php
          $Keyvisual = array(
            'media-type' => 'image', // required, image or video
            'media-d' => $img.'keyvisual_d.jpg', // required
            'media-m' => $img.'keyvisual_m.jpg', // option
            'media-alt' => '', // required
            'dimmed' => 'circle', // required
            'title' => 'Sustainability', // required
            'desc' => '센시는 환경적 가치와 함께 장애인과 비장애인의 편견을 없애는 공평한 사회 추구, <br class="pc">포용적 교육, 공익을 위한 사회 공헌 등 모두가 평등한 사회를 위한 경영철학을 가지고 있습니다. ', // option
          );
          printKeyvisual();
      ?>
      <!-- // Key visual -->
      <section class="<?=$menuClass?>_inner">
        <div class="<?=$menuClass?>_esg">
          <div class="<?=$menuClass?>_contents" id="content1">
            <div class="esg_inner layout_inner_l p_center">
              <div class="section_tit">
                <div class="h5_">ESG</div>
                <h3 class="h3_">작은 실천으로<br> 더 큰 꿈을 향해</h3>
              </div>
              <div class="body_txt">
                SENSEE는 KC 인증, FSC 인증을 받은 제품을 친환경 소재를 사용하여<br class="pc">
                생산하고 있습니다. 환경을 위해 다양한 활동을 추진함으로써,<br class="pc">
                보다 깨끗하고 건강한 지구를 만드는 데 기여하고자 합니다.<br class="pc">
              </div>
            </div>
          </div>
          <div class="<?=$menuClass?>_esg_contents" id="content2">
            <div class="p_center">
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
              <div class="p_center" id="esg_img_wrap">
                <img class="<?=$menuClass?>_earth_img" src="<?=$img?>earth.png" alt="" />                
              </div>
              <div class="leaf_img_wrap p_center">
                <img class="<?=$menuClass?>_leaf_img" id="leaf_img_01" src="<?=$img?>leaf.png" alt="" />
                <img class="<?=$menuClass?>_leaf_img" id="leaf_img_02" src="<?=$img?>leaf.png" alt="" />
                <img class="<?=$menuClass?>_leaf_img" id="leaf_img_03" src="<?=$img?>leaf.png" alt="" />
                <img class="<?=$menuClass?>_leaf_img" id="leaf_img_04" src="<?=$img?>leaf.png" alt="" />
                <img class="<?=$menuClass?>_leaf_img" id="leaf_img_05" src="<?=$img?>leaf.png" alt="" />
                <img class="<?=$menuClass?>_leaf_img" id="leaf_img_06" src="<?=$img?>leaf.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_info">
        <div class="info_wrap">
          <div class="info_contents environment_contents">
            <div class="info_img">
              <img src="<?=$img?>environment.jpg" alt="" data-aos="clip-up"/>
            </div>
            <div class="info_txt" data-aos="fade-up">
              <div class="info_tit pps">Environment</div>
              <p class="info_desc">
                SENSEE는 글로벌 제조 기업으로서 기후위기 대응에 무거운 책임감과 의지를 갖고 있습니다. KC인증, FSC인증을 받은 제품을 친환경 소재를 사용하여 생산하고 있으며 환경을 위해 다양한 활동을 추진함으로써, 보다 깨끗하고 건강한 지구를 만드는데 기여하고자 합니다.
              </p>
            </div>
          </div>
          <div class="info_contents social_contents">
            <div class="info_img">
              <img src="<?=$img?>social.jpg" alt="" data-aos="clip-up"/>
            </div>
            <div class="info_txt" data-aos="fade-up">
              <div class="info_tit pps">Social</div>
              <p class="info_desc">
                SENSEE는 이해관계자의 인권침해를 예방하고
                다양한 사회공헌 추진 전략을 통해 다양한 활동을 
                함께 만들어가는 사회적 가치를 창출하고자 합니다.
              </p>
            </div>
          </div>
          <div class="info_contents governance_contents">
            <div class="info_img">
              <img src="<?=$img?>governance.jpg" alt="" data-aos="clip-up"/>
            </div>
            <div class="info_txt" data-aos="fade-up">
              <div class="info_tit pps">Governance</div>
              <p class="info_desc">
                SENSEE는 경제적, 법적 책임 준수는 물론이고 사회가 요구하는 
                윤리적 기대에 부합한 사업 활동을 영위하며 
                이해관계자에게 신뢰받는 기업이 되고자 합니다.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_explanation">
        <div class="explanation_contents layout_inner">
          <div class="explanation_img" data-aos="clip-up">
            <picture>
              <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>eco_friendly-d.jpg" />
              <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>eco_friendly-m" />
              <img src="<?=$img?>eco_friendly-d.jpg" data-src="<?=$img?>eco_friendly-d.jpg" alt="" />
            </picture>
          </div>
          <div class="explanation_txt">
            <div class="explanation_tit sub_tit" data-aos="fade-up">
              <p>친환경 소재, 양각형태,</p>
              <p>점자 삽입을 통한</p>
              <p>ESG 지표제공</p>
            </div>
            <ul class="explanation_list">
              <li class="explanation_item" data-aos="fade-up">
                <div class="txt_box sub_tit3">
                  <div>탄소중립실천</div>
                  <div>01</div>
                </div>
                <ul class="sub_list body_txt">
                  <li class="sub_item">
                    탄소중립 중장기 로드맵 수립
                  </li>
                  <li class="sub_item">
                    탄소중립 지표 관리 고도화
                  </li>
                  <li class="sub_item">
                    기후변화 대응 및 온실가스 감축 실천 확산
                  </li>
                </ul>
              </li>
              <li class="explanation_item" data-aos="fade-up">
                <div class="txt_box sub_tit3">
                  <div>친환경 상품개발</div>
                  <div>02</div>
                </div>
                <ul class="sub_list body_txt">
                  <li class="sub_item">
                    FSC 인증서 보유
                  </li>
                  <li class="sub_item">
                    전 제품 친환경 종이, Soyink 인쇄
                  </li>
                  <li class="sub_item">
                    자연생분해 에코링 사용
                  </li>
                </ul>
              </li>
              <li class="explanation_item" data-aos="fade-up">
                <div class="txt_box sub_tit3">
                  <div>친환경 캠페인</div>
                  <div>03</div>
                </div>
                <ul class="sub_list body_txt">
                  <li class="sub_item">
                    자원 순환 캠페인 지속 시행
                  </li>
                  <li class="sub_item">
                    오프라인 행사 전반의 친환경 소재 활용 (허니콤보드 등)
                  </li>
                </ul>
              </li>
              <li class="explanation_item" data-aos="fade-up">
                <div class="txt_box sub_tit3">
                  <div>폐기물 감소 및<br class="mo"> 자원 순환 노력</div>
                  <div>04</div>
                </div>
                <ul class="sub_list body_txt">
                  <li class="sub_item">
                    물류센터 친환경 프로세스 및 직매입 재고 기부 등 자원 순환 확대
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_glacier">
        <div class="glacier_contents">
          <div class="glacier_img" data-aos="fade-left">
            <img src="<?=$img?>glacier.png" alt="" />
          </div>
          <div class="floating_txt p_center pps">
            Sustainability
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_management">
        <div class="tit_wtap" data-aos="fade-up">
          <span class="h5_">De&I</span>
          <h3 class="h3_">
            <p>Diversity,</p>
            <p>Equity and</p>
            <p>Inclusion</p>
          </h3>
          <div class="body_txt">
            경영철학은 조직 내외의 모든 이해관계자들에게 포용적이고 공평한 기회를 제공함으로써,<br class="pc"> 더 나은 사회를 만들기 위한 노력을 지속합니다. 이를 통해 센시는 장애인과 비장애인의 경계를 넘어,<br class="pc"> 모든 사람이 동등하게 참여하고 성장할 수 있는 세상을 지향합니다.
          </div>
        </div>
        <div class="explanation_contents layout_inner">
          <div class="explanation_img" data-aos="clip-up">
            <picture>
              <source media="(min-width: <?=$min_width_d?>px)" srcset="<?=$img?>management-d" />
              <source media="(max-width: <?=$max_width_m?>px)" srcset="<?=$img?>management-m" />
              <img src="<?=$img?>management-d" data-src="<?=$img?>management-d" alt="" />
            </picture>
          </div>
          <div class="explanation_txt">
            <div class="explanation_tit sub_tit" data-aos="fade-up">
              <p>다양성을 존중하고 모두에게</p>
              <p>포용적인 문화를 만드는 것을</p>
              <p>핵심으로 합니다.</p>
            </div>
            <ul class="explanation_list">
              <li class="explanation_item" data-aos="fade-up">
                <div class="txt_box sub_tit3">
                  <div>공평한 사회 추구</div>
                  <div>01</div>
                </div>
                <ul class="sub_list body_txt">
                  <li class="sub_item">
                    차별없는 사회에서의 이념과 문화 형성 및 확산
                  </li>
                  <li class="sub_item">
                    장애인과 비장애인의 편견을 없애고 구성원들 간의 소속감과 유대감 형성
                  </li>
                  <li class="sub_item">
                    시각장애인가 일반인 모두를 위한 점자 도서 제작
                  </li>
                </ul>
              </li>
              <li class="explanation_item" data-aos="fade-up">
                <div class="txt_box sub_tit3">
                  <div>포용적교육</div>
                  <div>02</div>
                </div>
                <ul class="sub_list body_txt">
                  <li class="sub_item">
                    시각장애인을 위한 점자 교육 교구 제작
                  </li>
                  <li class="sub_item">
                    Zero Project, (Inclusive Education)과 ICT에서 전 세계 12개 혁신 솔루션 선정
                  </li>
                </ul>
              </li>
              <li class="explanation_item" data-aos="fade-up">
                <div class="txt_box sub_tit3">
                  <div>공익을 위한 사회공헌</div>
                  <div>03</div>
                </div>
                <ul class="sub_list body_txt">
                  <li class="sub_item">
                    시각장애인용 점자 변환 소프트웨어 '센시컨버터’ 무료 제공 협약 체결
                  </li>
                  <li class="sub_item">
                    파주 점자 탁상달력 1천 개 장애인 연합회 기타
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>

    </div>        
    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/sustainability.js"></script>
  </div>
</body>

</html>