<?php


namespace WebApp\Entity;
require_once 'Epersona.php';

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity]
#[ORM\Table(name: 'utenti')]

class EUtente extends Epersona {


protected string $descrizione="Utente";

#[ORM\Column(type: 'string')]
protected string $telefono;

#[ORM\Column(type: 'string')]
protected string $città;

#[ORM\Column(type: 'integer')]
protected int $cap;

#[ORM\Column(type: 'string')]
protected string $indirizzo;




    public function __construct($nome, $cognome, $email, $telefono, $userName, $password, $città, $cap, $indirizzo)
    {
        parent::__construct($nome, $cognome, $email, $userName, $password);
        $this->telefono = $telefono;  
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