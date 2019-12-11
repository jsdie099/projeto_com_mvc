<?php
namespace Sts\Controllers;
use Core\ConfigView;

class Finalizar
{
    public function index()
    {
        $carregarView = new ConfigView("Sts/Views/finalizacao/finalizacao");
        $carregarView->renderizar();
    }
}

