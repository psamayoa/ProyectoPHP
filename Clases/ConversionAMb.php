<?php
require_once "./../Clases/Conversion.php";

class ConversionAMb extends Conversion{
    
        public function convertirAByte(){
            $valor = $this->valorEntrada;
            $valorFinal = number_format($valor*1024*1024, 3, '.', '');
            return $valorFinal;
        }
    
        public function convertirAKb(){
            $valor = $this->valorEntrada;
            $valorFinal = number_format($valor*1024, 9, '.', '');
            return $valorFinal;
        }
    
        public function convertirAMb(){
            $valorFinal = $this->valorEntrada;
            return $valorFinal;
        }
    
        public function convertirAGb(){
            $valor = $this->valorEntrada;
            $valorFinal = number_format($valor/1024, 12, '.', '');
            return $valorFinal;
        }
    
        public function convertirATb(){
            $valor = $this->valorEntrada;
            $valorFinal = number_format($valor/(1024*1024), 15, '.', '');
            return $valorFinal;
        }
}
?>