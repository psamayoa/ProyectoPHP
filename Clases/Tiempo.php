<?php

class Second{
    public $second;

    public function __construct($second)
    {
        $this->second = $second;
    }

    public function SecondsToMinutes(){
        if($this->second >= 60){
            return "<div class=alert alert-info role=alert>
                La cantidad de segundos ingresados equivalen a " . $this->second / 60 . " minutos
            </div>";
        } else if ($this->second < 60){
            return "<div class='alert alert-warning' role='alert'>
                Un minuto contiene 60 segundos
            </div>";
        }
    }

    public function SecondsToHours(){
        if($this->second >= 3600){
            return "<div class='alert alert-info' role='alert'>
                La cantidad de segundos ingresados equivalen a " . $this->second / 3600 . " horas
            </div>";
        } else if($this->second < 3600){
            return "<div class='alert alert-warning' role='alert'>
                Una hora contiene 3600 segundos
            </div>";
        }
    }

    public function SecondsToDay(){
        if($this->second >= 86400){
            return "<div class='alert alert-info' role='alert'>
                La cantidad de segundos ingresados equivalen a " . $this->second / 86400 . " días
            </div>";
        } else if($this->second < 86400){
            return "<div class='alert alert-warning' role='alert'>
                Un día contiene 86400 segundos
            </div>";
        }
    }
}

class Minute{
    public $minute;

    public function __construct($minute)
    {
        $this->minute = $minute;
    }

    public function MinutesToHours(){
        if($this->minute >= 60){
            return "<div class='alert alert-success' role='alert'>
                La cantidad de minutos ingresados equivalen a " . $this->minute / 60 . " horas
            </div>";
        } else if($this->minute < 60){
            return "<div class='alert alert-warning' role='alert'>
                Una hora contiene 60 minutos
            </div>";
        }
    }

    public function MinutesToSeconds(){
        return "<div class='alert alert-success' role='alert'>
            La cantidad de minutos ingresados equivalen a " . $this->minute * 60 . " segundos
        </div>";
    }

    public function MinutesToDays(){
        if($this->minute >= 1440){
            return "<div class='alert alert-success' role='alert'>
                La cantidad de minutos ingresados equivalen a " . $this->minute / 1440 . " días
            </div>";
        } else if($this->minute < 1440){
            return "<div class='alert alert-warning' role='alert'>
                Un día tiene 1440 minutos
            </div>";
        }
    }
}

class Hour{
    public $hour;

    public function __construct($hour)
    {
        $this->hour = $hour;
    }

    public function HoursToMinutes(){
        return "<div class='alert alert-primary' role='alert'>
            La cantidad de horas ingresadas equivalen a " . $this->hour * 60 . " minutos
        </div>";
    }

    public function HoursToSeconds(){
        return "<div class='alert alert-primary' role='alert'>
            La cantidad de horas ingresadas equivalen a " . $this->hour * (60 ** 2) . " segundos
        </div>";
    }

    public function HoursToDays(){
        if($this->hour >= 24){
            return "<div class='alert alert-primary' role='alert'>
                La cantidad de horas ingresadas equivalen a " . $this->hour / 24 . " días
            </div>";
        } else if($this->hour < 24){
            return "<div class='alert alert-warning' role='alert'>
                Un día contiene 24 horas
            </div>";
        }
    }
}

class Day{
    public $day;

    public function __construct($day)
    {   
        $this->day = $day; 
    }

    public function DaysToHours(){
        return "<div class='alert alert-light' role='alert'>
            Los días ingresados equivalen a " . $this->day * 24 . " horas
      </div>";
    }

    public function DaysToMinutes(){
        return "<div class='alert alert-warning' role='alert'>
            Los días ingresados equivalen a " . $this->day * 1440 . " minutos
        </div>"; 
    }

    public function DaysToWeeks(){
        if($this->day >= 7){
            return "<div class='alert alert-light' role='alert'>
                Los días ingresados equivalen a " . $this->day / 7 . " semanas
            </div>";
        } else if($this->day < 7){
            return "<div class='alert alert-warning' role='alert'>
                Una semana contiene 7 días
            </div>";
        }
    }

    public function DaysToYears(){
        if($this->day >= 365){
            return "<div class='alert alert-light' role='alert'>
                Los días ingresados equivalen a " . $this->day / 365 . " años
            </div>";
        } else if($this->day === 366){
            return "<div class='alert alert-dark' role='alert'>
                Es año bisiesto
            </div>";
        } else if ($this->day < 365){
            return "<div class='alert alert-warning' role='alert'>
                Un año contiene 365 días en la mayoría de los casos
            </div>";
        }
    }
}

