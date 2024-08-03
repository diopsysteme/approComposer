<?php

namespace App\Controller;

session_start();
use App\Models\Approvisionnement;
use App\Core\App;


class Appro
{
    private $approModel;

    public function __construct()
    {
        $app = App::getInstance();
        $this->approModel = $app->getModel('Appro');
    }

    public function filtreApp($date, $numero)
    {
        $filtre = [
            'date' => $date,
            'telephone' => $numero,
        ];
        $appros = $this->approModel->findAllFiltre($filtre);
        include "/var/www/html/appro1/view/appro/appro.html.php";
    }

    public function listeAppro()
    {
        $appros = $this->approModel->findAll();
        include "/var/www/html/appro1/view/appro/appro.html.php";
    }

    public function viewDetails($id)
    {
        $appr = $this->approModel->findById($id);
        $produit = $this->approModel->getProductsByApproId($id);

        include "/var/www/html/appro1/view/appro/detail.html.php";
    }

    public function add()
    {
        include "/var/www/html/appro1/view/appro/add.html.php";
    }

    public function addToSession($data)
    {
        $_SESSION['data'] = $data;
        $this->add();
    }
}
