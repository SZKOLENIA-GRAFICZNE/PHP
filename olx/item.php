<?php 
require_once('db.php');
require_once('smarty/Smarty.class.php');
session_start(); 
$smarty = new Smarty();
$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

$query = $db->prepare("SELECT name, price, time, url, login FROM item 
                        LEFT JOIN user on user.id=item.seller 
                        WHERE item.id=?");
$id = $_REQUEST['id'];
$query->bind_param("i", $id);
$query->execute();
$result = $query->get_result();
$item = $result->fetch_assoc();
$smarty->assign('item', $item);

$smarty->display('item.tpl');