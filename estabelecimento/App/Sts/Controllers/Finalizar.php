<?php
namespace Sts\Controllers;
use Core\ConfigView;

class Finalizar
{
    public function index()
    {
        if(isset($_SESSION['logado_f']))
        {
            $carregarView = new ConfigView("Sts/Views/finalizacao/finalizacao");
            $carregarView->renderizar();
        }
        else
        {
            $erro = new Erro();
            $erro->index();
        }
        
    }
}

