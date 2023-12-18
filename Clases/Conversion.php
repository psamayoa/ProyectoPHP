<?php
abstract class Conversion{
    protected $valorEntrada;

    public function __construct($valorEntrada){
        $this->valorEntrada = $valorEntrada;
    }
    abstract public function convertirAByte();
    abstract public function convertirAKb();
    abstract public function convertirAMb();
    abstract public function convertirAGb();
    abstract public function convertirATb();

}
?>