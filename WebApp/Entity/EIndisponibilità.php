<?php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'indisponibilita')]

class EIndisponibilità {

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $idInd;

    #[ORM\Column(type: 'datetime')]
    private DateTime $inizio;

    #[ORM\Column(type: 'datetime')]
    private DateTime $fine;
    
    #[ORM\Column(type: 'boolean')]
    private bool $disponibilita = false;

    #[ORM\ManyToOne(targetEntity: Auto::class,inversedBy: 'prenotazioni_registrate')]
    #[ORM\JoinColumn(name: 'auto_id', referencedColumnName: 'idAuto',nullable: false)]
    private EAuto $auto;

    public function __construct(DateTime $inizio, DateTime $fine,EAuto $auto)
    {
        $this->inizio = $inizio;
        $this->fine = $fine;
        $this->auto = $auto;

    }
    
}