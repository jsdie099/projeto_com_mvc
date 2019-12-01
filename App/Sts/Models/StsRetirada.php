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
}