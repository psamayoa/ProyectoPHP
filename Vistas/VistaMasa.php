<?php
include '../Clases/Masa.php';  // 
$resultado = obtenerResultado();  // Inicializa $resultado antes de usarlo en el HTML
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Masa</title>
 
    
</head>

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
                        <a class="nav-link" href="./VistaMasa.php">Masa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container text-center">
        <h1 class="text-center">Conversor de Masa</h1><br>
        <form action="" method="post">
            <div class="row">
                <div class="col-3">
                    <br>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Medidas</label>
                        <select class="form-select" name="unidad_origen" id=unidad_origen>
                            <option selected>Elegir...</option>
                            <option value="tonelada">Tonelada</option>
                            <option value="kilogramo">Kilogramo</option>
                            <option value="gramo">Gramo</option>
                            <option value="miligramo">Miligramo</option>
                            <option value="libra">Libra</option>
                            <option value="onza">Onza</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="cantidad" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">A Convertir</label>
                        <select class="form-select" name= "unidad_destino" id="unidad_destino">
                            <option selected>Elegir...</option>
                            <option value="tonelada">Tonelada</option>
                            <option value="kilogramo">Kilogramo</option>
                            <option value="gramo">Gramo</option>
                            <option value="miligramo">Miligramo</option>
                            <option value="libra">Libra</option>
                            <option value="onza">Onza</option>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <button class="btn btn-success" type="submit" id="button-addon1">Conversión</button>
                            <input type="text" class="form-control" value="<?php echo $resultado; ?>" readonly>
                        </div>
                    </div>
                </div>
        </form>
    </section>
</body>


</html>