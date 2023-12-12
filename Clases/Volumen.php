<?php
    
    interface Litros {
        public function ConvertirALitros($cant);
    }
    
    interface Galones {
        public function ConvertirAGalones($cant);
    }
   
    interface CmCubicos {
        public function ConvertirACmCubicos($cant);
    }

    interface PiesCubicos {
        public function ConvertirAPiesCubicos($cant);
    }

    interface Mililitros {
        public function ConvertirAMilimetros($cant);
    }

    class ConvertirLitros implements Galones, CmCubicos, PiesCubicos, Mililitros {
        public function ConvertirAGalones($cant)
        {
            return $cant * 0.2642;
            // 1 litro = 0.2642 galones
        }
        public function ConvertirACmCubicos($cant)
        {
            return  $cant * 1000 ; // 1 litro = 1000 centímetros cúbicos
        }
        public function ConvertirAPiesCubicos($cant)
        {
            return  $cant * 0.0353 ; // 1 litro = 0.0353 pies cubicos
        }
        public function ConvertirAMilimetros($cant)
        {
            return  $cant * 1000 ; // 1 litro = 1000 mililitros
        }
    }

    class ConvertirGalones implements Litros, CmCubicos, PiesCubicos, Mililitros {
        public function ConvertirALitros($cant)
        {
            return  $cant * 3.78541 ; // 1 galón = 3.78541 litros
        }
        public function ConvertirACmCubicos($cant)
        {
            return  $cant * 3785.41 ; // 1 galón = 3785.41 cm cubicos
        }
        public function ConvertirAPiesCubicos($cant)
        {
            return  $cant * 0.133681 ; // 1 galón = 0.133681 pies cubicos
        }
        public function ConvertirAMilimetros($cant)
        {
            return  $cant * 3785.41 ; // 1 galón = 3785.41 mililitros
        }
    }

    class ConvertirCmCubico implements Litros, Galones, PiesCubicos, Mililitros {
        public function ConvertirALitros($cant)
        {
            return  $cant * 3.78541 ; // 1 galón = 3.78541 litros
        }
        public function ConvertirAGalones($cant)
        {
            return $cant * 3.78541 ; // 1 galón = 3.78541 litros
        }
        public function ConvertirAPiesCubicos($cant)
        {
            return  $cant * 0.133681 ; // 1 galón = 0.133681 pies cubicos
        }
        public function ConvertirAMilimetros($cant)
        {
            return  $cant * 3785.41 ; // 1 galón = 3785.41 mililitros
        }
    }

    

?>