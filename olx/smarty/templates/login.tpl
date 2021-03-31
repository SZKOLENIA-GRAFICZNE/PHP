{include file="header.tpl"}
{if isset($error)}
    <span class="errorMsg">{$error}</span>
{/if}

<div class="loginForm">
    <form action="" method="post">
        <label for="login">Nazwa użytkownika:</label><br>
        <input type="text" name="login" id="login"><br>
        <label for="password">Hasło:</label><br>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Zaloguj się</button><br>
        Nie masz konta? Zarejestruj się <a href="register.php">tutaj</a>
    </form>
</div>
{include file="footer.tpl"}