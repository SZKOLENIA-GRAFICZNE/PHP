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
    $password = password_hash($_REQUEST['password'], PASSWORD_ARGON2I);

    $query = $db->prepare("INSERT INTO user (id, login, password) VALUES (NULL,?,?)");
    $query->bind_param("ss", $login, $password);
    $result = $query->execute();

    if($result) {
        //udało się utworzyć konto
        header('Location: index.php');
    } else {
        //nie udało się utworzyć konta
        $smarty->assign('error' ,"Nie udało się utworzyć konta użytkownika");
    }
}

$smarty->display('register.tpl');
?>