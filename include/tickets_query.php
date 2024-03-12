<?php

$kidsAmount = 0;
$volwassenAmount = 0;
$vipAmount = 0;

$query = "SELECT o.*
FROM orders o
JOIN user_information u ON o.user_id = u.user_id
WHERE u.user_name = '$username'";

$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {

  $kidsAmount += !empty($row["amount_kids"]) ? $row["amount_kids"] : 0;
  $volwassenAmount += !empty($row["amount_volwassenen"]) ? $row["amount_volwassenen"] : 0;
  $vipAmount += !empty($row["amount_vip"]) ? $row["amount_vip"] : 0;

  $totalTicketsAmount = $kidsAmount + $volwassenAmount + $vipAmount;
}