<?php
namespace Sts\Models;
use Sts\Models\Helper\StsRead;
class StsExclusao
{
    public function index()
    {
        $id = (int)$_GET['id'];
        $exclusao = new StsRead();
        $exclusao->fullRead("delete from pedido where id=:id","id={$id}");
    }
}

