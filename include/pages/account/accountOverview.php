<?php
include "include/phpconfig.php";

$username = $_SESSION["username"];
?>

<div class="account-overview">
  <div class="account-top">
        <span class="profile-pic"
              onclick="window.location='?page=' + '<?php echo $page ?>'  + '&accountPage=userSettings'">
          <?php
          echo strtoupper(substr($username, 0, 1));
          ?>
        </span>
    <span class="username">
          <?php
          echo $username
          ?>
        </span>
    <button onclick="window.location='/include/pages/account/handleRequest/logout.php'">Log uit</button>
  </div>
  <div class="tickets">
    <h3>Mijn Tickets</h3>
    <table>
      <tr>
        <th>Evenement</th>
        <th>Datum</th>
        <th>Hoeveelheid</th>
      </tr>
      <tr>
        <td>Bollen Racing</td>
        <td>23/22/</td>
        <td>3</td>
      </tr>
      <tr>
        <td>Bollen Racing</td>
        <td>23/22/</td>
        <td>3</td>
      </tr>
      <tr>
        <td>Bollen Racing</td>
        <td>23/22/</td>
        <td>3</td>
      </tr>

    </table>
  </div>
</div>