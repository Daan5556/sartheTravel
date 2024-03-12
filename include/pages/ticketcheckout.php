<?php
include "include/phpconfig.php";
if (!isset($_SESSION["username"])) {
  header("location: ?page=tickets&loginerror=2");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $amountKidsTickets = $_POST["kids"];
  $amountvolwassenenTickets = $_POST["volwassenen"];
  $amountvipTickets = $_POST["vip"];

  $amountKidsTickets = verifyAmount($amountKidsTickets);
  $amountvolwassenenTickets = verifyAmount($amountvolwassenenTickets);
  $amountvipTickets = verifyAmount($amountvipTickets);

  $total = $amountKidsTickets * 10 +
    $amountvolwassenenTickets * 25 +
    $amountvipTickets * 50;
  $username = $_SESSION['username'];
  $query = "INSERT INTO orders (user_id, amount_kids, amount_volwassenen, amount_vip)
SELECT u.user_id, $amountKidsTickets as amount_kids, $amountvolwassenenTickets as amount_volwassenen, $amountvipTickets as amount_vip
FROM user_information u
WHERE u.user_name = '$username'";

  $conn->query($query);
}

function verifyAmount($amount)
{
  if ($amount < 0 || is_nan($amount)) {
    return 0;
  }
  return $amount;
}

header("Location: ing.php?price=" . urlencode($total));
?>


