<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header class="row mt-5 border-bottom">
        {if isset($login)}
        <div class="col-2"><h3><a href="index.php">Główna</a></h3></div>
        <div class="col-4"><h3>Witaj {$login}!</h3></div>
        <div class="col-2"><a href="message.php"><button type="button" class="btn btn-primary">Wiadomości</button></a></div>
        <div class="col-2"><a href="addItem.php"><button type="button" class="btn btn-primary">Wystaw przedmiot</button></a></div>
        <div class="col-2"><a href="logout.php"><button type="button" class="btn btn-primary">Wyloguj się</button></a></div>
        {else}
        <div class="col">Witaj nieznajomy. Zaloguj się <a href="login.php">tutaj</a></div>
        {/if}
    </header>