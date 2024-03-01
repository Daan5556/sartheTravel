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
      <div></div>
      <h1>La Sarthe Travel</h1>
      <div class="header-right">
        <span class="material-symbols-outlined"> person </span>
        <span class="material-symbols-outlined" id="settingsbutton">
          settings
        </span>
      </div>
    </div>
    <div class="colored-bar">
      <a href="" class="colored-nav-box">
        <div class="one-color red"></div>
        <span>Info</span>
      </a>
      <a href="" class="colored-nav-box">
        <div class="one-color blue"></div>
        <span>Tickets</span>
      </a>
      <a href="" class="colored-nav-box">
        <div class="one-color green"></div>
        <span>Blog</span>
      </a>
      <a href="" class="colored-nav-box">
        <div class="one-color yellow"></div>
        <span>Contact</span>
      </a>
    </div>
  </header>
  <div class="settings" id="settings">
    <div class="lang-select-box">
      <img src="assets/images/dutch-flag.svg" alt="Dutch Flag" />
      <img src="assets/images/english-flag.svg" alt="English Flag" />
    </div>
    <div class="dark-mode">
      <span class="material-symbols-outlined active"> light_mode </span>
      <span class="material-symbols-outlined"> dark_mode </span>
    </div>
  </div>
  <div class="container">
    <div class="index-quickselect-container">
      <div class="gray-transparant-box">
        <h2>Info</h2>
        <span class="material-symbols-outlined"> info </span>
      </div>
      <div class="gray-transparant-box">
        <h2>Tickets</h2>
        <span class="material-symbols-outlined"> payments </span>
      </div>
      <div class="gray-transparant-box">
        <h2>Blog</h2>
        <span class="material-symbols-outlined"> post </span>
      </div>
    </div>
  </div>
  
  <footer></footer>
</body>

</html>