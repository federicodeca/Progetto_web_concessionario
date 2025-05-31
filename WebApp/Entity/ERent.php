<?php


use Doctrine\ORM\Mapping as ORM;
use DateTime;

// Specific table for Rental

#[ORM\Entity]
#[ORM\Table(name: 'rents')]
class ERent extends EOrder
{
    #[ORM\Column(type: 'datetime')]
    private DateTime $startDate;

    #[ORM\Column(type: 'datetime')]
    private DateTime $endDate;

    #[ORM\Column(type: 'float')]
    private float $totalPrice = 0.0; // crucial!

    #[ORM\ManyToOne(targetEntity: ECarForRent::class)]
    #[ORM\JoinColumn(name: 'id_auto', referencedColumnName: 'idAuto', nullable: false)]
    private ECarForRent $rentalCar;

    public function __construct(
        DateTime $startDate,
        DateTime $endDate,
        DateTime $orderDate,
        string $orderStatus,
        ECreditCard $method,
        EUser $user,
        ECarForRent $rentalCar
    ) {
        parent::__construct($orderDate, $orderStatus, $method, $user);
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->rentalCar = $rentalCar;
    }

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }
}
