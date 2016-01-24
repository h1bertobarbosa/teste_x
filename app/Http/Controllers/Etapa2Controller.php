<?php

namespace App\Http\Controllers;

class Etapa2Controller extends Controller
{

	public function mostrarUrl()
	{
        $res = $this->fibonacci();

        echo '<a href="http://sexlog.com/prova_'.$res.'">Passo 3</a>';
	}

    public function fibonacci()
    {
        return parent::fibonacci();
    }


}
