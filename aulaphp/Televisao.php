<?php

class Televisao
{

    private $marca;
    private $polegadas;
    private $power;
    private $canal;
    private $volume;


    public function __construct($marca,$polegadas)
    {

        $this-> marca = $marca;
        $this-> polegadas = $polegadas;
        $this-> power =false;
        $this-> canal =1;
        $this-> volume =10;

    }
    

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getPolegadas(){
        return $this->polegadas;
    }

    public function setPolegadas($polegadas){
        $this->polegadas = $polegadas;
    }

    public function getPower(){
        return $this->power;
    }

    public function getCanal(){
        return $this->canal;
    }

    public function getVolume(){
        return $this->volume;
    }


    public function ligar()
    {

        if(!$this -> power)
        {
            $this-> power = true;
        }

    }



    public function desligar()
    {

        if($this -> power)
        {
            $this-> power = false;
        }

    }
    


    public function aumentarVolume()
    {

        if($this->power && $this->volume < 100)
        {
            $this-> volume++;
        }

    }



    public function diminuirVolume()
    {

        if($this->power && $this->volume > 0)
        {
            $this->volume --;
        }

    }



    public function mutar()
    {

        if($this->power && $this->volume > 0)
        {
            $this->volume = 0;
        }

    }



    public function trocarCanal($numeroCanal)
    {

        $arrayCanais = [1,3,8,11,12,20,32,36,38,44];


        if($this->power && in_array( $numeroCanal,$arrayCanais))
        { 
            $this-> canal = $numeroCanal;
        }

    }


}
