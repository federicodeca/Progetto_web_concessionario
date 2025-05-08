<?php

class EUtente extends Epersona {

private string $descrizione;
private string $telefono;
private string $città;
private string $cap;
private string $indirizzo;

    public function __construct($nome, $cognome, $email, $telefono,$userName, $password, $città, $cap, $indirizzo)
    {
        parent::__construct($nome, $cognome, $email, $userName, $password);
        $this->telefono = $telefono;
        $this->descrizione = "Utente";
        $this->città = $città;
        $this->cap = $cap;
        $this->indirizzo = $indirizzo;
    }
    public function getDescrizione()
    {
        return $this->descrizione;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getCittà()
    {
        return $this->città;
    }
    public function getCap()
    {
        return $this->cap;
    }
    public function getIndirizzo()
    {
        return $this->indirizzo;


    }
    
  
}