<?php
require_once('db.php');
require_once('smarty/Smarty.class.php');
session_start(); 
$smarty = new Smarty();
$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');


if(isset($_REQUEST['itemName']) && isset($_REQUEST['itemPrice'])) {
    $itemName = $_REQUEST['itemName'];
    $itemPrice = $_REQUEST['itemPrice'];
    $category = $_REQUEST['category'];
    $staraNazwa = $_FILES['itemImage']['name'];
    $tymczasowaNazwa = $_FILES['itemImage']['tmp_name'];
    //var_dump($_FILES);
    $nazwaPliku = md5($itemName . time());
    $nazwaPliku .= '.';
    $nazwaPliku .= pathinfo($staraNazwa, PATHINFO_EXTENSION);
    $nazwaPliku = "img/" . $nazwaPliku;
    //echo $nazwaPliku;
    require_once('db.php');
    
    $seller = $_SESSION['id'];
    $query = $db->prepare("INSERT INTO item (id, name, price, url, seller, category) 
                VALUES (NULL, ?, ?, ?, ?, ?)");
    $query->bind_param("sdsii", $itemName, $itemPrice, $nazwaPliku, $seller, $category);
    $result = $query->execute();
    move_uploaded_file($tymczasowaNazwa, $nazwaPliku);
    header('Location: index.php');
}


$query = $db->prepare("SELECT * FROM category");
$query->execute();
$result = $query->get_result();
$categoryList = array();
while($category = $result->fetch_assoc())
    array_push($categoryList, $category);
$smarty->assign('categoryList', $categoryList);

$smarty->display('addItem.tpl');
?>

