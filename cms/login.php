<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_REQUEST['login']) && isset($_REQUEST['haslo'])) {
        $db = new mysqli('localhost', 'root', '', 'mem');

        $login = $_REQUEST['login'];
        $haslo = $_REQUEST['haslo'];

        $sql = "SELECT * FROM `user` WHERE `login` = \"$login\"";

        $wynik = $db->query($sql);
        $wiersz = $wynik->fetch_assoc();

        $hashZBazy = $wiersz['haslo'];

        if(password_verify($haslo, $hashZBazy)) {
            echo "Zalogowałeś sie poprawnie <br>";
            $_SESSION['login'] = $login;
        } else {
            echo "Błędny login lub hasło!<br>";
        }
    }

    if(!isset($_SESSION['login'])) :
    ?>

    <form action="" method="post">
        <label for="login">Nazwa użytkownika:</label>
        <input type="text" name="login" id="login" required><br>
        <label for="haslo">Hasło:</label>
        <input type="password" name="haslo" id="haslo" required><br>
        <button type="submit">Zaloguj</button>
    </form>
    <?php endif; ?>
</body>
</html>