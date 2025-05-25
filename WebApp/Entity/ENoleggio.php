<?php

namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'noleggi')]

 // Tabella specifica per Noleggio

class Enoleggio extends EOrdine{


#[ORM\column(type: 'datetime')]
private DateTime $dataInizio;

#[ORM\column(type: 'datetime')]
private DateTime $dataFine;

#[ORM\Column(type: 'float')]
private float $prezzototale= 0.0;//cruciale!

#[ORM\ManyToOne(targetEntity: EAutoNoleggio::class)] 
#[ORM\JoinColumn(name: 'id_auto', referencedColumnName: 'idAuto', nullable: false)] 
private EAutoNoleggio $autoNol;

#


    public function __construct(DateTime $dataInizio, DateTime $dataFine, DateTime $dataOrdine, string $statoOrdine, ECartaDiCredito $metodo, EUtente $utente, EAutoNoleggio $autoNol)
    {
        parent::__construct($dataOrdine, $statoOrdine, $metodo, $utente);
        $this->dataInizio = $dataInizio;
        $this->dataFine = $dataFine;
        $this->autoNol= $autoNol;

        
    
    }
    public function getDataInizio(): DateTime
    {
        return $this->dataInizio;
    }
    public function setDataInizio(DateTime $dataInizio): void
    {
        $this->dataInizio = $dataInizio;
    }
    public function getDataFine(): DateTime
    {
        return $this->dataFine;
    }
    public function setDataFine(DateTime $dataFine): void
    {
        $this->dataFine = $dataFine;
    }
    

}
