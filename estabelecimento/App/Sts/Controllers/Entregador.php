<?php
namespace Sts\Controllers;
use Core\ConfigView;

class Entregador
{
    public function index()
    {
        if(isset($_SESSION['logado_f']))
        {
            $carregaView = new ConfigView("Sts/Views/entregador/entregador");
            $carregaView->renderizar();
        }
        else
        {
            $carregaView = new ConfigView("Sts/Views/home/home");
            $carregaView->renderizar();
        }
        
    }
}

