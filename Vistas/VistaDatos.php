<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Volumen</title>
</head>
<?php
    require_once "./../Clases/ConversionAByte.php";
    require_once "./../Clases/ConversionAKb.php";
    require_once "./../Clases/ConversionAMb.php";
    require_once "./../Clases/ConversionAGb.php";
    require_once "./../Clases/ConversionATb.php";
    $resultado="";
    $numero="";
    $cantidadForm="";
    $datoForm="";
    $seleccionadoForm="";
    if(isset($_POST['cantidad'])){
        $datoForm=$_POST['dato'];
        $seleccionadoForm=$_POST['seleccionado'];
        $cantidadForm=$_POST['cantidad'];
        $resultado="";
        switch($datoForm){
            case 'bytes':
                $convertir = new ConversionAByte($cantidadForm);
                if($seleccionadoForm=='bytes'){
                    $resultado = $convertir->convertirAByte();
                }else if($seleccionadoForm=='kb'){
                    $resultado = $convertir->convertirAKb();
                }else if($seleccionadoForm=='mb'){
                    $resultado = $convertir->convertirAMb();
                }else if($seleccionadoForm=='gb'){
                    $resultado = $convertir->convertirAGb();
                }else if($seleccionadoForm=='tb'){
                    $resultado = $convertir->convertirATb();
                }
                break;
            case 'kb':
                $convertir = new ConversionAKb($cantidadForm);
                if($seleccionadoForm=='bytes'){
                    $resultado = $convertir->convertirAByte();
                }else if($seleccionadoForm=='kb'){
                    $resultado = $convertir->convertirAKb();
                }else if($seleccionadoForm=='mb'){
                    $resultado = $convertir->convertirAMb();
                }else if($seleccionadoForm=='gb'){
                    $resultado = $convertir->convertirAGb();
                }else if($seleccionadoForm=='tb'){
                    $resultado = $convertir->convertirATb();
                }
                break;
            case 'mb':
                $convertir = new ConversionAMb($cantidadForm);
                if($seleccionadoForm=='bytes'){
                    $resultado = $convertir->convertirAByte();
                }else if($seleccionadoForm=='kb'){
                    $resultado = $convertir->convertirAKb();
                }else if($seleccionadoForm=='mb'){
                    $resultado = $convertir->convertirAMb();
                }else if($seleccionadoForm=='gb'){
                    $resultado = $convertir->convertirAGb();
                }else if($seleccionadoForm=='tb'){
                    $resultado = $convertir->convertirATb();
                }
                break;
            case 'gb':
                $convertir = new ConversionAGb($cantidadForm);
                if($seleccionadoForm=='bytes'){
                    $resultado = $convertir->convertirAByte();
                }else if($seleccionadoForm=='kb'){
                    $resultado = $convertir->convertirAKb();
                }else if($seleccionadoForm=='mb'){
                    $resultado = $convertir->convertirAMb();
                }else if($seleccionadoForm=='gb'){
                    $resultado = $convertir->convertirAGb();
                }else if($seleccionadoForm=='tb'){
                    $resultado = $convertir->convertirATb();
                }
                break;
            case 'tb':
                $convertir = new ConversionATb($cantidadForm);
                if($seleccionadoForm=='bytes'){
                    $resultado = $convertir->convertirAByte();
                }else if($seleccionadoForm=='kb'){
                    $resultado = $convertir->convertirAKb();
                }else if($seleccionadoForm=='mb'){
                    $resultado = $convertir->convertirAMb();
                }else if($seleccionadoForm=='gb'){
                    $resultado = $convertir->convertirAGb();
                }else if($seleccionadoForm=='tb'){
                    $resultado = $convertir->convertirATb();
                }
                break;
            default:
                break;             
        }
    }
?>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Conversor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./VistaVolumen.php">Volumen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./VistaMasa.php">Masa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./VistaLongitud.php">Longitud</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./VistaDatos.php">Datos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index_moneda2.php">Moneda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index_tiempo2.php">Tiempo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container text-center">
        <h1 class="text-center">Conversor de Datos</h1><br>
        <form action="" method="post" class="needs-validation" onsubmit="return validarFormulario();" novalidate >
            <div class="row">   
                <div class="col-3">
                    <br>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Convertir</label>
                        <select class="form-select" name="dato">
                            <option value="bytes" <?=$datoForm==="bytes"?"selected":""?>>Bytes</option>
                            <option value="kb"<?=$datoForm==="kb"?"selected":""?>>KiloBytes</option>
                            <option value="mb"<?=$datoForm==="mb"?"selected":""?>>MegaBytes</option>
                            <option value="gb"<?=$datoForm==="gb"?"selected":""?>>GigaBytes</option>
                            <option value="tb"<?=$datoForm==="tb"?"selected":""?>>TeraBytes</option>
                        </select>
                    </div>
                </div>
                <div class="col-3" >
                    <label>Cantidad</label>
                    <input type="text" class="form-control" value='<?=$cantidadForm?>' name="cantidad" id="cantidad" 
                    onkeypress="validarEntradaConversion(this.value)"  name="cantidad" oninput="validarEntradaConversion(this.value)" required>
                    <div class="invalid-feedback">
                        Por favor, ingresa una cantidad válida sin letras y maximo 9 decimales.
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">A </label>
                        <select class="form-select" id="inputGroupSelect01" name="seleccionado">
                            <option value="bytes"<?=$seleccionadoForm==="bytes"?"selected":""?>>Bytes</option>
                            <option value="kb"<?=$seleccionadoForm==="kb"?"selected":""?>>KiloBytes</option>
                            <option value="mb"<?=$seleccionadoForm==="mb"?"selected":""?>>MegaBytes</option>
                            <option value="gb"<?=$seleccionadoForm==="gb"?"selected":""?>>GigaBytes</option>
                            <option value="tb"<?=$seleccionadoForm==="tb"?"selected":""?>>TeraBytes</option>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <button class="btn btn-success" type="submit" id="button-addon1">Conversión</button>
                            <input type="text" class="form-control" value='<?= $resultado?>' disabled readonly>
                        </div>
                    </div>
                </div>
        </form>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../validaciones.js"></script>
<script>
    function validarFormulario() {
        // Obtén el elemento input
        let inputElement = document.querySelector('input[name="cantidad"]');
        
        // Verifica si la clase 'is-invalid' está presente
        if (inputElement.classList.contains('is-invalid')) {
            // Si es inválido, no envíes el formulario
            return false;
        }
        
        // Si es válido, puedes enviar el formulario
        return true;
    }
</script>
</html>