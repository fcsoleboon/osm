<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $telegramId = $_POST['telegramId'];

  // ارسال ایمیل با استفاده از تنظیمات SMTP
  $to = 'fcsoleboon@gmail.com'; // آدرس ایمیل شما
  $subject = 'ثبت نام جدید';
  $message = "اسم اکانت بازی: $name\nآیدی تلگرام: $telegramId";
  $headers = 'From: your-email@example.com' . "\r\n" .
    'Reply-To: your-email@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

  // انتقال کاربر به صفحه موفقیت‌آمیز
  header('Location: success.html');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>صفحه ثبت نام</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .register-form {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      text-align: center;
    }

    .form-container h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .form-container input {
      padding: 10px;
      margin-bottom: 10px;
      width: 250px;
    }

    .form-container .submit-button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      border: none;
    }
  </style>
</head>
<body>
  <div class="register-form">
    <div class="form-container">
      <h2>ثبت نام</h2>
      <form action="" method="POST">
        <input type="text" name="name" placeholder="اسم اکانت بازی" required>
        <br>
        <input type="text" name="telegramId" placeholder="آیدی تلگرام" required>
        <br>
        <button href="success.html" type="submit" class="submit-button">ثبت</button>
      </form>
    </div>
  </div>
</body>
</html>
