<?php
spl_autoload_register();
require __DIR__ . "/vendor/autoload.php";

const API_URL = "https://swapi.dev/api/";

session_start();

$controller = new Controller();

if(!isset($_GET['where']) || ($_GET['where'] == 'home')) {
    $controller->home();
} elseif($_GET['where'] == 'item') {
    $controller->item();
}