class Week{
    public $week;

    public function __construct($week)
    {
        $this->week = $week;
    }

    public function WeeksToDays(){
        return "<div class='alert alert-info' role='alert'>
            La cantidad de semanas ingresadas equivalen a " . $this->week * 7 . " días
        </div>";
    }

    public function WeeksToHours(){
        return "<div class='alert alert-info' role='alert'>
            La cantidad de semanas ingresadas equivalen a " . $this->week * (24 * 7) . " horas
        </div>";
    }

    public function WeeksToMinutes(){
        return "<div class='alert alert-info' role='alert'>
            La cantidad de semanas ingresadas equivalen a " . $this->week * 10080 . " minutos
        </div>"; 
    }

    public function WeeksToYears(){
        if($this->week >= 48){
            return "<div class='alert alert-info' role='alert'>
                La cantidad de semanas ingresadas equivalen a " . $this->week / 48 . " años
            </div>";
        } if($this->week < 48){
            return "<div class='alert alert-warning' role='alert'>
                Un año contiene 48 semanas en promedio
            </div>";
        }
    }
}

class Month{
    public $month;

    public function __construct($month)
    {
        $this->month = $month;
    }

    public function Month28Days(){

        return "<div class='card text-center'>
        <div class='card-header'>
          Mes de 28 días
        </div>
        <div class='card-body'>
          <h5 class='card-title'>Un mes de 28 días contiene:</h5>
          <p class='card-text'> " . 28 / 7 . "  semanas </p><br>
          <p class='card-text'> " . 24 * 28 . "  horas </p><br>
          <p class='card-text'> " . 1440 * 28 . "  minutos </p><br>
          <p class='card-text'> " . 86400 * 28 . "  segundos </p><br>
        </div>
      </div>";
            
    }

    public function Month30Days(){

        return "<div class='card text-center'>
        <div class='card-header'>
          Mes de 30 días
        </div>
        <div class='card-body'>
          <h5 class='card-title'>Un mes de 30 días contiene:</h5>
          <p class='card-text'> " . 30 / 7 . "  semanas </p><br>
          <p class='card-text'> " . 24 * 30 . "  horas </p><br>
          <p class='card-text'> " . 1440 * 30 . "  minutos </p><br>
          <p class='card-text'> " . 86400 * 30 . "  segundos </p><br>
        </div>
      </div>";
        
    }

    public function Month31Days(){

        return "<div class='card text-center'>
        <div class='card-header'>
          Mes de 30 días
        </div>
        <div class='card-body'>
          <h5 class='card-title'>Un mes de 30 días contiene:</h5>
          <p class='card-text'> " . 31 / 7 . "  semanas </p><br>
          <p class='card-text'> " . 24 * 31 . "  horas </p><br>
          <p class='card-text'> " . 1440 * 31 . "  minutos </p><br>
          <p class='card-text'> " . 86400 * 31 . "  segundos </p><br>
        </div>
      </div>";
    }

    public function MonthsToYears(){

        if($this->month >= 12){
            return "<div class='alert alert-success' role='alert'>
                La cantidad de meses ingresada equivale a " . $this->month / 12 . " años
            </div>";
        } else if($this->month < 12){
            return "<div class='alert alert-warning' role='alert'>
                Un año contiene 12 meses
            </div>";
        }
    }

    public function MonthsToDays(){
        if($this->month >= 365){
            return "<div class='alert alert-success' role='alert'>
                La cantidad de meses ingresada equivale a " . $this->month / 365 . " días
            </div>";
        } else if ($this->month < 365){
            return "<div class='alert alert-warning' role='alert'>
                Un año contiene 365 días en la mayoría de los casos
            </div>";
        }
    }
}

class Year{
    public $year;

    public function __construct($year)
    {
        $this->year = $year;
    }

    public function YearsToDays(){
        return "<div class='alert alert-light' role='alert'>
            La cantidad de años introducida equivale a " . $this->year * 365 . " días
        </div>"; 
    }

    public function YearsToMonths(){
        return "<div class='alert alert-light' role='alert'>
            La cantidad de años introducida equivale a " . $this->year * 12 . " meses
        </div>";
    }

    public function YearsToWeeks(){
        return "<div class='alert alert-light' role='alert'>
            La cantidad de años introducida equivale a" . $this->year * 48 . " semanas
        </div>";
    }
}
?>