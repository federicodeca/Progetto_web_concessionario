<?php
use Doctrine\ORM\Mapping as ORM;
require_once 'EAutoNoleggio.php';
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

    #[ORM\ManyToOne(targetEntity: EAutoNoleggio::class, inversedBy: 'indisponibilità')]
    #[ORM\JoinColumn(name: 'auto_id', referencedColumnName: 'idAuto',nullable: false)]
    private EAutoNoleggio $auto;

    public function __construct(DateTime $inizio, DateTime $fine,EAutoNoleggio $auto)
    {
        $this->inizio = $inizio;
        $this->fine = $fine;
        $this->auto = $auto;

    }
    public function getIdInd(): int
    {
        return $this->idInd;
    }
    public function getInizio(): DateTime
    {
        return $this->inizio;
    }
    public function setInizio(DateTime $inizio): void
    {
        $this->inizio = $inizio;
    }
    public function getFine(): DateTime
    {
        return $this->fine;
    }
    public function setFine(DateTime $fine): void
    {
        $this->fine = $fine;
    }
    public function isDisponibile(): bool
    {
        return $this->disponibilita;
    }
    public function setDisponibile(bool $disponibilita): void
    {
        $this->disponibilita = $disponibilita;
    }
    public function getIdAuto(): EAutoNoleggio
    {
        return $this->auto.getIdAuto();
    }
    public function setAuto(EAutoNoleggio $auto): void
    {
        $this->auto = $auto;
    }
    public function getAuto(): EAutoNoleggio
    {
        return $this->auto;
    }
    
}