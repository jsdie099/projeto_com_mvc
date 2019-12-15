<?php
namespace Sts\Models;
use Sts\Models\Helper\StsRead;

class StsCancelamento
{
    public function index(int $id)
    {
        $exclusao = new StsRead();
        $exclusao->fullRead("delete from pedido where id=:id","id={$id}");
    }
}

