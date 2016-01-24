<?php

namespace App\Http\Controllers;

class Etapa1Controller extends Controller
{

    /*
    instalar biblioteca apt-get install php5-gmp
    */
    public function mostrarUrl()
    {
    	echo '<a href="http://sexlog.com/prova_'.$this->calcularPrimo().'">Passo 2</a>';
    }

    public function calcularPrimo()
    {
        return parent::calcularPrimo();
    }

    public function isImpar($n)
    {
        return parent::isImpar($n);
    }

    //
}
