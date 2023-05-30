<?php

class Entradas{
    public $tipoent;
    public $cantent;
    public $totalent;
    public $descuento;

    function setDatos($tipoent, $cantent){
        $this->tipoent = $tipoent;
        $this->cantent = $cantent;
        return true;
    }

    function setBoleta($totalent, $descuento){
        $this->totalent = $totalent;
        $this->descuento = $descuento;
        return true;
    }

    function getTipoEnt(){
        return $this->tipoent;
    }

    function getCantEnt(){
        return $this->cantent;
    }

    function getImpBoleta1(){
        return $this->totalent;        
    }

    function getImpBoleta2(){
        return $this->descuento;
    }        

    
}

?>