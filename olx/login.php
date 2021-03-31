<?php 
require_once('db.php');
require_once('smarty/Smarty.class.php');
session_start(); 
$smarty = new Smarty();
$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

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
        $smarty->assign('error' , "Nieprawidłowy login lub hasło");
    }
}

$smarty->display('login.tpl');
?>





    
</body>
</html>