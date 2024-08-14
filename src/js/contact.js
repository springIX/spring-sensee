document.addEventListener('DOMContentLoaded', function() {
  const tabs = document.querySelectorAll('.tab_button');
  const contents = document.querySelectorAll('.tab_content');

  tabs.forEach(tab => {
      tab.addEventListener('click', function() {
          // 모든 탭 버튼에서 active 클래스 제거
          tabs.forEach(t => t.classList.remove('active'));

          // 모든 탭 컨텐츠에서 active 클래스 제거
          contents.forEach(content => content.classList.remove('active'));

          // 클릭된 탭에 active 클래스 추가
          tab.classList.add('active');

          // 클릭된 탭에 대응하는 컨텐츠 보여줌
          const activeContent = document.getElementById(tab.dataset.tab);
          activeContent.classList.add('active');
      });
  });
});


// 팝업 열기
function showPopup(message) {
  document.getElementById('popupMessage').textContent = message;
  document.getElementById('popup').style.display = 'block';
}

// 팝업 닫기
function closePopup() {
  document.getElementById('popup').style.display = 'none';
}

