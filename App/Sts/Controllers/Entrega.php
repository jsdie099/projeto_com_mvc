<?php
namespace Sts\Controllers;
use Core\ConfigView;
use Sts\Models\StsEntrega;
class Entrega {
    private $Dados;
    public function index()
    {
        $atualiza = new StsEntrega();
        $atualiza->index();
        $this->Dados['dados']=$atualiza->listar();
        $carregaView = new ConfigView("Sts/Views/includes/acao_entrega");
        $carregaView->renderizar();
        $carregaView = new ConfigView("Sts/Views/entrega/entrega",$this->Dados);
        $carregaView->renderizar();
    }
}