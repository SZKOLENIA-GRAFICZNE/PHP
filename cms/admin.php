<?php session_start(); ?>
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
        if(!isset($_SESSION['login'])) {
            exit;
        }
        require('db.php');
        $sql = "SELECT * FROM memy";
        $wynik = $baza->query($sql);
        echo '<table border="1">';
        while($mem = $wynik->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $mem['id'] . '</td>
                  <td>' . $mem['autor'] . '</td>
                  <td>' . $mem['tytul'] . '</td>
                  <td>' . $mem['url'] . '</td>
                  <td><a href="">Usuń</a></td>';
            echo '</tr>';
        }
        echo '</table>';
    ?>
    
</body>
</html>