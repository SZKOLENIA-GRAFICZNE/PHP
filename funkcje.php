<?php
function dodaj(int $x, int $y) : int
{
    $wynik = $x + $y;
    return $wynik;
}
function silnia(int $x) : int 
{
    //5! = 5 * 4 * 3 * 2 * 1
    //x * (x-1) => x=1
    for($i = $x-1; $i >= 1; $i--)
    {
        $x = $x * $i;
    }
    return $x;
}

function witaj(string $imie) : void
{
    echo "Witaj $imie!";
}

$a = 5;
$b = 2;
$wynik = $a + $b;
echo "Wynik dodawania: ".$wynik;
echo "<br>";

echo "Wynik dodawania w funkcji: ".dodaj($a, $b);
echo "<br>";
echo "Silnia z 5 wynosi: ".silnia(5);
echo "<br>";


witaj("Paweł");
echo "<br>";

function iloczynParzysty($x, $y)
{
    $iloczyn = $x * $y;
    if($iloczyn % 2 == 0)
    {
        echo "Liczba jest parzysta<br>";
    }
    else
    {
        echo "Liczba jest nieparzysta";
    }
    
}

iloczynParzysty(5, 5);
?>