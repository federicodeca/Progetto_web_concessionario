<?php

class EOrdine
{
    private int $idOrdine;

    private DateTime $data;

    private DateTime $ora;

    private string $stato;

    private ECartaDICredito $metodo;

    private EAuto $auto;


    public function __construct($data, $ora, $stato, ECartaDICredito $metodo, EAuto $auto)
    {
        
        $this->data = $data;
        $this->ora = $ora;
        $this->stato = $stato;
        $this->metodo = $metodo;
        $this->auto = $auto;


    }
    
 
    
}