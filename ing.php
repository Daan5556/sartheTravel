<?php
$price = urldecode($_GET["price"]);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/style/style-ticketcheckout.css">
  <title>ING | Betaalpagina</title>
</head>
<body>
<div class="pay-container">
  <img src="assets/images/ING.png" alt="">
  <div class="pay-right">
    <span class="price">€<span id="price"><?php echo $price ?></span></span>
    <button onclick="window.location='main.php?page=orderconfirmation'">Betaal</button>
  </div>
</div>
</body>
</html>