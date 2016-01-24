<?php

namespace App\Http\Controllers;

class Etapa3Controller extends Controller
{
	private $tabelaLetras; 
	private $emailCriptografado;
	private $chave;
    private $ignorar;
    private $emailNum;
    private $emailDescriptografado;
    private $caracteresIgnorados;
    private $somaEtapasAnteriores;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->emailCriptografado = 'b3rdcigpi4pv0gp@htmadv.rdb';
        $this->caracteresIgnorados = ['@','.','3','4','0'];
        $this->somaDuasEtapasAnteriores();

        $this->tabelaLetras = [
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

        $this->getChave();
        $this->converterLetraEmNumero();

        $this->descriptografarEmail();
    }

    public function etapa3()
    {
        echo $this->emailDescriptografado;
    }

    public function getTabela()
    {
        return $this->tabelaLetras;
    }

    public function getEmailCriptografado()
    {
        return $this->emailCriptografado;
    }

    public function getCaracteresIgnorados()
    {
        return $this->caracteresIgnorados;
    }

    public function getSomaDuasEtapasAnteriores()
    {
        return $this->somaEtapasAnteriores;
    }

    public function getPosicaoCincoESeisDaSomaDasEtapas()
    {
        return substr($this->somaEtapasAnteriores, 5,1).substr($this->somaEtapasAnteriores, 6,1);
    }

    public function getPosicaoInvertida()
    {
        return strrev($this->getPosicaoCincoESeisDaSomaDasEtapas());
    }

    public function getEmailConvertidoEmNumero()
    {
        return implode('',$this->emailNum);
    }

    public function getEmailDescriptografado()
    {
        return $this->emailDescriptografado;
    }

    private function converterLetraEmNumero()
    {
        $this->emailNum = [];

        for($i=0;$i < strlen($this->emailCriptografado);$i++){

            if(in_array($this->emailCriptografado[$i], $this->caracteresIgnorados)){
                $this->emailNum[] = $this->emailCriptografado[$i];
                $this->ignorar[$i] = true;
            }else{
                $this->emailNum[] = $this->tabelaLetras[$this->emailCriptografado[$i]];
            }
        }

    }

    private function descriptografarEmail()
    {
        foreach($this->emailNum as $k => $num){
            if(!isset($this->ignorar[$k])){
                $decrip = $this->converterNumeroEmLetra($num);
            }else{
                $decrip = $num;
            }

            $emailLetras[] = $decrip;
        }

        $this->emailDescriptografado = implode('', $emailLetras);
    }

    private function converterNumeroEmLetra($num)
    {
        $key = $this->somaChave($num + $this->chave);
        return array_search($key, $this->tabelaLetras);
    }

    private function getChave()
    {
        $this->chave = $this->getPosicaoInvertida();
    }

    public function somaChave($chave)
    {
        return ($chave % 26 == 0)?26:$chave % 26;
    }

    private function somaDuasEtapasAnteriores()
    {
        $this->somaEtapasAnteriores = $this->calcularPrimo() + $this->fibonacci();
    }
}
