<div class="login">
  <h2>Aanmelden</h2>
  <form action="include/pages/account/handleRequest/writeAccountToSql.php" method="POST"
        onsubmit="return validateCreateAccount()">
    <div class="login-row">
      <label for="username">Gebruikersnaam</label>
      <input type="text" name="username" id="username">
    </div>
    <div class="login-row">
      <label for="password">Wachtwoord</label>
      <input type="password" name="password" id="password">
    </div>
    <div class="login-row">
      <label for="password">Bevestig Wachtwoord</label>
      <input type="password" id="confirm-password">
    </div>
    <input type="submit" value="Versturen">
  </form>
  <?php
  if (!empty($_GET["createaccounterror"])) {
    if ($_GET["createaccounterror"] == 1) {
      echo "<span class='login-error'>Gebruikersnaam bestaat al</span><br>";
    }
  }

  echo '<a href="?page=' . $page . '&accountPage=login">Account aanmaken</a>';
  echo '</div>';
  ?>
</div>

<script src="/assets/js/validateCreateAccount.js"></script>