<?php


namespace Sts\Controllers;


use Core\ConfigView;
use Sts\Models\StsRetirada;

class Retirada
{
    private $Dados;
    public function index()
    {
        $update = new StsRetirada();
        $update->index();
        $this->Dados = $update->listar();
        $carregarView = new ConfigView("Sts/Views/retirada/retirada",$this->Dados);
        $carregarView->renderizar();
        
    }
}