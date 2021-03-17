<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Tytuł: <input type="text" name="tytul" id=""><br>
        Autor: <input type="text" name="autor" id=""><br>
        Obrazek: <input type="file" name="obrazek" id=""><br>
        <input type="submit" value="Wyślij">
    </form>
    <a href="index.php">Powrót na stronę</a>
</body>
</html>
<?php
if(isset($_REQUEST['tytul'])) {
    $tytul = $_REQUEST['tytul'];
    $autor = $_REQUEST['autor'];
    $staraNazwa = $_FILES['obrazek']['name'];
    $tymczasowaNazwa = $_FILES['obrazek']['tmp_name'];
    //var_dump($_FILES);
    $nazwaPliku = md5($tytul . time());
    $nazwaPliku .= '.';
    $nazwaPliku .= pathinfo($staraNazwa, PATHINFO_EXTENSION);
    $nazwaPliku = "img/" . $nazwaPliku;
    //echo $nazwaPliku;
    if(move_uploaded_file($tymczasowaNazwa, $nazwaPliku)){
        echo "Plik wgrany poprawnie";
        require('db.php');
        $sql = "INSERT INTO memy (`id`, `tytul`, `url`, `autor`, `publikacja`) 
            VALUES (NULL, '$tytul', '$nazwaPliku', '$autor', current_timestamp())";
        $baza->query($sql);
    }
}

?>