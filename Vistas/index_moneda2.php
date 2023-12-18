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
                        <a class="nav-link" href="./index_moneda2.php">Volumen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container">
        <h1 class="text-center">Cálculo De Moneda</h1><br>
            <form action="" method="POST">
                <label class="form-label">Ingrese el monto a convertir:</label>
                <input type="number" class="form-control" name="monto" placeholder="Ingrese aquí el monto en a convertir"><br>
                    <label class="form-label">Elija la moneda a la cual convertir:</label>
                    <select name="moneda-conversion" class="form-control">
                        <option value="USD_MXN">Dólares Estadounidenses a Pesos Mexicanos</option>
                        <option value="MXN_USD">Pesos Mexicanos a Dólares Estadounidenses</option>
                        <option value="USD_COP">Dólares Estadounidenses a Pesos Colombianos</option>
                        <option value="COP_USD">Pesos Colombianos a Dólares Estadounidenses</option>
                        <option value="USD_ARS">Dólares Estadounidenses a Pesos Argentinos</option>
                        <option value="ARS_USD">Pesos Argentinos a Dólares Estadounidenses</option>
                        <option value="USD_CLP">Dólares Estadounidenses a Pesos Chilenos</option>
                        <option value="CLP_USD">Pesos Chilenos a Dólares Estadounidenses</option>
                        <option value="USD_BRL">Dólares Estadounidenses a Reales Brasileños</option>
                        <option value="BRL_USD">Reales Brasileños a Dólares Estadounidenses</option>
                        <option value="USD_EUR">Dólares Estadounidenses a Euros</option>
                        <option value="EUR_USD">Euros a Dólares Estadounidenses</option>
                        <option value="USD_CNY">Dólares Estadounidenses a Renminbi</option>
                        <option value="CNY_USD">Renminbi a Dólares Estadounidenses</option>
                        <option value="USD_INR">Dólares Estadounidenses a Rupias Indias</option>
                        <option value="INR_USD">Rupias Indias a Dólares Estadounidenses</option>
                        <option value="MXN_COP">Pesos Mexicanos a Pesos Colombianos</option>
                        <option value="COP_MXN">Pesos Colombianos a Pesos Mexicanos</option>
                        <option value="MXN_ARS">Pesos Mexicanos a Pesos Argentinos</option>
                        <option value="ARS_MXN">Pesos Argentinos a Pesos Mexicanos</option>
                        <option value="MXN_CLP">Pesos Mexicanos a Pesos Chilenos</option>
                        <option value="CLP_MXN">Pesos Chilenos a Pesos Mexicanos</option>
                        <option value="MXN_BRL">Pesos Mexicanos a Reales Brasileños</option>
                        <option value="BRL_MXN">Reales Brasileños a Pesos Mexicanos</option>
                        <option value="MXN_EUR">Pesos Mexicanos a Euros</option>
                        <option value="EUR_MXN">Euros a Pesos Mexicanos</option>
                        <option value="MXN_CNY">Pesos Mexicanos a Renminbi</option>
                        <option value="CNY_MXN">Renminbi a Pesos Mexicanos</option>
                        <option value="MXN_INR">Pesos Mexicanos a Rupias Indias</option>
                        <option value="INR_MXN">Rupias Indias a Pesos Mexicanos</option>
                        <option value="COP_ARS">Pesos Colombianos a Pesos Argentinos</option>
                        <option value="ARS_COP">Pesos Argentinos a Pesos Colombianos</option>
                        <option value="COP_CLP">Pesos Colombianos a Pesos Chilenos</option>
                        <option value="CLP_COP">Pesos Chilenos a Pesos Colombianos</option>
                        <option value="COP_BRL">Pesos Colombianos a Reales Brasileños</option>
                        <option value="BRL_COP">Reales Brasileños a Pesos Colombianos</option>
                        <option value="COP_EUR">Pesos Colombianos a Euros</option>
                        <option value="EUR_COP">Euros a Pesos Colombianos</option>
                        <option value="COP_CNY">Pesos Colombianos a Renminbi</option>
                        <option value="CNY_COP">Renminbi a Pesos Colombianos</option>
                        <option value="COP_INR">Pesos Colombianos a Rupias Indias</option>
                        <option value="INR_COP">Rupias Indias a Pesos Colombianos</option>
                        <option value="ARS_CLP">Pesos Argentinos a Pesos Chilenos</option>
                        <option value="CLP_ARS">Pesos Chilenos a Pesos Argentinos</option>
                        <option value="ARS_BRL">Pesos Argentinos a Reales Brasileños</option>
                        <option value="BRL_ARS">Reales Brasileños a Pesos Argentinos</option>
                        <option value="ARS_EUR">Pesos Argentinos a Euros</option>
                        <option value="EUR_ARS">Euros a Pesos Argentinos</option>
                        <option value="ARS_CNY">Pesos Argentinos a Renminbi</option>
                        <option value="CNY_ARS">Renminbi a Pesos Argentinos</option>
                        <option value="CLP_BRL">Pesos Chilenos a Reales Brasileños</option>
                        <option value="BRL_CLP">Reales Brasileños a Pesos Chilenos</option>
                        <option value="CLP_EUR">Pesos Chilenos a Euros</option>
                        <option value="EUR_CLP">Euros a Pesos Chilenos</option>
                        <option value="CLP_CNY">Pesos Chilenos a Renminbi</option>
                        <option value="CNY_CLP">Renminbi a Pesos Chilenos</option>
                        <option value="CLP_INR">Pesos Chilenos a Rupias Indias</option>
                        <option value="INR_CLP">Rupias Indias a Pesos Chilenos</option>
                        <option value="BRL_EUR">Reales Brasileños a Euros</option>
                        <option value="EUR_BRL">Euros a Reales Brasileños</option>
                        <option value="BRL_CNY">Reales Brasileños a Renminbi</option>
                        <option value="CNY_BRL">Renminbi a Reales Brasileños</option>
                        <option value="BRL_INR">Reales Brasileños a Rupias Indias</option>
                        <option value="INR_BRL">Rupias Indias a Reales Brasileños</option>
                        <option value="EUR_CNY">Euros a Renminbi</option>
                        <option value="CNY_EUR">Renminbi a Euros</option>
                        <option value="EUR_INR">Euros a Rupias Indias</option>
                        <option value="INR_EUR">Rupias Indias a Euros</option>
                        <option value="CNY_INR">Renminbi a Rupias Indias</option>
                        <option value="INR_CNY">Rupias Indias a Renminbi</option>
                    </select><br>
                <input type="submit" class="btn btn-success" value="Enviar Datos">
            </form>
    </section>
    <?php

    require_once "../Clases/Moneda.php";

       $monto = @$_POST['monto'];
       $moneda_conversion = @$_POST['moneda-conversion'];

       $usd = new USD($monto);
       $mxn = new MXN($monto);
       $cop = new COP($monto);
       $ars = new ARS($monto);
       $clp = new CLP($monto);
       $brl = new BRL($monto);
       $eur = new EUR($monto);
       $cny = new CNY($monto);
       $inr = new INR($monto);

       switch($moneda_conversion){
          case 'USD_MXN':
             echo $usd->USD_MXN();
             break;
          case 'MXN_USD':
             echo $mxn->USD_MXN();
             break;
          case 'USD_COP':
             echo $usd->USD_COP();
             break;
          case 'COP_USD':
             echo $cop->USD_COP();
             break;
          case 'USD_ARS':
             echo $usd->USD_ARS();
             break;
          case 'ARS_USD':
             echo $ars->USD_ARS();
             break;
          case 'USD_CLP':
             echo $usd->USD_CLP();
             break;
          case 'CLP_USD':
            echo $clp->USD_CLP();
            break;
          case 'USD_BRL':
            echo $usd->USD_BRL();
            break;
          case 'BRL_USD':
            echo $brl->USD_BRL();
            break;
          case 'USD_EUR':
            echo $usd->USD_EUR();
            break;
          case 'EUR_USD':
            echo $eur->USD_EUR();
            break;
          case 'USD_CNY':
            echo $usd->USD_CNY();
            break;
          case 'CNY_USD':
            echo $cny->USD_CNY();
            break;
          case 'USD_INR':
            echo $usd->USD_INR();
            break;
          case 'INR_USD':
            echo $inr->USD_INR();
            break;
          case 'MXN_COP':
            echo $mxn->MXN_COP();
            break;
          case 'COP_MXN':
            echo $cop->MXN_COP();
            break;
          case 'MXN_ARS':
            echo $mxn->MXN_ARS();
            break;
          case 'ARS_MXN':
            echo $ars->MXN_ARS();
            break;
          case 'MXN_CLP':
            echo $mxn->MXN_CLP();
            break;
          case 'CLP_MXN':
            echo $clp->MXN_CLP();
            break;
          case 'MXN_BRL':
            echo $mxn->MXN_BRL();
            break;
          case 'BRL_MXN':
            echo $brl->MXN_BRL();
            break;
          case 'MXN_EUR':
            echo $mxn->MXN_EUR();
            break;
          case 'EUR_MXN':
            echo $eur->MXN_EUR();
            break;
          case 'MXN_CNY':
            echo $mxn->MXN_CNY();
            break;
          case 'CNY_MXN':
            echo $cny->MXN_CNY();
            break;
          case 'MXN_INR':
            echo $mxn->MXN_INR();
            break;
          case 'INR_MXN':
            echo $inr->MXN_INR();
            break;
          case 'COP_ARS':
            echo $cop->COP_ARS();
            break;
          case 'ARS_COP':
            echo $ars->COP_ARS();
            break;
          case 'COP_CLP':
            echo $cop->COP_CLP();
            break;
          case 'CLP_COP':
            echo $clp->COP_CLP();
            break;
          case 'COP_BRL':
            echo $cop->COP_BRL();
            break;
          case 'BRL_COP':
            echo $brl->COP_BRL();
            break;
          case 'COP_EUR':
            echo $cop->COP_EUR();
            break;
          case 'EUR_COP':
            echo $eur->COP_EUR();
            break;
          case 'COP_CNY':
            echo $cop->COP_CNY();
            break;
          case 'CNY_COP':
            echo $cny->COP_CNY();
            break;
          case 'COP_INR':
            echo $cop->COP_INR();
            break;
          case 'INR_COP':
            echo $inr->COP_INR();
            break;
          case 'ARS_CLP':
            echo $ars->ARS_CLP();
            break;
          case 'CLP_ARS':
            echo $clp->ARS_CLP();
            break;
          case 'ARS_BRL':
            echo $ars->ARS_BRL();
            break;
          case 'BRL_ARS':
            echo $brl->ARS_BRL();
            break;
          case 'ARS_EUR':
            echo $ars->ARS_EUR();
            break;
          case 'EUR_ARS':
            echo $eur->ARS_EUR();
            break;
          case 'ARS_CNY':
            echo $ars->ARS_CNY();
            break;
          case 'CNY_ARS':
            echo $cny->ARS_CNY();
            break;
          case 'ARS_INR':
            echo $ars->ARS_INR();
            break;
          case 'INR_ARS':
            echo $inr->ARS_INR();
            break;
          case 'CLP_BRL':
            echo $clp->CLP_BRL();
            break;
          case 'BRL_CLP':
            echo $brl->CLP_BRL();
            break;
          case 'CLP_EUR':
            echo $clp->CLP_EUR();
            break;
          case 'EUR_CLP':
            echo $eur->CLP_EUR();
            break;
          case 'CLP_CNY':
            echo $clp->CLP_CNY();
            break;
          case 'CNY_CLP':
            echo $cny->CLP_CNY();
            break;
          case 'CLP_INR':
            echo $clp->CLP_INR();
            break;
          case 'INR_CLP':
            echo $inr->CLP_INR();
            break;
          case 'BRL_EUR':
            echo $brl->BRL_EUR();
            break;
          case 'EUR_BRL':
            echo $eur->BRL_EUR();
            break;
          case 'BRL_CNY':
            echo $brl->BRL_CNY();
            break;
          case 'CNY_BRL':
            echo $cny->BRL_CNY();
            break;
          case 'BRL_INR':
            echo $brl->BRL_INR();
            break;
          case 'INR_BRL':
            echo $inr->BRL_INR();
            break;
          case 'EUR_CNY':
            echo $eur->EUR_CNY();
            break;
          case 'CNY_EUR':
            echo $cny->EUR_CNY();
            break;
          case 'EUR_INR':
            echo $eur->EUR_INR();
            break;
          case 'INR_EUR':
            echo $inr->EUR_INR();
            break;
          case 'CNY_INR':
            echo $cny->CNY_INR();
            break;
          case 'INR_CNY':
            echo $inr->CNY_INR();
            break;
       }
       
    ?>
