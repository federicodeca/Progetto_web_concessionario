<?php


use Doctrine\ORM\Mapping as ORM;
use DateTime;

// Specific table for Rental

#[ORM\Entity]
#[ORM\Table(name: 'rents')]
class ERent extends EOrder
{
   


    #[ORM\Column(type: 'float')]
    private float $totalPrice = 0.0; // crucial!

    #[ORM\OneToOne(targetEntity: EUnavailability::class)]
    #[ORM\JoinColumn(name: 'id_unavailability', referencedColumnName: 'idUnavailability', nullable: false)]
    protected int $idUnavailability;

    #[ORM\ManyToOne(targetEntity: ECarForRent::class)]
    #[ORM\JoinColumn(name: 'id_auto', referencedColumnName: 'idAuto', nullable: false)]
    private int $idAuto;

    public function __construct(
        DateTime $orderDate,
        int $method,
        int $user,
        int $idUnavailability
        
    ) {
        parent::__construct($orderDate, $method, $user);
        $this->idUnavailability = $idUnavailability;
        
     
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }
    public function setTotalPrice(float $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }
    public function getIdUnavailability(): int
    {
        return $this->idUnavailability;
    }
    public function setIdUnavailability(int $idUnavailability): void
    {
        $this->idUnavailability = $idUnavailability;
    }
    public function getIdAuto(): int
    {
        return $this->idAuto;
    }
    public function setIdAuto(int $idAuto): void
    {
        $this->idAuto = $idAuto;
    }
}

  

