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

if(!isset($_REQUEST['topic'])) //dopiero będziemy pisać
{
    $smarty->assign('sender_id', $_SESSION['id']);
    $smarty->assign('reciever_id', $_REQUEST['reciever_id']);
    $smarty->assign('reciever', $_REQUEST['reciever']);
    $smarty->display('addMessage.tpl');
}
   
else //wysyłamy 
{
    $sender_id = $_REQUEST['sender_id'];
    $reciever_id = $_REQUEST['reciever_id'];
    $topic = $_REQUEST['topic'];
    $content = $_REQUEST['content'];

    $query = $db->prepare("INSERT INTO message (id, sender_id, reciever_id, topic, content)
                            VALUES (NULL, ?, ?, ?, ?)");
    $query->bind_param("iiss", $sender_id, $reciever_id, $topic, $content);
    $query->execute();

    header('Location: message.php');
}
?>