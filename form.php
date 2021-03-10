<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="get">
        <label for="imie">Imię:</label>
        <input type="text" name="imie" id="imie">
        <button type="submit">Wyślij</button>
    </form>

    <?php
        if(isset($_REQUEST['imie'])) {
            //istnieje pozycja "imie" w ramach tabeli $_REQUEST
            $imie = $_REQUEST['imie'];

            echo "Witaj, $imie!";
        } else {
            echo "Wprowadź swoje imię powyżej.";
        }
        

    ?>

</body>
</html>

