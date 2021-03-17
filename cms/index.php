<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Nazwa naszej strony</h1>
    </header>
    <main>
        <?php 
            require('db.php');
            $sql = "SELECT * FROM memy LIMIT 10";
            $wynik = $baza->query($sql);
            while($mem = $wynik->fetch_assoc()) {
                $podpis = $mem['tytul'];
                $url = $mem['url'];
                $autor = $mem['autor'];
                $data = $mem['publikacja'];
                echo '<article>
                <h3>' . $podpis . '</h3>
                <h5>Autor: ' . $autor . '</h5>
                <img src="img/' . $url . '" alt="Testowy obrazek">
                <h6>Opublikowano: ' . $data . '</h6>
                <h6><a href="#">Komentarze</a></h6>
                </article>';
            }
        ?>
        
    </main>
</body>
</html>