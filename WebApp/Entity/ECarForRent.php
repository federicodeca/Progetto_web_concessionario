<?php
namespace WebApp\Entity;

require_once 'EAuto.php';
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
#[ORM\Table(name: 'cars_for_rent')] // Specific table for RentalCar

class ECarForRent extends EAuto
{
    #[ORM\Column(type: 'float')]
    protected $basePrice;

    #[ORM\OneToMany(targetEntity: EUnavailability::class, mappedBy: 'car', cascade: ['persist', 'remove'])]
    protected $unavailabilities;

    #[ORM\OneToMany(targetEntity: ESurcharge::class, mappedBy: 'car', cascade: ['persist', 'remove'])]
    protected $surcharges;

    public function __construct(string $model, string $brand, string $color, int $horsepower, int $displacement, int $seats, float $basePrice)
    {
        parent::__construct($model, $brand, $color, $horsepower, $displacement, $seats);
        $this->basePrice = $basePrice;
        $this->unavailabilities = new ArrayCollection();
        $this->surcharges = new ArrayCollection();
    }

    public function getBasePrice(): float
    {
        return $this->basePrice;
    }

    public function setBasePrice(float $basePrice): void
    {
        $this->basePrice = $basePrice;
    }

    public function getUnavailabilities(): ArrayCollection
    {
        return $this->unavailabilities;
    }

    public function addUnavailability(EUnavailability $unavailability): void
    {
        $unavailability->setCar($this);
        $this->unavailabilities[] = $unavailability;
    }

    public function getSurcharges(): ArrayCollection
    {
        return $this->surcharges;
    }

    public function addSurcharge(ESurcharge $surcharge): void
    {
        $surcharge->setCar($this);
        $this->surcharges[] = $surcharge;
    }
}
