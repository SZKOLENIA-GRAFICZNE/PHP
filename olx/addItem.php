<?php
session_start();
if(isset($_REQUEST['itemName']) && isset($_REQUEST['itemPrice'])) {
    require_once('db.php');
    $itemName = $_REQUEST['itemName'];
    $itemPrice = $_REQUEST['itemPrice'];
    
    $query = $db->prepare("INSERT INTO item (id, name, price) VALUES (NULL, ?, ?)");
    $query->bind_param("sd", $itemName, $itemPrice);
    $result = $query->execute();
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie przedmiotu</title>
</head>

<body>
    <form action="" method="post">
        <label for="itemName">Nazwa przedmiotu: </label><br>
        <input type="text" name="itemName" id="itemName"><br>
        <label for="itemPrice">Cena: </label><br>
        <input type="number" name="itemPrice" id="itemPrice"> zł <br>
        <button type="submit">Wystaw na sprzedaż</button>
    </form>
</body>

</html>
