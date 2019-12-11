<?php
namespace Sts\Controllers;

use Core\ConfigView;
use Sts\Models\StsAttAceita;

class Notificacao
{
    public function index()
    {
        if(isset($_SESSION['logado_f']))
        {
            $att_pedido = new StsAttAceita();
            $att_pedido->index();
            $carregarView = new ConfigView("Sts/Views/notificacao/notificacao");
            $carregarView->renderizar();
        }
        else
        {
            $erro = new Erro();
            $erro->index();
        }
        
    }
}

