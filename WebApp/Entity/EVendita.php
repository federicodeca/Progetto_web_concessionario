<?php

class EVendita extends EOrdine
{
    
    
    private float $prezzoTotale;

    
    private Cliente $cliente;

   
    private EAutoInVendita $auto;


    public function __construct( float $prezzoTotale , $data, $ora, $stato, ECartaDiCredito $metodo, EAuto $auto)
    {
        parent::__construct($data, $ora, $stato,$metodo,$auto);
       
        $this->prezzoTotale = $prezzoTotale;
       
    }
}