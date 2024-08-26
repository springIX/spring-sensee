<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require '../vendor/autoload.php'; // PHPMailer autoload

  // 폼 데이터 받기
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $category = isset($_POST['category']) ? $_POST['category'] : ''; // 여기서 $category 변수를 초기화합니다.
  $email = isset($_POST['email']) ? $_POST['email'] : '';

  $mail = new PHPMailer(true);

  try {
      $mail->CharSet = 'utf-8';
      // 서버 설정
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';            // Gmail SMTP 서버
      $mail->SMTPAuth   = true;
      $mail->Username   = 'qwe3364@gmail.com';      // Gmail 사용자 이메일 주소
      $mail->Password   = 'ikuu cmdc jaah bvfw';         // Gmail 애플리케이션 비밀번호
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port       = 587;

      // 이메일 송신자 & 수신자 설정
      $mail->setFrom($email, $name);                   // 사용자가 입력한 이메일 주소와 이름을 송신자로 설정
      $mail->addAddress('qwe3364@gmail.com', '고경은'); // 수신자 이메일과 이름

      // 이메일 내용 설정
      $mail->isHTML(true);
      $mail->Subject = "$name 님의 $category "; // 여기서 $category 변수를 사용합니다.
      $mail->Body    = "
          <h2>$category</h2>
          <p>이름: $name</p>
          <p>전화번호: $phone</p>
          <p>이메일: $email</p>
      ";
      $mail->AltBody = "$name 님이 $category 에 대해 문의를 보냈습니다. 전화번호: $phone, 이메일: $email";

      // 이메일 전송
      $mail->send();
      echo "이메일이 성공적으로 전송되었습니다.";
  } catch (Exception $e) {
      echo "이메일 전송에 실패했습니다. 메일러 오류: {$mail->ErrorInfo}";
  }
?>
