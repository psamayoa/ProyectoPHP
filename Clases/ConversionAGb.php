<?php
    require_once "./../Clases/Conversion.php";
    
    class ConversionAGb extends Conversion{
        
            public function convertirAByte(){
                $valor = $this->valorEntrada;
                $valorFinal = number_format($valor*1024*1024*1024, 0, '.', '');
                return $valorFinal;
            }
        
            public function convertirAKb(){
                $valor = $this->valorEntrada;
                $valorFinal = number_format($valor*1024*1024, 0, '.', '');
                return $valorFinal;
            }
        
            public function convertirAMb(){
                $valor = $this->valorEntrada;
                $valorFinal = number_format($valor*1024, 0, '.', '');
                return $valorFinal;
            }
        
            public function convertirAGb(){
                $valorFinal = $this->valorEntrada;
                return $valorFinal;
            }
        
            public function convertirATb(){
                $valor = $this->valorEntrada;
                $valorFinal = number_format($valor/1024, 3, '.', '');
                return $valorFinal;
            }
    }
?>