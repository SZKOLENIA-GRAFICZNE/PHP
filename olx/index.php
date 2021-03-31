<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <style>
    div#lewy {
        width: 20vh;
        float: left;
    }
    div#prawy {
        width: 80vh;
        float: left;
    }
    td img {
        height: 100px;
    }
    td {
        border: 1px solid #ccc;
        padding: 10px;
    }
    table {
        border-collapse: collapse;
    }
    </style>
</head>
<body>
<header>
<?php
if(isset($_SESSION['login'])){
    $login = $_SESSION['login'];
    echo "Witaj $login! <br>";
    echo '<a href="logout.php">Wyloguj się</a><br>';

    echo '<a href="addItem.php">Wystaw przedmiot</a><br>';
} else {
    echo 'Witaj nieznajomy. Zaloguj się <a href="login.php">tutaj</a>';
}
?>
</header>
<div id="lewy">
<h3>Kategorie</h3>
<?php
require_once('db.php');
$query = $db->prepare("SELECT * FROM category");
$query->execute();
$result = $query->get_result();
echo '<ul>';
while($row = $result->fetch_assoc()) {
    echo '<li><a href="index.php?category=' . $row['id'] . '">' . $row['name'] . '</a></li>';
}
echo '</ul>';
?>
</div>
<div id="prawy">
<h3>Produkty</h3>
<?php

require_once('db.php');
$query = $db->prepare("SELECT * FROM item");

if(isset($_REQUEST['category'])) {
    $query = $db->prepare("SELECT * FROM item WHERE category=?");
    $query->bind_param("i", $_REQUEST['category']);
}
$query->execute();
$result = $query->get_result();
echo '<table>';
echo '<tr><th>Nazwa przedmiotu</th><th>Cena</th></tr>';
while($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['price'];
    $url = $row['url'];

    echo '<tr>';
    echo "<td><img src=\"$url\">";
    echo "<td><a href=\"item.php?id=$id\">$name</a></td>";
    echo "<td>$price</td>";
    echo '</tr>';
}
echo '</table>';
?>
</div>


</body>
</html>