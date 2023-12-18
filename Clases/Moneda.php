<?php

class USD{
    public $usd; 

    public function __construct($usd)
    {
        $this->usd = $usd;
    }

    public function USD_MXN(){

        return "<div class='alert alert-info' role='alert'>
            Los dólares estadounidenses ingresados equivalen a " . $this->usd * 17.19 . " pesos mexicanos
        </div>";
    }

    public function USD_COP(){

        return "<div class='alert alert-info' role='alert'>
            Los dólares estadounidenses ingresados equivalen a " . $this->usd * 3964.24 . " pesos colombianos
        </div>";
    }

    public function USD_ARS(){

        return "<div class='alert alert-info' role='alert'>
            Los dólares estadounidenses ingresados equivalen a " . $this->usd * 362.17 . " pesos argentinos
        </div>";
    }

    public function USD_CLP(){

        return "<div class='alert alert-info' role='alert'>
            Los dólares estadounidenses ingresados equivalen a " . $this->usd * 859.09 . " pesos chilenos
        </div>";
    }

    public function USD_BRL(){

        return "<div class='alert alert-info' role='alert'>
            Los dólares estadounidenses ingresados equivalen a " . $this->usd * 4.88 . " reales brasileños
        </div>"; 
    }

    public function USD_EUR(){

        return "<div class='alert alert-info' role='alert'>
            Los dólares estadounidenses ingresados equivalen a " . $this->usd * 0.92 . " euros
        </div>";
    }

    public function USD_CNY(){

        return "<div class='alert alert-info' role='alert'>
            Los dólares estadounidenses ingresados equivalen a " . $this->usd * 7.07 . " renminbi
        </div>";
    }

    public function USD_INR(){

        return "<div class='alert alert-info' role='alert'>
             dólares estadounidenses ingresados equivalen a " . $this->usd * 83.22 . " rupias indias  
        </div>";
    }
}

class MXN{
    public $mxn; 

    public function __construct($mxn)
    {
        $this->mxn = $mxn;
    }

    public function USD_MXN(){

        return "<div class='alert alert-success' role='alert'>
            Los pesos mexicanos ingresados equivalen a " . $this->mxn * 0.058 . " dólares estadounidenses
        </div>";
    }

    public function MXN_COP(){

        return "<div class='alert alert-success' role='alert'>
            Los pesos mexicanos ingresados equivalen a " . $this->mxn * 230.66 . " pesos colombianos
        </div>";
    }

    public function MXN_ARS(){

        return "<div class='alert alert-success' role='alert'>
            Los pesos mexicanos ingresados equivalen a " . $this->mxn * 21.07 . " pesos argentinos
        </div>";
    }

    public function MXN_CLP(){

        return "<div class='alert alert-success' role='alert'>
            Los pesos mexicanos ingresados equivalen a " . $this->mxn * 49.99 . " pesos chilenos
        </div>";
    }

    public function MXN_BRL(){

        return "<div class='alert alert-success' role='alert'>
            Los pesos mexicanos ingresados equivalen a " . $this->mxn * 0.28 . " reales brasileños
        </div>";
    }

    public function MXN_EUR(){

        return "<div class='alert alert-success' role='alert'>
            Los pesos mexicanos ingresados equivalen a " . $this->mxn * 0.41 . " renminbi
        </div>";
    }

    public function MXN_CNY(){

        return "<div class='alert alert-success' role='alert'>
            Los pesos mexicanos ingresados equivalen a " . $this->mxn * 0.41 . " renminbi
        </div>";
    }

    public function MXN_INR(){
        return "<div class='alert alert-success' role='alert'>
            Los pesos mexicanos ingresados equivalen a " . $this->mxn * 4.84 . " rupias indias
        </div>";
    }
}

class COP{
    public $cop;

    public function __construct($cop)
    {
        $this->cop = $cop;
    }

    public function USD_COP(){

        return "<div class='alert alert-primary' role='alert'>
            Los pesos colombianos ingresados equivalen a " . $this->cop * 0.00025 . " dólares
        </div>";
    }

