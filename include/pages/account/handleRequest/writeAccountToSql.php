<?php
include "../../../phpconfig.php";
$userName = $_POST["username"];
$passWord = $_POST["password"];

if (empty($_GET["page"])) {
  $page = "home";
} else {
  $page = $_GET["page"];
}

$sql = "INSERT INTO user_information (user_name, user_password) VALUES ('$userName', '$passWord')";

$conn->query($sql);

header("Location: /main.php?page=" . $page . "&account-page=login");
