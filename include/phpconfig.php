<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sarthe_travel";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (!empty($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'home';
}