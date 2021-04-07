<?php 
require_once('db.php');
require_once('smarty/Smarty.class.php');
session_start(); 
$smarty = new Smarty();
$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

if(isset($_SESSION['id']))
{
    $smarty->assign("login", $_SESSION['login']);
}

$query = $db->prepare("SELECT * FROM message
                        LEFT JOIN user on message.sender_id=user.id 
                        WHERE reciever_id=?");
$query->bind_param("i", $_SESSION['id']);
$query->execute();
$result = $query->get_result();
$messageList = array();
while($message = $result->fetch_assoc()) 
{
    array_push($messageList, $message);
}
$smarty->assign('messageList', $messageList);
$smarty->display('message.tpl');

?>