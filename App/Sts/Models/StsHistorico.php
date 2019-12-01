<?php


namespace Sts\Models;


use Sts\Models\Helper\StsRead;

class StsHistorico
{
    private $resultado;
    public function index()
    {
        $listar = new StsRead();
        $listar->exeRead("pedido","WHERE id_cliente=:id order by id desc","id={$_SESSION['logado']}");
        $this->resultado = $listar->getResultado();
        return $this->resultado;
    }
}