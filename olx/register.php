<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja użytkownika</title>
    <style>
    div.registerForm {
        height: 50vmin;
        width: 50vmin;
        position: fixed;
        left: 25vmin;
        top: 25vmin;
        text-align: center;
    }
    div.registerForm input {
        margin-bottom: 20px;
    }
    span.errorMsg {
        color: red;
        font-weight: bold;
        font-size: 2rem;
    }
    </style>
</head>
<body>
<?php
if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
    require_once('db.php');
    $login = $_REQUEST['login'];
    $password = password_hash($_REQUEST['password'], PASSWORD_ARGON2I);

    $query = $db->prepare("INSERT INTO user (id, login, password) VALUES (NULL,?,?)");
    $query->bind_param("ss", $login, $password);
    $result = $query->execute();

    if($result) {
        //udało się utworzyć konto
        header('Location: index.php');
    } else {
        //nie udało się utworzyć konta
        echo '<span class="errorMsg">Nie udało się utworzyć konta użytkownika</span>';
    }
}

?>
<div class="registerForm">
    <form action="" method="post">
        <label for="login">Nazwa użytkownika:</label><br>
        <input type="text" name="login" id="login"><br>
        <label for="password">Hasło:</label><br>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Zarejestruj się</button>
    </form>
</div>
    
</body>
</html>