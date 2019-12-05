<?php


namespace Sts\Models;


use Sts\Models\Helper\StsRead;

class StsRetirada
{
    public function index()
    {
        foreach ($_SESSION['pedido'] as $dados) {
            $id = $dados['id'];
        }
        $update = new StsRead();
        $update->fullRead("update pedido set forma='retirada' where id=:id","id={$id}");
    }
    public function listar()
    {
        $listar = new StsRead();
        $listar->exeRead("pedido","where id=:id","id={$_GET['id_pedido']}");
        $this->Dados = $listar->getResultado();
        return $this->Dados;
    }
}