    public function MXN_COP(){

        return "<div class='alert alert-primary' role='alert'>
            Los pesos colombianos ingresados equivalen a " . $this->cop * 0.0043 . " pesos mexicanos 
        </div>";
    }

    public function COP_ARS(){

        return "<div class='alert alert-primary' role='alert'>
            Los pesos colombianos ingresados equivalen a " . $this->cop * 0.090 . " pesos argentinos  
        </div>";
    }

    public function COP_CLP(){

        return "<div class='alert alert-primary' role='alert'>
            Los pesos colombianos ingresados equivalen a " . $this->cop * 0.21 . " pesos chilenos
        </div>";
    }

    public function COP_BRL(){

        return "<div class='alert alert-primary' role='alert'>
            Los pesos colombianos ingresados equivalen a " . $this->cop * 0.0012 . " reales brasileños
        </div>";
    }

    public function COP_EUR(){

        return "<div class='alert alert-primary' role='alert'>
            Los pesos colombianos ingresados equivalen a " . $this->cop * 0.00023 . " euros
        </div>"; 
    }

    public function COP_CNY(){

        return "<div class='alert alert-primary' role='alert'>
            Los pesos colombianos ingresados equivalen a " . $this->cop * 0.0018 . " renminbi
        </div>";
    }

    public function COP_INR(){

        return "<div class='alert alert-primary' role='alert'>
            Los pesos colombianos ingresados equivalen a " . $this->cop * 0.021 . " rupias indias
        </div>"; 
    }
}

class ARS{
    public $ars;

    public function __construct($ars)
    {
        $this->ars = $ars;
    }

    public function USD_ARS(){

        return "<div class='alert alert-warning' role='alert'>
            Los pesos argentinos ingresados equivalen a " . $this->ars * 0.0028 . " dólares estadounidenses
        </div>";
    }

    public function MXN_ARS(){

        return "<div class='alert alert-warning' role='alert'>
            Los pesos argentinos ingresados equivalen a " . $this->ars * 0.047 . " pesos mexicanos
        </div>";
    }

    public function COP_ARS(){

        return "<div class='alert alert-warning' role='alert'>
            Los pesos argentinos ingresados equivalen a " . $this->ars * 10.95 . " pesos colombianos
        </div>";
    }

    public function ARS_CLP(){

        return "<div class='alert alert-warning' role='alert'>
            Los pesos argentinos ingresados equivalen a " . $this->ars * 2.37 . " pesos chilenos
        </div>";
    }

    public function ARS_BRL(){

        return "<div class='alert alert-warning' role='alert'>
            Los pesos argentinos ingresados equivalen a " . $this->ars * 0.013 . " reales brasileños
        </div>";
    }

    public function ARS_EUR(){

        return "<div class='alert alert-warning' role='alert'>
            Los pesos argentinos ingresados equivalen a " . $this->ars * 0.0025 . " euros
        </div>";
    }

    public function ARS_CNY(){

        return "<div class='alert alert-warning' role='alert'>
            Los pesos argentinos ingresados equivalen a " . $this->ars * 0.020 . " renminbi
        </div>";
    }

    public function ARS_INR(){

        return "<div class='alert alert-warning' role='alert'>
            Los pesos argentinos ingresados equivalen a " . $this->ars * 0.23 . " rupias indias
        </div>";
    }
}

class CLP{
    public $clp;

    public function __construct($clp)
    {
        $this->clp = $clp;
    }

    public function USD_CLP(){

        return "<div class='alert alert-light' role='alert'>
            Los pesos chilenos ingresados equivalen a " . $this->clp * 0.0012 . " dólares estadounidenses
        </div>";
    }

    public function MXN_CLP(){

        return "<div class='alert alert-light' role='alert'>
            Los pesos chilenos ingresados equivalen a " . $this->clp * 0.020 . " pesos mexicanos
        </div>";
    }

    public function COP_CLP(){

        return "<div class='alert alert-light' role='alert'>
            Los pesos chilenos ingresados equivalen a " . $this->clp * 4.60 . " pesos colombianos
        </div>";
    }

