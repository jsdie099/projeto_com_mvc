<?php
namespace Sts\Controllers;
use Core\ConfigView;

class Pedidos
{
    public function index()
    {       
        $carregarView = new ConfigView("Sts/Views/pedidos/pedidos");
        $carregarView->renderizar();
    }
}

