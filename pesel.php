<?php
//data urodzenia, płeć, suma kontrolna

function pesel(string $pesel)
{
    // Pomnóż każdą cyfrę z numeru PESEL przez odpowiednią wagę
    // Uwaga, jeśli w trakcie mnożenia otrzymasz liczbę dwucyfrową, 
    // należy dodać tylko ostatnią cyfrę (na przykład zamiast 63 dodaj 3).
    $pierwszaCyfra = intval($pesel[0]);
    $pierwszaWazona = $pierwszaCyfra * 1;
    $pierwszaModulo = $pierwszaWazona % 10;

    $drugaModulo = (intval($pesel[1]) * 3) % 10;

    $trzeciaModulo = (intval($pesel[2]) * 7) % 10;

    $czwartaModulo = (intval($pesel[3]) * 9) % 10;

    $piataModulo = (intval($pesel[4]) * 1) % 10;

    $szostaModulo = (intval($pesel[5]) * 3) % 10;

    $siodmaModulo = (intval($pesel[6]) * 7) % 10;

    $osmaModulo = (intval($pesel[7]) * 9) % 10;

    $dziewiataModulo = (intval($pesel[8]) * 1) % 10;

    $dziesiataModulo = (intval($pesel[9]) * 3) % 10;

    //Dodaj do siebie otrzymane wyniki
    $suma = $pierwszaModulo + $drugaModulo + $trzeciaModulo + $czwartaModulo
            + $piataModulo + $szostaModulo + $siodmaModulo + $osmaModulo
            + $dziewiataModulo + $dziesiataModulo;
    // Odejmij uzyskany wynik od 10. Uwaga: jeśli w trakcie dodawania otrzymasz liczbę dwucyfrową, 
    // należy odjąć tylko ostatnią cyfrę (na przykład zamiast 32 odejmij 2). 
    $suma = $suma % 10;
    $cyfraKontrolna = 10 - $suma;

    if($pesel[10] == $cyfraKontrolna)
    {
        echo "Pesel jest prawidłowy<br>";
    }
    else 
    {
        echo "Pesel jest nieprawidłowy<br>";
    }

    //sprawdz rok urodzenia i wypisz wiek osoby w latach
    $rokUrodzenia = intval($pesel[0]) * 10 + intval($pesel[1]); //da nam rok - np 04 albo 85
    if($pesel[2] == 2) $rokUrodzenia += 2000;
    if($pesel[2] < 2) $rokUrodzenia += 1900;
    //teraz mamy 19xx albo 20xx rok
    $wiek = 2021 - $rokUrodzenia;
    echo "Właściciel numeru PESEL ma $wiek lat<br>";
    //sprawdź płeć i wyświetl stosowny komunikat

}

pesel("00000000000");
?>