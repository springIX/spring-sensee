<?php 
  $path = '../';
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $menuClass = 'product';
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
    <div id="contents" class="<?=$menuClass?>_container">
      <?php
        $Keyvisual = array(
          'media-type' => 'image', // required, image or video
          'media-d' => $img.'keyvisual_d.jpg', // required
          'media-m' => $img.'keyvisual_m.jpg', // option
          'media-alt' => '', // required
          'dimmed' => 'circle', // required
          'title' => 'Product', // required
          'desc' => '센시의 기술은 시각 장애인을 위한 점자와 비장애인을 위한 일반 텍스트 및 <br class="pc">이미지를 통합하여 한 권의 책에서 모두 접근할 수 있게 합니다.', // option
        );
        printKeyvisual();
      ?>
      <section class="<?=$menuClass?>_introduce">
        <h3 class="h3_ pps ani_txt taC" data-aos="">BOOKS FOR EVERYONE</h3>
        <div class="pd_intro_cont">
          <p class="body_txt layout_inner_l txt_box1"data-aos="fade-up">센시는 모두에게 동등한 <br>
          점자책의 다양한 콘텐츠를 통해 <br>
          장애인과 비장애인의 경계가 없는 <br class="mo">세상을 꿈꿉니다.</p>
          <div class="pd_intro_grid img1 layout_inner_m">
            <img src="<?=$img?>introduce01.jpg" alt="" data-aos="clip-up">
          </div>
          <div class="pd_intro_grid img2 layout_inner_m">
            <img src="<?=$img?>introduce02.jpg" alt="" data-aos="clip-up">
          </div>
          <div class="pd_intro_grid img3 layout_inner_m">
            <img src="<?=$img?>introduce03.jpg" alt="" data-aos="clip-up">
          </div>
          <div class="pd_intro_grid body_txt txt_box2 f_center layout_inner_m">
            <p data-aos="fade-up">센시는 사회적 기업으로서의 한계를 넘어 <br>
              빅데이터 기반의 AI 기술과 특수 인쇄술을 바탕으로 <br>
              플랫폼 & 콘텐츠 브랜드로써 지속 가능한 비전 및  <br>
              지향가치를 새롭게 정립합니다.</p>
          </div>
          <div class="pd_intro_grid img4 layout_inner_m">
            <img src="<?=$img?>introduce04.jpg" alt=""  data-aos="clip-up">
          </div>
        </div>
      </section>

      <section class="<?=$menuClass?>_book_types">
        <div class="type_pagi sub_head pps" data-aos="">
          <div class="pagi_inner x_scrollbar">
            <a href="#braille_book">Braille Books</a>
            <a href="#tactile_book">Tactile Books</a>
            <a href="#coloring_book">Coloring Books</a>
            <a href="#braille_edu">Braille Education</a>
          </div>
        </div>
        <ul class="type_list taC layout_inner">
          <li id="braille_book">
            <div class="book_type_tit">
              <h3 class="h3_ pps ani_txt" data-aos="">Braille Books</h3>
              <p class="body_txt" data-aos="fade-up">점자를 읽는 시각장애인, 글자를 읽는 비장애인, 모두를 위한 책입니다.</p>
            </div>
            <div class="book_cover">
              <div class="book_cover_main">
                <img src="<?=$img?>book01.jpg" alt="" data-aos="clip-up">
              </div>
              <div class="book_cover_sub">
                <img src="<?=$img?>book02.jpg" alt="" data-aos="clip-up" data-aos="clip-up">
              </div>
            </div>
            <p class="caption" data-aos="fade-up">Braille Fairy Tales</p>
          </li>
          <li id="tactile_book">
            <div class="book_type_tit">
              <h3 class="h3_ pps ani_txt" data-aos="">Tactile Books</h3>
              <p class="body_txt" data-aos="fade-up">다양한 시각 정보를 손으로 느낄 수 있게 <br>도형, 사진 등 정보를 표현한 책입니다.</p>
            </div>
            <div class="book_cover">
              <div class="book_cover_main">
                <img src="<?=$img?>book03.jpg" alt="" data-aos="clip-up" >
              </div>
              <div class="book_cover_sub">
                <img src="<?=$img?>book04.jpg" alt="" data-aos="clip-up" >
              </div>
            </div>
            <p class="caption" data-aos="fade-up">Feel with hands</p>
          </li>
          <li id="coloring_book">
            <div class="book_type_tit">
              <h3 class="h3_ pps ani_txt" data-aos="">Coloring Books</h3>
              <p class="body_txt" data-aos="fade-up">도형, 캐릭터를 만지면서 익히고 즐거운 색칠놀이를 통해 <br>시각장애 어린이 성장 과정에 도움을 줍니다.</p>
            </div>
            <div class="book_cover">
              <div class="book_cover_main">
                <img src="<?=$img?>book05.jpg" alt="" data-aos="clip-up" >
              </div>
              <div class="book_cover_sub">
                <img src="<?=$img?>book06.jpg" alt="" data-aos="clip-up" >
              </div>
            </div>
            <p class="caption" data-aos="fade-up">Feel the images, Enjoy drawing</p>
          </li>
          <li id="braille_edu">
            <div class="book_type_tit">
              <h3 class="h3_ pps ani_txt" data-aos="">Braille Education</h3>
              <p class="body_txt" data-aos="fade-up">시각장애인에게 가장 중요한 점자를 <br>보다 쉽고 재미있게 배울 수 있도록 돕습니다.</p>
            </div>
            <div class="book_cover">
              <div class="book_cover_main">
                <img src="<?=$img?>book07.jpg" alt="" data-aos="clip-up" >
              </div>
              <div class="book_cover_sub">
                <img src="<?=$img?>book08.jpg" alt="" data-aos="clip-up" >
              </div>
            </div>
            <p class="caption" data-aos="fade-up">Education for beginners</p>
          </li>
        </ul>
      </section>

    </div>

    <?php include $path."/src/inc/footer.php"; ?>
    <script src="<?=$path?>src/js/<?=$menuClass?>.js"></script>
  </div>
</body>

</html>