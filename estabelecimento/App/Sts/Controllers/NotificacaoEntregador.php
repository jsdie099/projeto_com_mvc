<?php
namespace Sts\Controllers;

use Core\ConfigView;

class NotificacaoEntregador
{
    public function index()
    {
        $carregarView = new ConfigView("Sts/Views/notificacao_entregador/notificao_entregador");
        $carregarView->renderizar();
    }
}