    public function ARS_CLP(){

        return "<div class='alert alert-light' role='alert'>
            Los pesos chilenos ingresados equivalen a " . $this->clp * 0.42 . " pesos argentinos
        </div>";
    }

    public function CLP_BRL(){

        return "<div class='alert alert-light' role='alert'>
            Los pesos chilenos ingresados equivalen a " . $this->clp * 0.0057 . " reales brasileños
        </div>";
    }

    public function CLP_EUR(){

        return "<div class='alert alert-light' role='alert'>
            Los pesos chilenos ingresados equivalen a " . $this->clp * 0.0011 . " euros
        </div>";
    }

    public function CLP_CNY(){

        return "<div class='alert alert-light' role='alert'>
            Los pesos chilenos ingresados equivalen a " . $this->clp * 0.0082 . " renminbi
        </div>";
    }

    public function CLP_INR(){

        return "<div class='alert alert-light' role='alert'>
            Los pesos chilenos ingresados equivalen a " . $this->clp * 0.097 . " rupias indias
        </div>";
    }
}

class BRL{
    public $brl;

    public function __construct($brl)
    {
        $this->brl = $brl;
    }

    public function USD_BRL(){

        return "<div class='alert alert-secondary' role='alert'>
            Los reales brasileños ingresados equivalen a " . $this->brl * 0.20 . " dólares estadounidenses
        </div>";
    }

    public function MXN_BRL(){

        return "<div class='alert alert-secondary' role='alert'>
            Los reales brasileños ingresados qequivalen a " . $this->brl * 3.52 . " pesos mexicanos
        </div>";
    }

    public function COP_BRL(){

        return "<div class='alert alert-secondary' role='alert'>
            Los reales brasileños ingresados equivalen a " . $this->brl * 812.24 . " pesos colombianos
        </div>";
    }

    public function ARS_BRL(){

        return "<div class='alert alert-secondary' role='alert'>
            Los reales brasileños ingresados equivalen a " . $this->brl * 74.21 . " pesos argentinos
        </div>";
    }

    public function CLP_BRL(){

        return  "<div class='alert alert-secondary' role='alert'>
            Los reales brasileños ingresados equivalen a " . $this->brl * 176.02 . " pesos chilenos
        </div>";
    }

    public function BRL_EUR(){

        return "<div class='alert alert-secondary' role='alert'>
            Los reales brasileños ingresados equivalen a " . $this->brl * 0.19 . " euros
        </div>";
    }

    public function BRL_CNY(){

        return "<div class='alert alert-secondary' role='alert'>
            Los reales brasileños ingresados equivalen a " . $this->brl * 1.45 . " renminbi
        </div>";
    }

    public function BRL_INR(){

        return "<div class='alert alert-secondary' role='alert'>
            Los reales brasileños ingresados equivalen a " . $this->brl * 17.05 . " rupias indias
        </div>";
    }

    }

class EUR{
    public $eur;

    public function __construct($eur)
    {
        $this->eur = $eur; 
    }

    public function USD_EUR(){

        return "<div class='alert alert-info' role='alert'>
            Los euros ingresados equivalen a " . $this->eur * 1.09 . " dólares estadounidenses
        </div>"; 
    }

    public function MXN_EUR(){

        return "<div class='alert alert-info' role='alert'>
            Los euros ingresados equivalen a " . $this->eur * 18.71 . " pesos mexicanos    
        </div>";
    }

    public function COP_EUR(){

        return "<div class='alert alert-info' role='alert'>
            Los euros ingresados equivalen a " . $this->eur * 4318.05 . " pesos colombianos
        </div>";
    }

    public function ARS_EUR(){
        return "<div class='alert alert-info' role='alert'>
            Los euros ingresados equivalen a " . $this->eur * 394.49 . " pesos argentinos
        </div>";
    }

    public function CLP_EUR(){

        return "<div class='alert alert-info' role='alert'>
            Los euros ingresados equivalen a " . $this->eur * 935.76 . " pesos chilenos
        </div>";
    }

