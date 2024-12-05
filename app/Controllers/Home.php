<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('FormulariosLogin/indexlogin');
    }
    //Metodo para mostrar el formulario1
    public function Mindex1(): string
    {
        return view('VistasLocales/Login/index1');
    }
    //Metodo para mostrar el formulario2
    public function Mindex2(): string
    {
        return view('VistasLocales/Compras/index2');
    }
}

