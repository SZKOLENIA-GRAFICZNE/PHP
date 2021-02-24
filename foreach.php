<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //tworzymy tablice asocjacyjną z ocenami
    $oceny = array(
        'matematyka' => 1,
        'polski' => 3,
        'fizyka' => 2,
        'w-f' => 5,
    );
    //budujemy tabelkę
    echo '<table border=1>';
    //nagłówek
    echo "<tr><th>Przedmiot:</th><th>Ocena:</th><tr>";
    //pętla
    foreach ($oceny as $przedmiot => $ocena) {
        echo "<tr>";//otwarcie wiersza
        echo "<td>$przedmiot</td>";//lewa kolumna
        echo "<td>$ocena</td>";//prawa kolumna
        echo "</tr>";//zamknięcie wiersza
    }
    echo '</table>'; //zamknięcie tabeli
    ?>
</body>
</html>