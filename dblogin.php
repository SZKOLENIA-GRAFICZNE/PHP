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
        $db = new mysqli('localhost', 'root', '', 'php');

        $login = $_REQUEST['login'];
        $haslo = $_REQUEST['haslo'];

        $sql = "SELECT * FROM `user` WHERE `login` = \"$login\"";

        $wynik = $db->query($sql);
        $wiersz = $wynik->fetch_assoc();

        $hasloZBazy = $wiersz['haslo'];

        if($haslo == $hasloZBazy) {
            echo "Zalogowałeś sie poprawnie <br>";
        } else {
            echo "Błędny login lub hasło!<br>";
        }
    }
    ?>
    <form action="" method="post">
        <label for="login">Nazwa użytkownika:</label>
        <input type="text" name="login" id="login" required><br>
        <label for="haslo">Hasło:</label>
        <input type="password" name="haslo" id="haslo" required><br>
        <button type="submit">Zaloguj</button>
    </form>
</body>
</html>