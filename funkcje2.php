<?php
function ujemna($liczba)
{
    //funkcja ma zwracać liczbę ujemną
    //wartiant 1
    return abs($liczba) * (-1);
    //wariant 2
    if($liczba > 0)
        return $liczba * (-1);
    else
        return $liczba;
}
function liczbaUrodzenia(string $dataUrodzenia)
{
    // dodaj cyfry swojej dany urodzenia i wyciągnij 
    // ostatnią cyfrę np. 25.10.2005 -> 2+5+1+2+5 = 15 => 5
    $tablicaCyfr = str_split($dataUrodzenia);
    $suma = 0;
    foreach($tablicaCyfr as $cyfra) 
    {
        $suma += intval($cyfra);
    }
    $cyfra = $suma % 10;
    return $cyfra;
}
echo liczbaUrodzenia("13031985")
?>