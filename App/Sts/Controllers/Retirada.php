<?php


namespace Sts\Controllers;


use Core\ConfigView;
use Sts\Models\StsRetirada;

class Retirada
{
    public function index()
    {
        $carregarView = new ConfigView("Sts/Views/retirada/retirada");
        $carregarView->renderizar();
        $update = new StsRetirada();
        $update->index();
    }
}