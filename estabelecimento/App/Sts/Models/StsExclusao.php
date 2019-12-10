<?php
namespace Sts\Models;
use Sts\Models\Helper\StsRead;
class StsExclusao
{
    public function index()
    {
        $id = (int)$_GET['id'];
        $exclusao = new StsRead();
        $exclusao->fullRead("update pedido set status=0 where id=:id","id={$id}");
    }
}

