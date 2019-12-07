<?php
namespace Sts\Controllers;
use Core\ConfigView;
use Sts\Models\StsPedidos;
use variant;

class Pedidos
{
    private $Dados;
    public function index()
    {
        $pedidos = new StsPedidos();
        $this->Dados = $pedidos->index();
        
        $carregarView = new ConfigView("Sts/Views/pedidos/pedidos",$this->Dados);
        $carregarView->renderizar();
    }
}

