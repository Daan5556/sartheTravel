<?php
include "../../../phpconfig.php";
$userName = $_POST["username"];
$passWord = $_POST["password"];

$checkUserNameQuery = "SELECT * FROM user_information WHERE user_name = '$userName'";
$userNameResult = $conn->query($checkUserNameQuery);

if (!$userNameResult->num_rows > 0) {
  $hashedPassword = password_hash($passWord, PASSWORD_BCRYPT);

  if (empty($_GET["page"])) {
    $page = "home";
  } else {
    $page = $_GET["page"];
  }

  $color_id = mt_rand(1, 6);
  $sql = "INSERT INTO user_information (user_name, user_password, color_id) VALUES ('$userName', '$hashedPassword', '$color_id')";

  $conn->query($sql);

  header("Location: /main.php?page=" . $page . "&accountPage=login");
} else {
  header("Location: /main.php?page=" . $page . "&accountPage=createAccount&createaccounterror=1");

}
