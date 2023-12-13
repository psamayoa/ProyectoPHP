<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php 
    require "./../clases/ConvertirDatosABinario.php";
    require "./../clases/ConvertirBinarioADecimal.php";
    $resultado="";
    $numero="";
    if(isset($_POST['conversor'])){
        $conversor = $_POST['conversor'];
        $numero = $_POST['numero'];
        if($conversor == "deBi"){
            $convertir = new ConvertirDatosABinarios($numero);
            $resultado = $convertir->convertir();
        }else{
            $convertir = new ConvertirBinarioADecimal($numero);
            $resultado = $convertir->convertir();
        }
    }
?> 
<body>
    <div class="container">
        <form action="validaciones.js" method="post">
            <label class="">Seleccione la conversión que desea</label>
            <select class="form-control" name="conversor">
                <option value="deBi">Decimal a Binario</option>
                <option value="biDe">Binario a Decimal</option>
            </select>
            <br>
            <label >Ingrese el número a convertir</label>
            <input type="text" class="form-control" name="numero" value='<?=$numero?>' placeholder="Ingrese el dato que desea convertir">
            <input type="submit" class="btn btn-primary mt-3 mb-3" value="Convertir">
            <br>
            <label>CONVERSIÓN</label>
            <input type="text" class="form-control" name="resultado" value='<?= $resultado ?>' disable readonly>
        </form>
    </div>
</body> 
</html>