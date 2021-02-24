<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    Liczymy pole i obwód koła o zadanym promieniu: <br>
    <?php
    //deklarujemy promień
    $r = 5.5;
    //wypisujemy promień na ekran
    echo "Promień koła wynosi $r <br>";
    //liczymy obwód ze wzoru
    $obwod = 2 * pi() * $r;
    //zaokrąglamy 
    $obwod = round($obwod, 2);
    //wypisujemy obwód
    echo "Obwód zadanego koła wynosi: $obwod <br>";
    //liczymy pole ze wzoru
    $pole = pi() * pow($r, 2);
    //zaokgrąglamy
    $pole = round($pole, 2);
    //wypisujemy pole
    echo "Pole zadanego koła wynosi: $pole <br>";

    //deklarujemy tabelę z ocenami
    $oceny = array(3,2,4,5,1);
    //używamy funkcji max aby pobrać najwyższą wartość
    $najwyzszaOcena = max($oceny);
    //wypisujemy
    echo "najwyższa otrzymana ocena to: $najwyzszaOcena <br>";
    //analogicznie działa funkcja min()

    //innne przydatne: abs(), sqrt()
    ?>
</body>
</html>