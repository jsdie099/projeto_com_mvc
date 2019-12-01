<?php


namespace Sts\Controllers;


use Core\ConfigView;
use Sts\Models\StsHistorico;

class Historico
{
    private $Dados;
    public function index()
    {
        $listar = new StsHistorico();
        $this->Dados=$listar->index();
        $carregarView = new ConfigView("Sts/Views/historico/historico",$this->Dados);
        $carregarView->renderizar();
    }
}