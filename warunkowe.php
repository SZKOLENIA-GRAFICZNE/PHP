<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $liczbaLosowa = rand(-10,10);
    echo "Wylosowaliśmy liczbę $liczbaLosowa <br>";
    if($liczbaLosowa > 5) 
    {
        //jeżeli warunek jest prawdziwy
        echo "Warunek prawdziwy <br>";
    }
    else 
    {
        //warunek fałszywy
        echo "warunek nie jest prawdziwy <br>";
    }
    if($liczbaLosowa > 3)
    {
        //if bez else - wyświetli sie poniższy komunikat albo nic
        echo "Liczba jest wieksza niż 3 <br>";
    }
    if($liczbaLosowa < 0)
    {
        //jeśli pierwszy warunek będzie prawdziwy
        echo "Liczba jest ujemna<br>";
    } 
    else if($liczbaLosowa > 0)
    {
        //jeśli drugi warunek będzie prawdziwy
        echo "liczba jest dodatnia<br>";
    }
    else 
    {
        //jeśli żaden warunek nie będzie prawdziwy
        echo "liczba nie jest ani doodatnia ani ujemna<br>";
    }
    ?>
</body>
</html>