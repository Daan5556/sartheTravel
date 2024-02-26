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
</head>

<body>
  <div>
    
  </div>
    <audio src=".assets/audios/"></audio>
<video autoplay muted loop class="video"> 
<source src="./assets/videos/race-bollen.mp4" type="video/mp4"> 
</video>
  <footer></footer>
</body>
</html>