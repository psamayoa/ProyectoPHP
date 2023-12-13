<?php
abstract class Conversion{
    protected $valorEntrada;

    public function __construct($valorEntrada){
        $this->valorEntrada = $valorEntrada;
    }
    abstract public function convertir();
}
?>