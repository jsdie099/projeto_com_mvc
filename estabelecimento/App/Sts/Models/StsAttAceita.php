<?php


namespace Sts\Models;


use Sts\Models\Helper\StsRead;

class StsAttAceita
{
    public function index()
    {
        $id = (int)$_GET['id'];
        $update = new StsRead();
        $update->fullRead("update pedido set status='2' where id=:id","id={$id}");
        $_SESSION['status']=2;
    }
}