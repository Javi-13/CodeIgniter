<?php

namespace App\Controllers;

class Cindex1 extends BaseController
{
    //Metodo para mostrar el formulario1
    public function Mindex1(): string
    {
        return view('VistasLocales/Login/index1');
    }
}

