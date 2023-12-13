<?php
require_once "./../Clases/Conversion.php";
class ConvertirDatosABinarios extends Conversion{

    public function convertir(){
        $valorBinario = $this->valorEntrada;
        $convertido=decbin($valorBinario);
        return $convertido;

    }
}
?>