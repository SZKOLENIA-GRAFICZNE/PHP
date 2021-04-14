{include file="header.tpl"}
{if isset($error)}
    <span class="errorMsg">{$error}</span>
{/if}
<div class="registerForm">
    <form action="" method="post">
        <label for="login">Nazwa użytkownika:</label><br>
        <input type="text" name="login" id="login" required><br>
        <label for="password">Hasło:</label><br>
        <input type="password" name="password" id="password" required><br>
        <button type="submit">Zarejestruj się</button>
    </form>
</div>
{include file="footer.tpl"}