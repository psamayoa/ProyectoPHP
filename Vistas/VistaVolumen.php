<?php
    include "../Clases/Volumen.php";
    $resultado = obtenerResultado();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Volumen</title>
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
                        <a class="nav-link" href="./VistaVolumen.php">Volumen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container text-center">
        <h1 class="text-center">Conversor de volumen</h1><br>
        <form action="" method="post">
            <div class="row">
                <div class="col-3">
                    <br>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Medidas</label>
                        <select class="form-select" name="conversor">
                            <option selected>Elegir...</option>
                            <option value="litro">Litros</option>
                            <option value="galon">Galones</option>
                            <option value="pieCubico">Pies Cúbicos</option>
                            <option value="mili">Mililitros</option>
                            <option value="cmCubico">Centímetros Cúbicos</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" name="cant" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">A Convertir</label>
                        <select class="form-select" name="conversor_destino">
                            <option selected>Elegir...</option>
                            <option value="litro">Litros</option>
                            <option value="galon">Galones</option>
                            <option value="piesCubico">Pies Cúbicos</option>
                            <option value="mili">Mililitros</option>
                            <option value="cmCubico">Centímetros Cúbicos</option>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <button class="btn btn-success" type="submit" id="button-addon1">Conversión</button>
                            <input type="text" class="form-control" value="<?php echo $resultado ?>">
                        </div>
                    </div>
                </div>
        </form>
    </section>
</body>

</html>