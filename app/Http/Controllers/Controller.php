<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
	protected function calcularPrimo()
	{
		$x = 0;
		$i = 0;
		
    	while($i < 10001){
    		if($this->isImpar($x) || $x == 2){
    			if(gmp_prob_prime($x) == 2){
					$primo = $x;
					$i++;
    			}
    		}
    		$x++;
    	}

    	return $primo;
	}

    protected function isImpar($n)
    {
    	if($n % 2 != 0){
    		return true;
    	}

    	return false;
    }


    protected function fibonacci()
	{
		$count = 1 ; 
		$f1 = 0; 
		$f2 = 1; 
		$soma = [];

		while ($count <= 50 ) { 
			$soma[] = $f1;
			$f3 = $f2 + $f1 ; 
			$f1 = $f2 ; 
			$f2 = $f3 ; 
			$count ++; 
		}  

		return array_sum($soma);
	}
}
