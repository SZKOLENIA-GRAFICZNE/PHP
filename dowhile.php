<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //liczba początkowa
    $liczba = 2;
    do 
    {
        echo "Liczba wynosi: $liczba<br>";
        $liczba += 2; //tożsame z $liczba = $liczba + 2
    } while ($liczba <= 10);
    ?>
</body>
</html>