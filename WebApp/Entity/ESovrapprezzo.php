<?php
use Doctrine\ORM\Mapping as ORM;

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
    
    #[ORM\ManyToOne(targetEntity: EAuto::class)]
    #[ORM\JoinColumn(name: 'auto_id', referencedColumnName: 'idAuto')]
    private EAuto $auto;


    public function __construct(DateTime $inizio, DateTime $fine, float $prezzo, EAuto $auto)
    {
        $this->inizio = $inizio;
        $this->fine = $fine;
        $this->prezzo = $prezzo;
        $this->auto = $auto;
    }


}
