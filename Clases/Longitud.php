<?php

interface Longitud
{
    public function convertirA(string $unidad): float;
}

class Kilometro implements Longitud
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "kilometro":
                return $this->valor;
            case "metro":
                return $this->valor * 1000;
            case "decametro":
                return $this->valor * 10;
            case "centimetro":
                return $this->valor * 100000;
            case "milimetro":
                return $this->valor * 1000000;
            default:
                return 0;
        }
    }
}



class Metro implements Longitud
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "metro":
                return $this->valor;
            case "kilometro":
                return $this->valor / 1000;
            case "decametro":
                return $this->valor / 10;
            case "centimetro":
                return $this->valor * 100;
            case "milimetro":
                return $this->valor * 1000;
            default:
                return 0;
        }
    }
}

class Decametro implements Longitud
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "metro":
                return $this->valor * 10;
            case "kilometro":
                return $this->valor / 100;
            case "decametro":
                return $this->valor;
            case "centimetro":
                return $this->valor * 1000;
            case "milimetro":
                return $this->valor * 10000;
            default:
                return 0;
        }
    }
}

class Centimetro implements Longitud
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "kilometro":
                return $this->valor / 1000;
            case "metro":
                return $this->valor / 100;
            case "decametro":
                return $this->valor / 1000;
            case "centimetro":
                return $this->valor;
            case "milimetro":
                return $this->valor * 10;
            default:
                return 0;
        }
    }
}

class Milimetro implements Longitud
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "metro":
                return $this->valor / 1000;
            case "kilometro":
                return $this->valor / 1000000;
            case "decametro":
                return $this->valor / 10000;
            case "centimetro":
                return $this->valor / 10;
            case "milimetro":
                return $this->valor;
            default:
                return 0;
        }
    }
}

function obtenerResultado(): string
{
    $resultado = "";
    
    // Verificar la existencia de las claves en $_POST
    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : null;
    $unidad_origen = isset($_POST['unidad_origen']) ? $_POST['unidad_origen'] : null;
    $unidad_destino = isset($_POST['unidad_destino']) ? $_POST['unidad_destino'] : null;


    if (!is_numeric($cantidad)) {
    return "La cantidad debe ser un número.";
    }

    $longitud_origen = null;
    switch ($unidad_origen) {
        case "kilometro": 
            $longitud_origen = new Kilometro($cantidad);
            break;
        case "metro":
            $longitud_origen = new Metro($cantidad);
            break;
        case "decametro":
            $longitud_origen = new Decametro($cantidad);
            break;
        case "centimetro":
            $longitud_origen = new Centimetro($cantidad);
            break;
        case "milimetro":
            $longitud_origen = new Milimetro($cantidad);
            break;
        default:
            return "Unidad de origen no válida.";
    }

    if (!$longitud_origen instanceof Longitud) {
        return "Error al instanciar la unidad de origen.";
    }

    $valor_en_destino = $longitud_origen->convertirA($unidad_destino);

    return "El resultado es: " . $valor_en_destino . " $unidad_destino";
}
?>