    public function BRL_EUR(){

        return "<div class='alert alert-info' role='alert'>
            Los euros ingresados equivalen a " . $this->eur * 5.32 . " reales brasileños
        </div>";
    }

    public function EUR_CNY(){

        return "<div class='alert alert-info' role='alert'>
            Los euros ingresados equivalen a " . $this->eur * 7.70 . " renminbi
        </div>";
    }

    public function EUR_INR(){

        return "<div class='alert alert-info' role='alert'>
            Los euros ingresados equivalen a " . $this->eur * 90.65 . " rupias indias
        </div>";
    }
}

class CNY{
    public $cny;

    public function __construct($cny)
    {
        $this->cny = $cny; 
    }

    public function  USD_CNY(){

        return "<div class='alert alert-success' role='alert'>
            Los renminbis ingresados equivalen a " . $this->cny * 0.14 . " dólares estadounidenses
        </div>";
    }

    public function MXN_CNY(){

        return "<div class='alert alert-success' role='alert'>
            Los renminbis ingresados equivalen a " . $this->cny * 2.43 . " pesos mexicanos
        </div>";
    }

    public function COP_CNY(){

        return "<div class='alert alert-success' role='alert'>
            Los renminbis ingresados equivalen a " . $this->cny * 560.54 . " pesos colombianos
        </div>";
    }

    public function ARS_CNY(){

        return "<div class='alert alert-success' role='alert'>
            Los renminbis ingresados equivalen a " . $this->cny * 51.21 . " pesos argentinos
        </div>";
    }

    public function CLP_CNY(){

        return "<div class='alert alert-success' role='alert'>
            Los renminbis ingresados equivalen a " . $this->cny * 121.47 . " pesos chilenos
        </div>";
    }

    public function BRL_CNY(){

        return "<div class='alert alert-success' role='alert'>
            Los renminbis ingresados equivalen a " . $this->cny * 0.69 . " reales brasileños
        </div>";
    }

    public function EUR_CNY(){

        return "<div class='alert alert-success' role='alert'>
            Los renminbis ingresados equivalen a " . $this->cny * 0.13 . " euros
        </div>";
    }

    public function CNY_INR(){

        return  "<div class='alert alert-success' role='alert'>
            Los renminbis ingresados equivalen a " . $this->cny * 11.77 . " rupias indias
        </div>";
    }

}

class INR{
    public $inr;

    public function __construct($inr)
    {
        $this->inr = $inr;
    }

    public function USD_INR(){

        return "<div class='alert alert-warning' role='alert'>
            Las rupias indias ingresadas equivalen a " . $this->inr * 0.012 . " dólares estadounidenses
        </div>"; 
    }

    public function MXN_INR(){

        return "<div class='alert alert-warning' role='alert'>
            Las rupias indias ingresadas equivalen a " . $this->inr * 0.21 . " pesos mexicanos
        </div>";
    }

    public function COP_INR(){

        return "<div class='alert alert-warning' role='alert'>
            Las rupias indias ingresadas equivalen a " . $this->inr * 47.64 . " pesos colombianos
        </div>"; 
    }

    public function ARS_INR(){

        return "<div class='alert alert-warning' role='alert'>
            Las rupias indias ingresadas equivalen a " . $this->inr * 4.35 . " pesos argentinos
        </div>";
    }

    public function CLP_INR(){

        return "<div class='alert alert-warning' role='alert'>
            Las rupias indias ingresadas equivalen a " . $this->inr * 10.32 . " pesos chilenos
        </div>";
    }

    public function BRL_INR(){

        return "<div class='alert alert-warning' role='alert'>
            Las rupias indias ingresadas equivalen a " . $this->inr * 0.059 . " reales brasileños
        </div>";
    }

    public function EUR_INR(){

        return "<div class='alert alert-warning' role='alert'>
            Las rupias indias ingresadas equivalen a " . $this->inr * 0.011 . " euros
        </div>";
    }

    public function CNY_INR(){

        return"<div class='alert alert-warning' role='alert'>
            Las rupias indias ingresadas equivalen a " . $this->inr * 0.085 . " renminbi
        </div>";
    }

}
?>