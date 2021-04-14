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
    $smarty->assign('author_id', $_SESSION['id']);
}

else 
    $smarty->assign('author_id', 0);

$query = $db->prepare("SELECT item.id, name, price, time, url, login, user.id AS seller_id FROM item 
                        LEFT JOIN user on user.id=item.seller 
                        WHERE item.id=?");
$id = $_REQUEST['id'];
$query->bind_param("i", $id);
$query->execute();
$result = $query->get_result();
$item = $result->fetch_assoc();
$smarty->assign('item', $item);

$query = $db->prepare("SELECT comment.id, item_id, content, time, parent, login FROM `comment` LEFT JOIN user on user.id = comment.author_id WHERE item_id=?");
$query->bind_param("i", $item['id']);
$query->execute();
$result = $query->get_result();
$commentsList = array();
while($comment = $result->fetch_assoc()) {
    if($comment['parent'] == NULL) 
        array_push($commentsList, $comment);
    else 
    {
        foreach ($commentsList as &$parentComment) {
            if($parentComment['id'] == $comment['parent'])
            {
                if(!isset($parentComment['childList'])) 
                    $parentComment['childList'] = array();
                array_push($parentComment['childList'], $comment);
                break;
            }
        }
    }
}
$smarty->assign('commentsList', $commentsList);

$smarty->assign('item_id', $item['id']);

$smarty->display('item.tpl');