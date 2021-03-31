<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie użytkownika</title>
    <style>
    div.loginForm {
        height: 50vmin;
        width: 50vmin;
        position: fixed;
        left: 25vmin;
        top: 25vmin;
        text-align: center;
    }
    div.loginForm input,
    div.loginForm button {
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
    $password = $_REQUEST['password'];

    $query = $db->prepare("SELECT * FROM user WHERE login = ?");
    $query->bind_param("s", $login);
    $query->execute();
    $result = $query->get_result();
    if($result->num_rows == 1) {
        $userRow = $result->fetch_assoc();
        $dbHash = $userRow['password'];
        $id = $userRow['id'];
    } else {
        $dbHash = null;
    }
    
    $success = password_verify($password, $dbHash);

    if($success) {
        //udało się zalogować
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $id;
        header('Location: index.php');
    } else {
        //nie udało się zalogować
        echo '<span class="errorMsg">Nieprawidłowy login lub hasło</span>';
    }
}

?>
<div class="loginForm">
    <form action="" method="post">
        <label for="login">Nazwa użytkownika:</label><br>
        <input type="text" name="login" id="login"><br>
        <label for="password">Hasło:</label><br>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Zaloguj się</button><br>
        Nie masz konta? Zarejestruj się <a href="register.php">tutaj</a>
    </form>
</div>
    
</body>
</html>