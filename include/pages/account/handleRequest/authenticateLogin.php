<?php
include "../../../phpconfig.php";

if (!empty($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = 'home';
}

function validateLogin($username, $password, $conn) {
  $username = $conn->real_escape_string($username);
  $password = $conn->real_escape_string($password);

  $query = "SELECT * FROM user_information WHERE user_name='$username' AND user_password='$password'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    return true;
  } else {
    return false;
  }
}

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if (validateLogin($username, $password, $conn)) {
  $_SESSION["username"] = $username;
} else {
  echo "login failed";
  $_SESSION["login-error"] = "Gebruikersnaam & Wachtwoord komen niet overheen";
}

header("location:/main.php?page=" . $page);
