<?php

class Enoleggio extends EOrdine{

private DateTime $dataInizio;

private DateTime $dataFine;

private float $prezzototale;

private EAutoNoleggio $auto;



    public function __construct(DateTime $dataInizio, DateTime $dataFine, $data, $ora, $stato, ECartaDiCredito $metodo, EAuto $auto)
    {
        parent::__construct($data, $ora, $stato, $metodo, $auto);
        $this->dataInizio = $dataInizio;
        $this->dataFine = $dataFine;
        $AmmontareNoleggio=$auto.getPrezzoPeriodo($dataInizio,$dataFine);

        $this->prezzoTotale = $AmmontareNoleggio;
    
    }

}
