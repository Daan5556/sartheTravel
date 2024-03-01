<div class="login">
    <h2>Aanmelden</h2>
    <form action="include/pages/account/handleRequest/writeAccountToSql.php" method="POST">
        <div class="login-row">
            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username">
        </div>
        <div class="login-row">
            <label for="password">Wachtwoord</label>
            <input type="password" name="password">
        </div>
        <div class="login-row">
            <label for="password">Bevestig Wachtwoord</label>
            <input type="password">
        </div>
        <input type="submit" value="Versturen">
    </form>
    <a href="?">Inloggen</a>
</div>