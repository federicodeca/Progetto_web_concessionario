<?php

class ECartaDiCredito {  

    private int $id;
    private string $numeroCarta;
    private string $scadenza;
    private string $cvv;
    private string $nomeIntestatario;
    private string $cognomeIntestatario;

    public function __construct($numeroCarta, $scadenza, $cvv, $nomeIntestatario, $cognomeIntestatario)
    {
        $this->numeroCarta = $numeroCarta;
        $this->scadenza = $scadenza;
        $this->cvv = $cvv;
        $this->nomeIntestatario = $nomeIntestatario;
        $this->cognomeIntestatario = $cognomeIntestatario;
    }

}