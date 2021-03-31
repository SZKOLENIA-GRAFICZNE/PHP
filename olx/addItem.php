<?php
session_start();
if(isset($_REQUEST['itemName']) && isset($_REQUEST['itemPrice'])) {
    $itemName = $_REQUEST['itemName'];
    $itemPrice = $_REQUEST['itemPrice'];
    $category = $_REQUEST['category'];
    $staraNazwa = $_FILES['itemImage']['name'];
    $tymczasowaNazwa = $_FILES['itemImage']['tmp_name'];
    //var_dump($_FILES);
    $nazwaPliku = md5($itemName . time());
    $nazwaPliku .= '.';
    $nazwaPliku .= pathinfo($staraNazwa, PATHINFO_EXTENSION);
    $nazwaPliku = "img/" . $nazwaPliku;
    //echo $nazwaPliku;
    require_once('db.php');
    
    $seller = $_SESSION['id'];
    $query = $db->prepare("INSERT INTO item (id, name, price, url, seller, category) 
                VALUES (NULL, ?, ?, ?, ?, ?)");
    $query->bind_param("sdsii", $itemName, $itemPrice, $nazwaPliku, $seller, $category);
    $result = $query->execute();
    move_uploaded_file($tymczasowaNazwa, $nazwaPliku);
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
    <form action="" method="post" enctype="multipart/form-data">
        <label for="itemName">Nazwa przedmiotu: </label><br>
        <input type="text" name="itemName" id="itemName"><br>
        <label for="itemPrice">Cena: </label><br>
        <input type="number" name="itemPrice" id="itemPrice"> zł <br>
        <select name="category">
        <?php
            require_once('db.php');
            $query = $db->prepare("SELECT * FROM category");
            $query->execute();
            $result = $query->get_result();
            while($category = $result->fetch_assoc())
            {
                $id = $category['id'];
                $name = $category['name'];
                echo "<option value=\"$id\">$name</option>";
            }
        ?>
        </select><br>
        <label for="itemImage">Zdjęcie: </label><br>
        <input type="file" name="itemImage" id="itemImage"><br>
        <button type="submit">Wystaw na sprzedaż</button>
    </form>
</body>

</html>