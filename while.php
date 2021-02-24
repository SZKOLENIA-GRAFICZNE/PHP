<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //liczba do dzielenia
    $liczba = 1024;
    //pętla while
    while($liczba % 2 == 0)
    {
        $liczba = $liczba /2;
        echo "wartość liczby: $liczba<br>";
    }
    ?>
</body>
</html>