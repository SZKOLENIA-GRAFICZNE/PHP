<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <pre>
    <?php 
    // deklarujemy zmienną
    //zaczynamy literą, nie używamy polskich znaków
    // zapisujemy do zmiennej wartość 5 (jako liczba)
    $zmienna1 = 5;
    //zadeklarujmy liczbę ułamkową (zmiennoprzecinkową)
    $zmienna2 = 3.14;
    //zmienna typu logicznego - bool
    $zmienna3 = true; //ewentualnie = false;
    //tablice - lista wartości
    $zmiennaTablicowa = array('jabłko', "gruszka", 'pomarańcza');
    //odwołanie do tablicy $zmiennaTablicowa[2]
    //zmienna typu "pustego"
    $zmiennaPusta = null;
    //zrzucamy na ekran zawartość zmiennych
    var_dump($zmienna1);
    var_dump($zmienna2);
    var_dump($zmienna3);
    var_dump($zmiennaTablicowa);
    //zamiast liczby 5 zapisujemy słownie "pięć"
    $zmienna1 = "pięć";
    //ponownie sprawdzamy zawartość zmiennej
    var_dump($zmienna1);
    ?> 
    </pre>
    </body>
</html>