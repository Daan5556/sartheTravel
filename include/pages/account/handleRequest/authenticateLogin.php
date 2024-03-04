<?php
include "../../../phpconfig.php";

if (!empty($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = 'home';
}

function validateLoginHashed($username, $password, $conn)
{
  $hashedPassword = getHashedPassword($username, $conn);

  if ($hashedPassword != null) {
    echo $password . "<br>";
    echo $hashedPassword . "<br>";
    return password_verify($password, $hashedPassword);
  }
  return false;
}

function getHashedPassword($username, $conn)
{
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
  $redirectTo = "/main.php?page=" . $page;
} else {
  echo "login failed";
  $redirectTo = "/main.php?page=" . $page . "&loginerror=1";
}

header("location: " . $redirectTo);
