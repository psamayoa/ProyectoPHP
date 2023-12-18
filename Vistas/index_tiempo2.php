<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    <section class="container">
        <h1 class="text-center">Medidas de Tiempo</h1><br>
            <form action="" method="POST">
                <label class="form-label">Ingrese el tiempo que desea convertir:</label>
                <input type="number" class="form-control" name="tiempo" placeholder="Ingrese aquí el tiempo a convertir"><br>
                <label class="form-label">Seleccione la unidad de tiempo para convertir:</label>
                    <select name="unidad-1" class="form-control">
                        <option value="Segundos_Minutos">Segundos a Minutos (A partir de 60 segundos)</option>
                        <option value="Segundos_Horas">Segundos a Horas (A partir de 3600 segundos)</option>
                        <option value="Segundos_Dias">Segundos a Días (A partir de 86400 segundos)</option>
                        <option value="Minutos_Horas">Minutos a Horas (A partir de 60 minutos)</option>
                        <option value="Minutos_Segundos">Minutos a Segundos</option>
                        <option value="Minutos_Dias">Minutos a Días (A partir de 1440 minutos)</option>
                        <option value="Horas_Minutos">Minutos</option>
                        <option value="Horas_Segundos">Segundos</option>
                        <option value="Horas_Dias">Horas a Días (A partir de 24 horas en adelante)</option>
                        <option value="Dias_Horas">Días a Horas</option>
                        <option value="Dias_Minutos">Días a Minutos</option>
                        <option value="Dias_Semanas">Días a Semanas (A partir de 7 días)</option>
                        <option value="Dias_Anos">Días a Años (A partir de 365 días)</option>
                        <option value="Semanas_Dias">Semanas a Días</option>
                        <option value="Semanas_Horas">Semanas a Horas</option>
                        <option value="Semanas_Minutos">Semanas a Minutos</option>
                        <option value="Semanas_Anos">Semanas a Años (A partir de 48 semanas)</option>
                        <option value="Meses_Anos">Meses a Años (A partir de 12 meses)</option>
                        <option value="Anos_Dias">Años a Días</option>
                        <option value="Anos_Meses">Años a Meses</option>
                        <option value="Anos_Semanas">Años a Semanas</option>
                    </select><br>
                <label class="form-label">Seleccione entre los meses disponibles:</label>
                    <select name="unidad-2" class="form-control">
                        <option value="28Dias">28 Días</option>
                        <option value="30Dias">30 Días</option>
                        <option value="31Dias">31 Días</option>
                    </select><br>
                <input type="submit" class="btn btn-success" value="Enviar Datos">
            </form>
    </section>
    <?php
    require "../Clases/Tiempo.php";

    if(isset($_POST['tiempo'], $_POST['unidad-1'])){
        $tiempo = @$_POST['tiempo'];
        $unidad_1 = @$_POST['unidad-1'];

        $second = new Second($tiempo);
        $minute = new Minute($tiempo);
        $hour = new Hour($tiempo);
        $day = new Day($tiempo);
        $week = new Week($tiempo);
        $month = new Month($tiempo);
        $year = new Year($tiempo);

        switch($unidad_1){
            case 'Segundos_Minutos':
                echo $second->SecondsToMinutes();
                break;
            case 'Segundos_Horas':
                echo $second->SecondsToHours();
                break;
            case 'Segundos_Dias':
                echo $second->SecondsToDay();
                break;
            case 'Minutos_Horas':
                echo $minute->MinutesToHours();
                break;
            case 'Minutos_Segundos':
                echo $minute->MinutesToSeconds();
                break;
            case 'Minutos_Dias':
                echo $minute->MinutesToDays();
                break;
            case 'Horas_Minutos':
                echo $hour->HoursToMinutes();
                break;
            case 'Horas_Segundos':
                echo $hour->HoursToSeconds();
                break;
            case 'Horas_Dias':
                echo $hour->HoursToDays();
                break;
            case 'Dias_Horas':
                echo $day->DaysToHours();
                break;
            case 'Dias_Minutos':
                echo $day->DaysToMinutes();
                break;
            case 'Dias_Semanas':
                echo $day->DaysToWeeks();
                break;
            case 'Dias_Anos':
                echo $day->DaysToYears();
                break;
            case 'Semanas_Dias':
                echo $week->WeeksToDays();
                break;
            case 'Semanas_Horas':
                echo $week->WeeksToHours();
                break;
            case 'Semanas_Minutos':
                echo $week->WeeksToMinutes();
                break;
            case 'Semanas_Anos':
                echo $week->WeeksToYears();
                break;
            case 'Meses_Anos':
                echo $month->MonthsToYears();
                break;
            case 'Anos_Dias':
                echo $year->YearsToDays();
                break;
            case 'Anos_Meses':
                echo $year->YearsToMonths();
                break;
            case 'Anos_Semanas':
                echo $year->YearsToWeeks();
                break;
        }
    }

    if(isset($_POST['unidad-2'])){
        $unidad_2 = @$_POST['unidad-2'];

        switch($unidad_2){
            case '28Dias':
                echo $month->Month28Days();
                break;
            case '30Dias':
                echo $month->Month30Days();
                break;
            case '31Dias':
                echo $month->Month31Days();
                break;
        }

    }


    ?>
