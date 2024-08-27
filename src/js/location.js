$(document).ready(function() {
  // 메인 탭 네비게이션
  $('.tab_button').on('click', function() {
      var targetTab = $(this).data('tab');

      // 메인 탭의 active 클래스 토글
      $('.tab_button').removeClass('active');
      $(this).addClass('active');

      // 해당 탭 콘텐츠 표시
      $('.tab_content').removeClass('active');
      $('#' + targetTab).addClass('active');

      // 해당 탭의 첫 번째 서브 탭과 콘텐츠를 자동으로 활성화
      var $firstSubTabButton = $('#' + targetTab).find('.sub_tab_button').first();
      var firstSubTab = $firstSubTabButton.data('tab');

      // 서브 탭 버튼과 콘텐츠의 active 클래스 초기화
      $('#' + targetTab).find('.sub_tab_button').removeClass('active');
      $('#' + targetTab).find('.sub_tab_content').removeClass('active');

      // 첫 번째 서브 탭 버튼과 콘텐츠에 active 클래스 추가
      $firstSubTabButton.addClass('active');
      $('#' + firstSubTab).addClass('active');
  });

  // 서브 탭 네비게이션
  $('.sub_tab_button').on('click', function() {
      var targetSubTab = $(this).data('tab');
      var $tabContent = $(this).closest('.tab_content'); // 현재 활성화된 메인 탭 내에서만 동작

      // 서브 탭 버튼이 하나만 있는 경우
      if ($tabContent.find('.sub_tab_button').length === 1) {
          // 아무 작업도 하지 않음, active 클래스 유지
          return;
      }

      // 서브 탭 버튼과 콘텐츠의 active 클래스 토글
      $tabContent.find('.sub_tab_button').removeClass('active');
      $(this).addClass('active');

      $tabContent.find('.sub_tab_content').removeClass('active');
      $('#' + targetSubTab).addClass('active');
  });

  // 페이지 로드 시 첫 번째 메인 탭과 첫 번째 서브 탭 자동 활성화
  $('.tab_button.active').trigger('click');
});





// // 팝업 열기
// function showPopup(message) {
//   document.getElementById('popupMessage').textContent = message;
//   document.getElementById('popup').style.display = 'block';
// }

// // 팝업 닫기
// function closePopup() {
//   document.getElementById('popup').style.display = 'none';
// }

