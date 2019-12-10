<?php
namespace Sts\Controllers;

use Core\ConfigView;
use Sts\Models\StsAttAceita;

class Notificacao
{
    public function index()
    {
        $att_pedido = new StsAttAceita();
        $att_pedido->index();
        $carregarView = new ConfigView("Sts/Views/notificacao/notificacao");
        $carregarView->renderizar();
    }
}

