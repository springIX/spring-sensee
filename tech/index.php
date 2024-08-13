<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'tech';
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
          'dimmed' => 'circle', // required
          'title' => 'Technology', // required
          'desc' => '센시는 빅데이터 기반 AI 기술과 특수인쇄기술을 기반으로 독보적인 기술로 다양한 플랫폼 & <br>콘텐츠의 점자 인쇄를 통해 모든 사람을 위한 세상을 만들고자 합니다.', // option
        );
        printKeyvisual();
      ?>
      <section class="<?=$menuClass?>_solution layout_inner">
        <div class="section_tit" data-aos="fade-up">
          <h5 class="h5_">OUR TECHNOLOGY</h5>
          <h3 class="h3_ pps">Saving Time <br>and Costs</h3>
          <p class="body_txt">
          센시의 인공지능 기반 독자적인 점자 플랫폼은 콘텐츠 제작 시간과 비용을 <br>비약적으로 줄여 복잡하고 다양한 점자 및 촉각 데이터를 제작, 관리하여 <br>전자 문서, 인쇄 등 다양한 방식의 콘텐츠를 공급합니다.
          </p>
        </div>
        <div class="solution_compare" data-aos="fade-up">
          <div class="existing_solution">
            <p class="compare_tit">기존 솔루션</p>
            <ul class="txt_box">
              <li>
                <span class="tit">제작기간</span>
                <div class="info">
                  <p>6개월 ~ 1년</p>
                  <p>1일~5일</p>
                </div>
              </li>
              <li>
                <span class="tit">가격</span>
                <div class="info">
                  <p>$ 100~ 200</p>
                  <p>$ 10~ 50</p>
                </div>
              </li>
              <li>
                <span class="tit">품질</span>
                <div class="info">
                  <p>낮음 - 점자만 해당</p>
                  <p>텍스트, 이미지가 포함된 높은 품질의 점자</p>
                </div>
              </li>
            </ul>
            <div class="img_box">
              <img src="<?=$img?>solution.png" alt="" >
            </div>
          </div>
          <div class="existing_value pps" data-aos="fade-up">
            <p class="compare_tit">기존 대비 절약시간</p>
            <strong>95</strong>
          </div>
          <div class="existing_value pps" data-aos="fade-up">
            <p class="compare_tit">기존 대비 비용절감</p>
            <strong>90</strong>
          </div>
        </div>
      </section>
      <section class="<?=$menuClass?>_together layout_inner">
        <div class="section_tit taC" data-aos="fade-up">
          <h5 class="h5_">ENJOY TOGETHER</h5>
          <p class="sub_tit">
            센시는 장애인과 비장애인의 다양한 정도와 경험에 부응하기 위한 <br class="pc">
            교육용 상품과 점자책을 공급하고 있으며, <br class="pc"> 
            센시 점자책은 점자와 텍스트, 이미지를 한 페이지에 표현하여 <br class="pc">
            모두가 함께 즐길 수 있는 콘텐츠를 제공합니다.
          </p>
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
          <p>
            센시의 기술력은 <br>세상의 모든 글과 그림, 그리고 사진에 이르기까지 <br>기존의 콘텐츠들을 시각장애인들에게 <br>제공할 수 있으며, 센시가 독자 개발한 콘텐츠는 <br>점자 교육시장을 선도합니다.
          </p>
        </div>
        <img src="<?=$img?>together_hand.png" alt="" class="hand_img">

      </section>
    </div>

    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/<?=$menuClass?>.js"></script>
  </div>
</body>

</html>