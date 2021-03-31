<?php 
require_once('db.php');
require_once('smarty/Smarty.class.php');
session_start(); 
$smarty = new Smarty();
$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

if(isset($_SESSION['login']))
    $smarty->assign('login', $_SESSION['login']);
    
$query = $db->prepare("SELECT * FROM category");
$query->execute();
$result = $query->get_result();
$categoryList = array();
while($row = $result->fetch_assoc())
    array_push($categoryList, $row);
$smarty->assign('categoryList', $categoryList);

$query = $db->prepare("SELECT * FROM item");
if(isset($_REQUEST['category'])) {
    $query = $db->prepare("SELECT * FROM item WHERE category=?");
    $query->bind_param("i", $_REQUEST['category']);
}
$query->execute();
$result = $query->get_result();
$productList = array();
while($row = $result->fetch_assoc())
    array_push($productList, $row);
$smarty->assign('productList', $productList);

$smarty->display('index.tpl');
?>



