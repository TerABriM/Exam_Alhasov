<?php
require_once('db.php');
$login = $_POST['login'];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$repeatpass = $_POST['repeatpass'];

$email = $_POST['email'];

if(empty($login) || empty($pass) || empty($repeatpass) || empty($email)){
  echo  "Заполните все поля";
}
else 
{
        if(!password_verify($repeatpass, $pass)){
        echo    "Пароль не совпадает"; 
    } else {
      $stmt = $conn->prepare("INSERT INTO users (login, pass, email) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $login, $pass, $email);
      if ($stmt->execute()) {

         echo "Успех";
      } else {
         echo "Ошибка: " . $stmt->error;
      }
      $stmt->close();

    }
}
?>
