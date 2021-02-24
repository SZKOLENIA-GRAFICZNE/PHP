<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //załóżmy, że mamy małego podróżnika, który porusza się wyłącznie na
    //północ, południe, wschód lub zachód
    //porusza się w kierunku zgodnie z literą z kompasu
    $kierunek = "S";
    switch($kierunek)
    {
        case 'N': // jeżeli $kierunek == 'N'
            echo "Podróżnik idzie na północ";
        break; //przerwij działanie switcha - wróć do początku
        case 'S':
            echo "Podróżnik idzie na poludnie";
        break;
        case 'W':
            echo "Podróżnik idzie na zachód";
        break;
        case 'E':
            echo "Podróżnik idzie na wschód";
        break;
        default:
            echo "Podróżnik nie zna takiego kierunku i stoi w miejscu";
        break;
    }

    ?>
</body>
</html>