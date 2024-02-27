<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Здесь вы можете добавить проверки на валидность данных и другую логику
  
  $to = "gruzdevaroslav140@gmail.com";
  $subject = "Новое сообщение с веб-сайта";
  $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
  
  if (mail($to, $subject, $body)) {
    echo "Спасибо! Ваше сообщение успешно отправлено.";
  } else {
    echo "К сожалению, произошла ошибка при отправке сообщения.";
  }
}
?>
