<?php
$min_width_d = 751;
$max_width_m = 750;
$icon = $path.'src/images/common/';

function printKeyvisual() {

    global $aPath;
    global $Keyvisual;
    global $Height;
    global $min_width_d;
    global $max_width_m;

    echo '<section class="keyvisual">';
    echo '  <div class="container">';
    echo '    <div class="image_area" data-aos="zoom-out">';
    if ($Keyvisual['media-type'] == 'image') {
      echo '<picture>';
      echo '<source media="(min-width: '.$min_width_d.'px)" srcset="'.$Keyvisual['media-d'].'" />';
      echo '<source media="(max-width: '.$max_width_m.'px)" srcset="'.$Keyvisual['media-m'].'" />';
      echo '<img src="'.$aPath.'/assets/images/blank.svg" data-src="'.$Keyvisual['media-m'].','.$Keyvisual['media-d'].'" class="lazy" alt="'.$Keyvisual['media-alt'].'" aria-hidden="true" />';
      echo '</picture>';
    } else if ($Keyvisual['media-type'] == 'video') {
      echo '<picture>';
      echo '  <source srcset="'.$Keyvisual['media-d'].'" media="(min-width: '.$min_width_d.'px)" type="video/mp4">';
      echo '  <source srcset="'.$Keyvisual['media-m'].'" media="(max-width: '.$max_width_m.'px)" type="video/mp4">';
      echo '  <video controls>';
      echo '    <source src="video-default.mp4" type="video/mp4">';
      echo '  </video>';
      echo '</picture>';
    }
    if ($Keyvisual['dimmed'] == 'circle') {
      echo '      <div class="dimmed circle"></div>';
    } else if ($Keyvisual['dimmed'] == 'all') {
      echo '      <div class="dimmed all"></div>';
    }
    echo '    </div>';
    echo '    <div class="floating_area">';
    echo '     <div class="floating_txt layout_inner_w">';
    echo '        <h2 class="kv_tit h2_"><span data-aos="">'.$Keyvisual['title'].'</span></h2>';
    echo '        <div class="infor_txt">';
    echo '          <div class="sensee_symbol_logo" data-aos="fade-up">';
    echo '            <img src="'.$aPath.'/src/images/common/logo_cymbol.svg" class="lazy icon-white" alt="센시 심볼 로고" />';
    echo '          </div>';
    echo '          <div class="kv_desc" data-aos=""><p>'.$Keyvisual['desc'].'</p></div>';
    echo '        </div>';
    echo '      </div>';
    echo '      <div class="kv_line" data-aos=""></div>';
    echo '    </div>';
    echo '  </div>';
    echo '</section>';
  }
?>


