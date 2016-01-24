<?php

use App\Http\Controllers\Etapa2Controller;

class Etapa2Test extends TestCase
{

    public function testSomaDosPrimeiros50Termos()
    {
        $controller = new Etapa2Controller();

        $this->assertEquals(
            20365011073, $controller->fibonacci()
        );
    }

}
