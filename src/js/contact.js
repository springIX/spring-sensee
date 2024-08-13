// 폼 전송 후 결과에 따라 팝업 표시
document.getElementById('contactForm').onsubmit = function(event) {
  event.preventDefault(); // 폼의 기본 전송 방지

  // AJAX 요청
  const formData = new FormData(this);
  fetch('send_mail.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.text())
  .then(data => {
      showPopup(data); // 서버 응답에 따라 팝업 표시
  })
  .catch(error => {
      showPopup('죄송합니다. 메시지 전송 중 오류가 발생했습니다.');
  });
};

// 팝업 열기
function showPopup(message) {
  document.getElementById('popupMessage').textContent = message;
  document.getElementById('popup').style.display = 'block';
}

// 팝업 닫기
function closePopup() {
  document.getElementById('popup').style.display = 'none';
}