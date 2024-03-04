<?php
if (!empty($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'home';
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>La Sarthe Travel</title>
  <link rel="stylesheet" href="https://use.typekit.net/gtw3hqk.css"/>
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
  <link rel="stylesheet" href="assets/style/style.css"/>
  <link rel="stylesheet" href="assets/style/styleIndex.css"/>
  <?php echo '
  <link rel="stylesheet" href="assets/style/style-' . $page . '.css" />' ?>
  <script src="assets/js/main.js" defer></script>
</head>

<body>
<header>
  <div class="title-box">
    <button class="hamburger">
      <div class="bar"></div>
    </button>
    <a href="?page=home">
      <h1>La Sarthe Travel</h1>
    </a>
    <div class="header-right">
      <span class="material-symbols-outlined" id="accountbutton"> person </span>
      <span class="material-symbols-outlined" id="settingsbutton">
          settings
        </span>
    </div>
  </div>
</header>
<main>
  <div class="left-sidebar">
    <div class="left-sponsors sponsors">
      <img src="assets/images/sponsors/koopa-air.png" alt="">
      <img src="assets/images/sponsors/luigi.png" alt="">
      <img src="assets/images/sponsors/rust.png" alt="">
    </div>
  </div>
  <div class="container">
    <?php
    include "include/pages/" . $page . ".php" ?>
  </div>
  <div class="right-sidebar">
    <div class="right-sponsors sponsors">
      <img src="assets/images/sponsors/mario.png" alt="" class="sponsor">
      <img src="assets/images/sponsors/shot.png" alt="" class="sponsor">
      <img src="assets/images/sponsors/yoshi.png" alt="" class="sponsor">

    </div>
  </div>

</main>


<div class="nav-menu">
  <ul>
    <a href="?page=info">
      <li class="nav-item">
          <span class="material-symbols-outlined">
            info
          </span>
        <h3>Info</h3>
      </li>
    </a>
    <a href="?page=tickets">
      <li class="nav-item"><span class="material-symbols-outlined">
            payments
          </span>
        <h3>Tickets</h3>
      </li>
    </a>
    <a href="?page=blog">
      <li class="nav-item"><span class="material-symbols-outlined">
            forum
          </span>
        <h3>Blog</h3>
      </li>
    </a>
    <a href="?page=contact">
      <li class="nav-item">
          <span class="material-symbols-outlined">
            mail
          </span>
        <h3>Contact</h3>
      </li>
    </a>
  </ul>
</div>

<div class="settings" id="settings">
  <div class="lang-select">
    <img src="assets/images/dutch-flag.svg" alt="">
    <img src="assets/images/english-flag.svg" alt="">
  </div>
  <div class="dark-mode">
      <span class="material-symbols-outlined dark active">
        light_mode
      </span>
    <span class="material-symbols-outlined">
        dark_mode
      </span>
  </div>
  <span class="material-symbols-outlined" id="settingsCloseButton">
      close
    </span>
</div>

<div class="account-window" id="account">
  <div class="account-header" id="accountCloseButton">
      <span class="material-symbols-outlined">
        close
      </span>
  </div>
  <div class="account-container">
    <?php
    if (isset($_SESSION["username"])) {
      $accountPage = "accountOverview";
    } else if (!empty($_GET["accountPage"])) {
      $accountPage = $_GET["accountPage"];
    } else {
      $accountPage = "login";
    }
    include "include/pages/account/" . $accountPage . ".php";
    //      include "include/pages/account/" . "accountOverview" . ".php";
    ?>
  </div>

</div>
</body>

</html>