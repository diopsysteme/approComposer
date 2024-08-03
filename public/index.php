<?php

use App\Controller\Appro;
use App\Core\App;

require_once "/var/www/html/approComposer/vendor/autoload.php";

$app = App::getInstance();

$approController = new Appro();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["search"])) {
        $date_fr = $_POST["date"];
        $numero = $_POST["telephone"];
        $approController->filtreApp($date_fr, $numero);
    } elseif (isset($_POST["search2"])) {
        $data = $_POST; 
        $approController->addToSession($data);
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['details'])) {
            $id = $_GET['details'] ?: 1;
            $approController->viewDetails($id);
        } elseif (isset($_GET['add'])) {
            $approController->add();
        } else {
            $approController->listeAppro();
        }
    }
}
