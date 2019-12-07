<?php


namespace Sts\Models;


use Sts\Models\Helper\StsRead;

class StsEntrega
{
    private $Dados;
    public function index()
    {
        if(isset($_SESSION['pedido']) && is_array($_SESSION['pedido']))
        {
            foreach($_SESSION['pedido'] as $dados)
            {
                extract($dados);
                $id_p = (int)$id;
            }
        }
        else
        {
            $id_p = (int)$_GET['id_pedido']; 
        }
        $update = new StsRead();
        $update->fullRead("update pedido set forma='entrega' where id=:id","id={$id_p}");
    }
    public function listar()
    {
        $listar = new StsRead();
        $listar->exeRead("pedido","where id=:id","id={$_GET['id_pedido']}");
        $this->Dados = $listar->getResultado();
        return $this->Dados;
    }
}