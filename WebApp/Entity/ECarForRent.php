<?php


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

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    protected $description;


    #[ORM\OneToOne(targetEntity: EImage::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'photo_id', referencedColumnName: 'idImage', nullable: true)]
    protected $photo=null;

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
    
    public function getDescription(): ?string
    {
        return $this->description;
    }


    public function getAllIndispDates(): array
    {
        $indispDates = [];
        foreach ($this->unavailabilities as $unavailability) {
            $indispDates[] = $unavailability->getDate();
        }
        return $indispDates;
    }

    public function checkAvailability(DateTime $start, DateTime $end): bool
    {
        foreach ($this->unavailabilities as $unavailability) {
            if ($unavailability->getStart() <= $end && $unavailability->getEnd() >= $start) {
                return false; // Overlapping dates found
            }
        }
        return true; // No overlapping dates

    }

    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }


    public function getPhoto()
    {
        return $this->photo;
    }





}
