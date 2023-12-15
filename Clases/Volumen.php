<?php

interface Litros
{
    public function ConvertirALitros($cant);
}

interface Galones
{
    public function ConvertirAGalones($cant);
}

interface CmCubicos
{
    public function ConvertirACmCubicos($cant);
}

interface PiesCubicos
{
    public function ConvertirAPiesCubicos($cant);
}

interface Mililitros
{
    public function ConvertirAMilimetros($cant);
}

class ConvertirLitros implements Litros, Galones, CmCubicos, PiesCubicos, Mililitros
{
    public function ConvertirALitros($cant)
    {
        return $cant;
    }
    public function ConvertirAGalones($cant)
    {
        return $cant * 0.2642;
        // 1 litro = 0.2642 galones
    }
    public function ConvertirACmCubicos($cant)
    {
        return  $cant * 1000; // 1 litro = 1000 centímetros cúbicos
    }
    public function ConvertirAPiesCubicos($cant)
    {
        return  $cant * 0.0353; // 1 litro = 0.0353 pies cubicos
    }
    public function ConvertirAMilimetros($cant)
    {
        return  $cant * 1000; // 1 litro = 1000 mililitros
    }
}

class ConvertirGalones implements Litros, CmCubicos, PiesCubicos, Mililitros, Galones
{
    public function ConvertirAGalones($cant)
    {
        return $cant;
    }   
    public function ConvertirALitros($cant)
    {
        return  $cant * 3.78541; // 1 galón = 3.78541 litros
    }
    public function ConvertirACmCubicos($cant)
    {
        return  $cant * 3785.41; // 1 galón = 3785.41 cm cubicos
    }
    public function ConvertirAPiesCubicos($cant)
    {
        return  $cant * 0.133681; // 1 galón = 0.133681 pies cubicos
    }
    public function ConvertirAMilimetros($cant)
    {
        return  $cant * 3785.41; // 1 galón = 3785.41 mililitros
    }
}

class ConvertirCmCubico implements Litros, Galones, PiesCubicos, Mililitros, CmCubicos
{
    public function ConvertirACmCubicos($cant)
    {
        return  $cant;
    }
    public function ConvertirALitros($cant)
    {
        return  $cant * 0.001; // 1 cmcubico = 0.001 litros 
    }
    public function ConvertirAGalones($cant)
    {
        return $cant * 0.000264172; // 1 cmcubico = 0.000264172 galones
    }
    public function ConvertirAPiesCubicos($cant)
    {
        return  $cant * 0.000035315; // 1 cmcubico = 0.000035315 pies cúbicos
    }
    public function ConvertirAMilimetros($cant)
    {
        return  $cant * 1; // 1 cmcubico = 1 mililitros
    }
}
class ConvertirPiesCubicos implements Litros, Galones, PiesCubicos, Mililitros, CmCubicos
{
    public function ConvertirALitros($cant)
    {
        return  $cant * 28.3168; // 1 piescubico = 28.3168 litros 
    }
    public function ConvertirAGalones($cant)
    {
        return $cant * 7.48052; // 1 piescubico = 7.48052 galones 
    }
    public function ConvertirAPiesCubicos($cant)
    {
        return  $cant;
    }
    public function ConvertirAMilimetros($cant)
    {
        return  $cant * 28316.8; // 1 piescubico = 28316.8 mililitros
    }
    public function ConvertirACmCubicos($cant)
    {
        return  $cant * 28316.8; // 1 piescubico = 28316.8 centímetros cúbicos
    }
}
class ConvertirMilimetros implements Litros, Galones, PiesCubicos, Mililitros, CmCubicos
{
    public function ConvertirALitros($cant)
    {
        return  $cant * 0.001; // 1 mili = 0.001 litros 
    }
    public function ConvertirAGalones($cant)
    {
        return $cant * 0.000264172; // 1 mili = 0.000264172 galones
    }
    public function ConvertirAPiesCubicos($cant)
    {
        return  $cant * 3.5315e-5; // 1 mili =  3.5315e-5 pies cúbicos
    }
    public function ConvertirAMilimetros($cant)
    {
        return  $cant;  
    }
    public function ConvertirACmCubicos($cant)
    {
        return  $cant *1 ; // 1 mililitro = 1 centímetro cúbico
    }
}

function obtenerResultado(): string
{
    $resultado = "";

    // Verificar la existencia de las claves en $_POST
    $cant = isset($_POST['cant']) ? $_POST['cant'] : null;
    $unidad_origen = isset($_POST['conversor']) ? $_POST['conversor'] : null;
    $unidad_destino = isset($_POST['conversor_destino']) ? $_POST['conversor_destino'] : null;


    if (!is_numeric($cant)) {
        return "La cantidad debe ser un número.";
    }

    

    $conversor = null;
    switch ($unidad_origen) {
        case "litro":
            $conversor = new ConvertirLitros($cant);
            break;
        case "galon":
            $conversor = new ConvertirGalones($cant);
            break;
        case "cmCubico":
            $conversor = new ConvertirCmCubico($cant);
            break;
        case "piesCubico":
            $conversor = new ConvertirPiesCubicos($cant);
            break;
        case "mili":
            $conversor = new ConvertirMilimetros($cant);
            break;
        default:
            return "Unidad de origen no válida.";
    }

    if (!$conversor instanceof Litros && !$conversor instanceof Galones && !$conversor instanceof CmCubicos && !$conversor instanceof PiesCubicos 
    && !$conversor instanceof Mililitros) {
        return "Error al instanciar la unidad de origen.";
    }

    switch ($unidad_destino) {
        case "litro":
            $resultado = $conversor->ConvertirALitros($cant);
            break;
        case "galon":
            $resultado = $conversor->ConvertirAGalones($cant);
            break;
        case "cmCubico":
            $resultado = $conversor->ConvertirACmCubicos($cant);
            break;
        case "piesCubico":
            $resultado = $conversor->ConvertirAPiesCubicos($cant);
            break;
        case "mili":
            $resultado = $conversor->ConvertirAMilimetros($cant);
            break;
        default:
            return "Unidad de destino no válida.";
    }

    return $resultado;

}
