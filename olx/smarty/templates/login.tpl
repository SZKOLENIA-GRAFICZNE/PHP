{include file="header.tpl"}
<div class="container">
    <main class="row">
        <div class="col-12 col-md-8 offset-md-2 col-xl-4 offset-xl-4 mt-5">
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
    </main>
</div>
{include file="footer.tpl"}