<?php

  function printKeyvisual() {
    global $aPath;
    global $Keyvisual;
    global $Height;
    echo '<div class="keyvisual">';
    echo '  <div class="container">';
    echo '    <div class="image-area">';
    if($Keyvisual['media-type'] == 'image') {
      echo '<picture>';
      echo '<source media="(min-width: 751px)" srcset="'.$Keyvisual['media-d'].'" />';
      echo '<source media="(max-width: 750px)" srcset="'.$Keyvisual['media-m'].'" />';
      echo '<img src="'.$aPath.'/assets/images/blank.svg" data-src="'.$Keyvisual['media-m'].','.$Keyvisual['media-d'].'" class="lazy" alt="'.$Keyvisual['media-alt'].'" aria-hidden="true" />';
      echo '</picture>';
    } else if($Keyvisual['media-type'] == 'video') {
      echo '<video title="'.$Keyvisual['media-alt'].'" playsinline muted loop preload autoplay="autoplay">';
      echo '<source src="'.$Keyvisual['media-d'].'" type="video/mp4" loop>';
      echo '</video>';
    }
    echo '      <div class="dimmed"></div>';
    echo '    </div>';
    echo '    <div class="floating-area">';
    echo '     <div class="floating-text">';
    echo '        <h1 class="title">';
    echo '          <div class="sensee_symbol_logo">';
    echo '            <img src="'.$aPath.'/assets/images/blank.svg" class="lazy icon-white" alt="'.$Keyvisual['heading-text'].'" />';
    echo '          </div>';
    echo '        </h1>';
    echo '        <div class="desc">'.$Keyvisual['desc'].'</div>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
  }


?>


