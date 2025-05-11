<?php

class EVendita extends EOrdine
{
    
    
    private float $prezzoTotale;


    public function __construct( float $prezzoTotale , $data, $ora, $stato, ECartaDICredito $metodo, EAuto $auto)
    {
        parent::__construct($data, $ora, $stato, ECartaDICredito $metodo, EAuto $auto);
       
        $this->prezzoTotale = $prezzoTotale;
       
    }
}