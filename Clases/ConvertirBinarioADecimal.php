<?php
require_once "./../Clases/Conversion.php";
class ConvertirBinarioADecimal extends Conversion{

    public function convertir(){
        $valorDecimal = $this->valorEntrada;
        $convertido=bindec($valorDecimal);
        return $convertido;
    }

}
?>