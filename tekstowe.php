<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //stworzymy sobie blok tekstu
    $tekst = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet vel neque eget vulputate. Nulla facilisi. 
        Suspendisse at nulla molestie, vestibulum orci et, pulvinar diam. Nam posuere suscipit rutrum. Sed laoreet, velit sed fermentum euismod, 
        urna neque condimentum odio, a eleifend nisi lectus et ante. Suspendisse dignissim magna at velit facilisis consectetur. Fusce feugiat vulputate odio.";
    //sprawdźmy jego długość
    $dlugoscTekstu = strlen($tekst);
    echo  "całkowita liczba znaków: $dlugoscTekstu <br>";
    //ile ma słów (słowo - rozdzielone spacjami)
    $iloscSlow = str_word_count($tekst);
    echo "całkowita liczba słów: $iloscSlow <br>";
    //odwracamy tekst litera po literze
    $tekstOdwrocony = strrev($tekst);
    //zmieniamy wszystkie litery na małe
    $tekstOdwrocony = strtolower($tekstOdwrocony);
    //zmieniamy wszystkie pierwsze litery każdego słowa na duże
    $tekstOdwrocony = ucwords($tekstOdwrocony);
    //usuwamy kropki - zastępujemy je ciągiem pustym
    $tekstOdwrocony = str_replace(".", "", $tekstOdwrocony);
    //wypisujemy zmodyfiowany tekst
    echo "$tekstOdwrocony <br>";
    //łaczenie tekstu
    $tekst1 = "Ala ";
    $tekst2 = "ma kota";
    $tekstPolaczony = $tekst1.$tekst2;
    echo $tekstPolaczony."<br>";
    ?>
</body>
</html>