<?php
namespace Sts\Controllers;
use Sts\Models\StsExclusao;

class ExcluirPedido
{
    public function index()
    {
        $excluir = new StsExclusao();
        $excluir->index();
        $_SESSION['status']=0;
        header('location:pedidos');
    }
}

