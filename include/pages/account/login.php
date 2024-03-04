<div class="login">
    <h2>Login</h2>
    <form action="include/pages/account/handleRequest/authenticateLogin.php" method="post">
        <div class="login-row">
            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username" required>
        </div>
        <div class="login-row">
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" required>
        </div>
      <?php
      if (isset($_SESSION["login-error"])) {
        echo "<script>alert('Gebruikersnaam en wachtwoord komen niet overheen')</script>";
      }
      ?>
        <input type="submit" value="Versturen">
    </form>
  <?php
echo '<a href="?page=' . $page . '&accountPage=createAccount">Account aanmaken</a>';
echo '</div>';

  ?>