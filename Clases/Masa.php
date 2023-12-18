<?php

interface Masa
{
    public function convertirA(string $unidad): float;
}

class Tonelada implements Masa
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "tonelada":
                return $this->valor;
            case "kilogramo":
                return $this->valor * 1000;
            case "gramo":
                return $this->valor * 1e6;
            case "centigramo":
                return $this->valor * 1e8;
            case "miligramo":
                return $this->valor * 1e9;
            case "libra":
                return $this->valor * 2204.62;
            case "onza":
                return $this->valor * 35274;
            default:
                return 0;
        }
    }
}

class Kilogramo implements Masa
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "tonelada":
                return $this->valor / 1000;
            case "kilogramo":
                return $this->valor;
            case "gramo":
                return $this->valor * 1000;
            case "centigramo":
                return $this->valor * 1e5;
            case "miligramo":
                return $this->valor * 1e6;
            case "libra":
                return $this->valor * 2.20462;
            case "onza":
                return $this->valor * 35.274;
            default:
                return 0;
        }
    }
}

class Gramo implements Masa
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "tonelada":
                return $this->valor / 1e6;
            case "kilogramo":
                return $this->valor / 1000;
            case "gramo":
                return $this->valor;
            case "centigramo":
                return $this->valor * 100;
            case "miligramo":
                return $this->valor * 1000;
            case "libra":
                return $this->valor / 453.592;
            case "onza":
                return $this->valor / 28.3495;
            default:
                return 0;
        }
    }
}


class Centigramo implements Masa
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "tonelada":
                return $this->valor / 1e7;
            case "kilogramo":
                return $this->valor / 10000;
            case "gramo":
                return $this->valor / 100;
            case "centigramo":
                return $this->valor;
            case "miligramo":
                return $this->valor * 10;
            case "libra":
                return $this->valor / 453592.37;
            case "onza":
                return $this->valor / 28349.5231;
            default:
                return 0;
        }
    }
}


class Miligramo implements Masa
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "tonelada":
                return $this->valor / 1e9;
            case "kilogramo":
                return $this->valor / 1e6;
            case "gramo":
                return $this->valor / 1000;
            case "centigramo":
                return $this->valor / 10;
            case "miligramo":
                return $this->valor;
            case "libra":
                return $this->valor / 45359237;
            case "onza":
                return $this->valor / 2834952.31;
            default:
                return 0;
        }
    }
}


class Libra implements Masa
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "tonelada":
                return $this->valor / 2204.62;
            case "kilogramo":
                return $this->valor / 2.20462;
            case "gramo":
                return $this->valor * 453.592;
            case "centigramo":
                return $this->valor * 4535.92;
            case "miligramo":
                return $this->valor * 453592.37;
            case "libra":
                return $this->valor;
            case "onza":
                return $this->valor * 16;
            default:
                return 0;
        }
    }
}

class Onza implements Masa
{
    private $valor;

    public function __construct(int $valor = 0)
    {
        $this->valor = $valor;
    }

    public function convertirA(string $unidad): float
    {
        switch ($unidad) {
            case "tonelada":
                return $this->valor / 35273.96;
            case "kilogramo":
                return $this->valor / 35.27396;
            case "gramo":
                return $this->valor * 28.3495;
            case "centigramo":
                return $this->valor * 283.495;
            case "miligramo":
                return $this->valor * 28349.5;
            case "libra":
                return $this->valor / 16;
            case "onza":
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

    $Masa_origen = null;
    switch ($unidad_origen) {
        case "tonelada": 
            $Masa_origen = new Tonelada($cantidad);
            break;
        case "kilogramo": 
            $Masa_origen = new Kilogramo($cantidad);
            break;
        case "gramo":
            $Masa_origen = new Gramo($cantidad);
            break;
        case "miligramo":
            $Masa_origen = new Miligramo($cantidad);
            break;
        case "libra":
            $Masa_origen = new Libra($cantidad);
            break;
        case "onza":
            $Masa_origen = new Onza($cantidad);
            break;
        default:
            return "Unidad de origen no válida.";
    }

    if (!$Masa_origen instanceof Masa) {
        return "Error al instanciar la unidad de origen.";
    }

    $valor_en_destino = $Masa_origen->convertirA($unidad_destino);

    return "El resultado es: " . $valor_en_destino . " $unidad_destino";
}
?>
