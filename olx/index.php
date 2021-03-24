<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
</head>
<body>
<?php
if(isset($_SESSION['login'])){
    $login = $_SESSION['login'];
    echo "Witaj $login! ";
    echo '<a href="logout.php">Wyloguj się</a>';
} else {
    echo 'Witaj nieznajomy. Zaloguj się <a href="login.php">tutaj</a>';
}

?>
</body>
</html>