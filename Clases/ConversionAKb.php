<?php
    require_once "./../Clases/Conversion.php";
    
    class ConversionAKb extends Conversion{
        
            public function convertirAByte(){
                $valor = $this->valorEntrada;
                $valorFinal = number_format($valor*1024, 12, '.', '');
                return $valorFinal;
            }
        
            public function convertirAKb(){
                $valorFinal = $this->valorEntrada;
                return $valorFinal;
            }
        
            public function convertirAMb(){
                $valor = $this->valorEntrada;
                $valorFinal = number_format($valor/1024, 12, '.', '');
                return $valorFinal;
            }
        
            public function convertirAGb(){
                $valor = $this->valorEntrada;
                $valorFinal = number_format($valor/(1024*1024), 12, '.', '');
                return $valorFinal;
            }
        
            public function convertirATb(){
                $valor = $this->valorEntrada;
                $valorFinal = number_format($valor/(1024*1024*1024), 12, '.', '');
                return $valorFinal;
            }
    }
?>