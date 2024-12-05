<?php

namespace App\Controllers;

class Clogeo extends BaseController
{
    //Metodo para mostrar el formulario2
    public function Mlogeo(): string
    {
        return view('FormulariosLogin/indexlogin');
    }
}
