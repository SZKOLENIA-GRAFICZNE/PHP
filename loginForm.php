<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    if(isset($_REQUEST['login']) && isset($_REQUEST['haslo'])) {
        //echo "<pre>";
        //var_dump($_REQUEST);
        $prawidlowyLogin = "jkowalski";
        $prawidloweHaslo = "superHaslo1";

        $login = $_REQUEST['login'];
        $haslo = $_REQUEST['haslo'];

        if($login == $prawidlowyLogin && $haslo == $prawidloweHaslo) {
            echo "Zalogowałeś sie poprawnie <br>";
            $_SESSION['login'] = $login;
        } else {
            echo "Błędny login lub hasło!<br>";
        }
    }
        
    ?>
    <?php if(!isset($_SESSION['login'])) : ?>
    <form action="" method="post">
        <label for="login">Nazwa użytkownika:</label>
        <input type="text" name="login" id="login" required><br>
        <label for="haslo">Hasło:</label>
        <input type="password" name="haslo" id="haslo" required><br>
        <button type="submit">Zaloguj</button>
    </form>
    <?php endif ?>
</body>
</html>