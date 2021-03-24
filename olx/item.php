<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karta przedmiotu</title>
    <style>
        div.item {
            width: 80vmin;
            position: fixed;
            left: 10vmin;
        }
    </style>
</head>
<body>
<?php
require_once('db.php');
$query = $db->prepare("SELECT name, price, time, login FROM item 
                        LEFT JOIN user on user.id=item.seller 
                        WHERE item.id=?");
$id = $_REQUEST['id'];
$query->bind_param("i", $id);
$query->execute();
$result = $query->get_result();
$item = $result->fetch_assoc();
$name = $item['name'];
$price = $item['price'];
?>
<div class="item">
    <h1><?php echo $name; ?></h1>
    <div class="itemImage">
        <img src="https://picsum.photos/200/300"> 
    </div>
    Cena: <?php echo $price; ?><br>
    <a href="index.php">Powrót na stronę główną</a>
</div>

</body>
</html>