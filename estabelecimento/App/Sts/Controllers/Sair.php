<?php
namespace Sts\Controllers;

class Sair
{
    public function index()
    {
        unset($_SESSION['logado']);
        header('location:home');
    }
}