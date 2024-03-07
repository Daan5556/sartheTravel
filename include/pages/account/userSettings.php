<?php
include "include/phpconfig.php";

$username = $_SESSION["username"];
$query = "SELECT user_information.user_name, profile_colors.color
FROM user_information
JOIN profile_colors ON user_information.color_id = profile_colors.color_id
WHERE user_information.user_name = '$username'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$colorToChangeTo = $row['color'];
?>

<div class="account-overview">
  <div class="account-top">
        <span class="profile-pic" id="profile-pic"
              onclick="window.location='?page=' + '<?php echo $page ?>'  + '&accountPage='">
          <?php
          echo strtoupper(substr($username, 0, 1));
          ?>
        </span>
    <span class="username">
          <?php
          echo $username;
          ?>

        </span>

    <h3>Pick Color</h3>
    <div class="color-wheel">
      <div class="color-to-pick blue" id="blue"></div>
      <div class="color-to-pick green" id="green"></div>
      <div class="color-to-pick yellow" id="yellow"></div>
      <div class="color-to-pick red" id="red"></div>
      <div class="color-to-pick purple" id="purple"></div>
      <div class="color-to-pick pink" id="pink"></div>
    </div>

    <button class="save-settings"
            onclick="window.location='/assets/include/pages/account/handleRequest/changeProfileColorToDB.php'">
      Save
    </button>

    <script src="/assets/js/changeProfilePic.js"></script>
    <script>
      changeProfileColor("<?php echo $colorToChangeTo ?>")
    </script>