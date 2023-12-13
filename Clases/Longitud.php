<?php

interface Longitud
{
    public function convertirA(string $unidad): float;
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
    $cantidad = $_POST['cantidad'];
    $unidad_origen = $_POST['unidad_origen'];
    $unidad_destino = $_POST['unidad_destino'];

    $longitud_origen = null;
    switch ($unidad_origen) {
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
