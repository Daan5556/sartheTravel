<?php
include "include/phpconfig.php";
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

          include "include/tickets_query.php"
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