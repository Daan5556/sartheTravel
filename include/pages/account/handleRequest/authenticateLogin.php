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
  }
  return false;
}

function validateLoginHashed($username, $password, $conn) {
  $hashedPassword = getHashedPassword($username, $conn);

  if ($hashedPassword != null) {
    echo $password . "<br>";
    echo $hashedPassword . "<br>";
    return password_verify($password, $hashedPassword);
  }
  return false;
}

function getHashedPassword($username, $conn) {
  $query = "SELECT user_password FROM user_information WHERE user_name = '$username'";
  $result = $conn->query($query);

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row["user_password"];
  }
  return null;
}

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if (validateLoginHashed($username, $password, $conn)) {
  $_SESSION["username"] = $username;
} else {
  echo "login failed";
}

header("location:/main.php?page=" . $page);
