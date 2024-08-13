<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // 폼 데이터 가져오기
  $name = htmlspecialchars($_POST['name']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);

  // 수신자 이메일 주소 설정
  $to = "gke3364@outspring.co.kr";  // 여기에 수신할 이메일 주소를 입력하세요

  // 이메일 제목 설정
  $subject = "$name 님의 문의가 도착했습니다";

  // 이메일 내용 작성
  $message = "이름: $name\n";
  $message .= "전화번호: $phone\n";
  $message .= "이메일: $email\n";

  // 이메일 헤더 설정
  $headers = "From: $email";

  // 이메일 보내기
  if (mail($to, $subject, $message, $headers)) {
      echo "문의해주셔서 감사합니다!";
  } else {
      echo "죄송합니다. 메시지 전송 중 오류가 발생했습니다. 나중에 다시 시도해주세요.";
  }
}
?>
