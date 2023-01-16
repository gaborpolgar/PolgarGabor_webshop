<?php 
session_start();
$controller = "";
$oldal = "termek_list";
if (!isset($_GET['oldal'])) {
    $controller = "controllers/termek_list.php";
} else {
    $oldal = $_GET['oldal'];
    if (file_exists("controllers/$oldal.php")) {
        $controller = "controllers/$oldal.php";
    } else {
        $controller = "controllers/errors/404.php";
    }
}
include "views/_main.php";