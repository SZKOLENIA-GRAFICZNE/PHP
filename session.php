<?php
session_start();

if(!isset($_SESSION['czas'])) {
    $_SESSION['czas'] = time();
} else {
    $czas = $_SESSION['czas'];
    echo "Sesja utworzona: ".date('d.m.Y H:i:s', $czas)."<br>";
    echo "Obecnie jest: ".date('d.m.Y H:i:s', time())."<br>";
}

//var_dump($_SESSION);
?>