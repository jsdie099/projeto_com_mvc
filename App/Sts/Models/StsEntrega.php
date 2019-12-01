<?php


namespace Sts\Models;


use Sts\Models\Helper\StsRead;

class StsEntrega
{
    private $Dados;
    public function index()
    {
        $update = new StsRead();
        $update->fullRead("update pedido set forma='entrega' where id=:id","id={$_GET['id_pedido']}");
    }
    public function listar()
    {
        $listar = new StsRead();
        $listar->exeRead("pedido","where id=:id","id={$_GET['id_pedido']}");
        $this->Dados = $listar->getResultado();
        return $this->Dados;
    }
}