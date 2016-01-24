<?php

use App\Http\Controllers\Etapa3Controller;

class Etapa3Test extends TestCase
{

    public function testGetTabela()
    {
        $controller = new Etapa3Controller();

        $tabela = [
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 4,
            'e' => 5,
            'f' => 6,
            'g' => 7,
            'h' => 8,
            'i' => 9,
            'j' => 10,
            'k' => 11,
            'l' => 12,
            'm' => 13,
            'n' => 14,
            'o' => 15,
            'p' => 16,
            'q' => 17,
            'r' => 18,
            's' => 19,
            't' => 20,
            'u' => 21,
            'v' => 22,
            'w' => 23,
            'x' => 24,
            'y' => 25,
            'z' => 26
        ];

        $this->assertEquals(
            $tabela, $controller->getTabela()
        );
    }

    public function testEmailCriptografado()
    {
        $controller = new Etapa3Controller();

        $this->assertEquals(
            'b3rdcigpi4pv0gp@htmadv.rdb', $controller->getEmailCriptografado()
        );
    }

    public function testCaracteresIgnorados()
    {
        $controller = new Etapa3Controller();

        $this->assertEquals(
            ['@','.','3','4','0'], $controller->getCaracteresIgnorados()
        );
    }

    public function testSomaDuasEtapasAnteriores()
    {
        $controller = new Etapa3Controller();

        $this->assertEquals(
            20365115816, $controller->getSomaDuasEtapasAnteriores()
        );
    }

    public function testGetPosicaoCincoESeisDaSomaDasEtapas()
    {
        $controller = new Etapa3Controller();

        $this->assertEquals(
            11, $controller->getPosicaoCincoESeisDaSomaDasEtapas()
        );
    }

    public function testGetPosicaoInvertida()
    {
        $controller = new Etapa3Controller();

        $this->assertEquals(
            11, $controller->getPosicaoInvertida()
        );
    }

    public function testGetEmailConvertidoEmNumero()
    {
        $controller = new Etapa3Controller();

        $this->assertEquals(
            '23184397169416220716@820131422.1842', $controller->getEmailConvertidoEmNumero()
        );
    }

    public function testGetSomaChave()
    {
        $controller = new Etapa3Controller();

        $this->assertLessThanOrEqual(
            26,$controller->somaChave(29)
        );

        $this->assertEquals(
            4, $controller->somaChave(30)
        );
    }

    public function testEmailDescriptografado()
    {
        $controller = new Etapa3Controller();

        $this->assertEquals(
            'm3contrat4ag0ra@sexlog.com', $controller->getEmailDescriptografado()
        );
    }

}
