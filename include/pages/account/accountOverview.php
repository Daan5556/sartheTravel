<?php
include "include/phpconfig.php";

$username = $_SESSION["username"];
?>

<div class="account-overview">
  <div class="account-top">
        <span class="profile-pic" id="profile-pic-account"
              onclick="window.location='?page=' + '<?php echo $page ?>'  + '&accountPage=userSettings'">
          <?php
          echo strtoupper(substr($username, 0, 1));
          ?>
        </span>
    <span class="username">
          <?php
          echo $username;

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
          }


          ?>
        </span>
    <button onclick="window.location='/include/pages/account/handleRequest/logout.php'">Log uit</button>
  </div>
  <div class="tickets">
    <h3>Mijn Tickets</h3>
    <table>
      <tr>
        <th>Soort</th>
        <th>Hoeveelheid</th>
      </tr>
      <tr>
        <td>Kids</td>
        <td><?php echo $kidsAmount != null ? $kidsAmount : 0 ?></td>
      </tr>
      <tr>
        <td>Volwassenen</td>
        <td><?php echo $volwassenAmount != null ? $volwassenAmount : 0 ?></td>
      </tr>
      <tr>
        <td>VIP</td>
        <td><?php echo $vipAmount != null ? $vipAmount : 0 ?></td>
      </tr>

    </table>
  </div>
</div>