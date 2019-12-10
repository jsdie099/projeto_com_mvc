<?php
namespace Sts\Controllers;
use Sts\Models\StsExclusao;

class ExcluirPedido
{
    public function index()
    {
        $excluir = new StsExclusao();
        $excluir->index();
        header('location:pedidos');
    }
}

