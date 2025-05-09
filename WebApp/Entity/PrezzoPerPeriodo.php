<?php


class PrezzoPerPeriodo
{   
/*
    private int $id;
    private Array $prezziPerPeriodo;


  

    public function __construct($anno,$prezzo)

    {
        $this->prezziPerPeriodo = array();
        $prezziPerPeriodo = [
            'numPeriodo' => 1,
            'inizio' => new DateTime($anno . '-01-01'),
            'fine' => new DateTime($anno . '-03-31'),
            'prezzo' => $prezzo
        ];
        $prezziPerPeriodo = [
            'numPeriodo' => 2,
            'inizio' => new DateTime($anno . '-04-01'),
            'fine' => new DateTime($anno . '-06-30'),
            'prezzo' => $prezzo
        ];
        $prezziPerPeriodo = [
            'numPeriodo' => 3,
            'inizio' => new DateTime($anno . '-07-01'),
            'fine' => new DateTime($anno . '-09-30'),
            'prezzo' => $prezzo
        ];
        $prezziPerPeriodo = [
            'numPeriodo' => 4,
            'inizio' => new DateTime($anno . '-10-01'),
            'fine' => new DateTime($anno . '-12-31'),
            'prezzo' => $prezzo
        ];



    }

    public function getNumPeriodo($datainizio,$datafine): int
    {
    foreach ($this->prezziPerPeriodo as $periodo) {
            if ($datainizio >= $periodo['inizio'] && $datafine <= $periodo['fine']) {
                return $periodo['numPeriodo'];
            }
        }
    
    

    }

    public function inserisciPeriodo($datainizio,$datafine,$prezzo)
    {
        foreach($this->prezziPerPeriodo as $periodo) {
            if ($datainizio >= $periodo['inizio'] && $datafine <= $periodo['fine']) {
                throw new Exception("Il periodo inserito si sovrappone a un periodo esistente.");
            }
        }
    }
    





    
      
        
    
    public function setPrezzoPeriodo(float $prezzoGiornaliero,DateTime $inizio,DateTime $fine): void
    {   foreach ($this->giorni as $giorno) {
            if ($inizio >= $periodo['inizio'] && $fine <= $periodo['fine']) {
                throw new Exception("Il periodo inserito si sovrappone a un periodo esistente.");
            }
        }
        $this->giorni = 
            'inizio' => $inizio,
            'fine' => $fine,
            'prezzo' => $prezzoGiornaliero
        ];
        
    }
    public function getPrezzoGiornaliero(data): float
    {
        foreach ($this->prezziPerPeriodo as $periodo) {
            if ($data >= $periodo['inizio'] && $data <= $periodo['fine']) {
                return $periodo['prezzo'];
            }
        }
        return self::PREZZO_MINIMO;
    }*/
}
