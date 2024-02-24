<?php
if (!empty($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>La Sarthe Travel</title>
  <link rel="stylesheet" href="https://use.typekit.net/gtw3hqk.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="assets/style/style.css" />
  <link rel="stylesheet" href="assets/style/styleIndex.css" />
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
      <h1>La Sarthe Travel</h1>
      <div class="header-right">
        <span class="material-symbols-outlined"> person </span>
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
        <img src="assets/images/sponsors/mario.png" alt="">
        <img src="assets/images/sponsors/shot.png" alt="">
        <img src="assets/images/sponsors/yoshi.png" alt="">

      </div>
    </div>

  </main>


  <div class="nav-menu">
    <ul>
      <a href="#">
        <li class="nav-item">
          <span class="material-symbols-outlined">
            info
          </span>
          <h3>Info</h3>
        </li>
      </a>
      <a href="#">
        <li class="nav-item"><span class="material-symbols-outlined">
            payments
          </span>
          <h3>Tickets</h3>
        </li>
      </a>
      <a href="#">
        <li class="nav-item"><span class="material-symbols-outlined">
            forum
          </span>
          <h3>Blog</h3>
        </li>
      </a>
      <a href="#">
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
</body>

</html>