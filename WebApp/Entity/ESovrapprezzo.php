<?php
namespace WebApp\Entity;

use Doctrine\ORM\Mapping as ORM;
require_once 'EAutoNoleggio.php';


#[ORM\Entity]
#[ORM\Table(name: 'sovrapprezzo')]


class ESovrapprezzo
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $idSovrapprezzo;

    #[ORM\Column(type: 'datetime')]
    private DateTime $inizio;

    #[ORM\Column(type: 'datetime')]
    private DateTime $fine;

    #[ORM\Column(type: 'float')]
    private float $prezzo;
    
    #[ORM\ManyToOne(targetEntity: EAutoNoleggio::class,inversedBy: 'sovrapprezzi')]
    #[ORM\JoinColumn(name: 'auto_id', referencedColumnName: 'idAuto',nullable: false)]
    private EAutoNoleggio $auto;


    public function __construct(DateTime $inizio, DateTime $fine, float $prezzo, EAutoNoleggio $auto)
    {
        $this->inizio = $inizio;
        $this->fine = $fine;
        $this->prezzo = $prezzo;
        $this->auto = $auto;
    }
    public function getIdSovrapprezzo(): int
    {
        return $this->idSovrapprezzo;
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
    public function getPrezzo(): float
    {
        return $this->prezzo;
    }
    public function setPrezzo(float $prezzo): void
    {
        $this->prezzo = $prezzo;
    }

    public function getAuto(): EAutoNoleggio
    {
        return $this->auto;
    }
    public function setAuto(EAutoNoleggio $auto): void
    {
        $this->auto = $auto;
    }
    public function getIdAuto(): int
    {
        return $this->auto->getIdAuto();
    }


}
