<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //wypisujemy wszystkie liczby od 1 do 20
    for($i = 1; $i <= 20; $i = $i + 1)
    {
        // wypisz wartosć licznika, dodaj przecinek i spację przed następną
        echo "$i, ";
    }
    echo "<br>"; //nowa linia
    echo "<ol>"; //otwarcie listy numerowanej
    for($i = 1; $i <= 20; $i = $i + 1)
    {
        echo "<li>Element listy</li>"; //element listy
    }
    echo "</ol>"; //zamknięcie listy
    ?>
</body>
</html>