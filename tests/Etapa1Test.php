<?php

use App\Http\Controllers\Etapa1Controller;

class Etapa1Test extends TestCase
{
    public function verificaSeFuncaogmp_prob_primeExists()
    {
        $this->assertEquals(
            true, function_exists('gmp_prob_prime'),'Função gmp_prob_prime não habilitada(Instalar lib php_gmp)'
        );
    }

    public function testIsImpar()
    {
        $controller = new Etapa1Controller();
        $impar = $controller->isImpar(11);
        $this->assertTrue($impar);
    }

    public function testIsPar()
    {
        $controller = new Etapa1Controller();
        $par = $controller->isImpar(2);
        $this->assertNotTrue($par);
    }

    public function testVerificarNumero2EPrimo()
    {
        $this->assertEquals(
            2, gmp_prob_prime(2)
        );
    }

    public function testSaida10001NumeroPrimo()
    {
        $controller = new Etapa1Controller();
        $this->assertEquals(
            104743, $controller->calcularPrimo()
        );
    }

}
