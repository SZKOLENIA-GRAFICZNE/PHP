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
    echo "Witaj $login! <br>";
    echo '<a href="logout.php">Wyloguj się</a><br>';

    echo '<a href="addItem.php">Wystaw przedmiot</a><br>';
} else {
    echo 'Witaj nieznajomy. Zaloguj się <a href="login.php">tutaj</a>';
}
require_once('db.php');
$query = $db->prepare("SELECT * FROM item");
$query->execute();
$result = $query->get_result();
echo '<table>';
echo '<tr><th>Nazwa przedmiotu</th><th>Cena</th></tr>';
while($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['price'];

    echo '<tr>';
    echo "<td><a href=\"item.php?id=$id\">$name</a></td>";
    echo "<td>$price</td>";
    echo '</tr>';
}
echo '</table>';
?>

</body>
</html>