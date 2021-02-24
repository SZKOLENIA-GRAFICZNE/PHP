<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    Liczymy deltę dla funcji kwadratowej f(x) = 3x^2 - 4x - 3 <br>
    <?php
        //deklarujemy parametry
        $a = 3;
        $b = -4;
        $c = -3;
        $delta = pow($b, 2) - 4 * $a * $c;
        echo "Policzona delta wynosi: $delta <br>";
        //delta jest dodatnia
        if($delta > 0) 
        {
            // pierwsze miejce zerowe
            $x1 = ($b*(-1) - sqrt($delta)) / (2 * $a);
            echo "Pierwsze miejsce zerowe y=$x1 <br>";
            // drugie miejsce zerowe
            $x2 = ($b*(-1) + sqrt($delta)) / (2 * $a);
            echo "Drugie miejsce zerowe y=$x2 <br>";
        } 
        else if($delta == 0) 
        {
            $x - ($b * (-1)) / (2 * $a);
            echo "Miejsce zerowe y=$x <br>";
        }
        else {
            //ujemna delta
            echo "Brak miejsc zerowych! <br>";
        }
    ?>
</body>
</html>