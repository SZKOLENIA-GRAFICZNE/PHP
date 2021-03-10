<?php
session_start();

if(!isset($_SESSION['czas'])) {
    $_SESSION['czas'] = time();
} else {
    $czas = $_SESSION['czas'];
    echo "Utworzono sesje: ".date('d.m.Y H:i:s', $czas)."<br>";
    echo "Teraz jest: ".date('d.m.Y H:i:s', time())."<br>";
}

?>