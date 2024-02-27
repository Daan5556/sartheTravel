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
  <link rel="stylesheet" href="assets/style/stylevideo.css" />
  <link rel="stylesheet" href="assets/style/styleIndex.css" />
  <?php echo '
  <link rel="stylesheet" href="assets/style/style-' . $page . '.css" />' ?>
  <script src="assets/js/main.js" defer></script>
  <script src="assets/js/video.js" defer></script>
</head>

<body>
  <div class="landingPageButton">
    <div id="landingPageButton" onclick= "window.location.href = 'index.php'">Naar De Pagina</div>
  </div>
<div class="mute" >
<div class="muteIcon" id="muteButton">
<span class="material-symbols-outlined" id="volumeIcon">
volume_off
</span>
</div>

  </div>
<video autoplay muted loop class="video"> 
<source src="./assets/videos/race-bollen.mp4" type="video/mp4"> 
</video>
  <footer></footer>
</body>
</html>