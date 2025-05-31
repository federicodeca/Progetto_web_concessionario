<?php

require_once 'EAuto.php';

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'cars_for_sale')]

class ECarForSale extends EAuto
{
    #[ORM\Column(type: 'integer')]
    protected int $price;

    #[ORM\Column(type: 'boolean')]
    protected bool $available = true;

    #[ORM\OneToOne(targetEntity: ESale::class, mappedBy: 'carForSale', nullable: true)]
    protected? ESale $saleOrder = null;

    public function __construct(string $model, string $brand, string $color, int $horsepower, int $engineDisplacement, int $seats, int $price)
    {
        parent::__construct($model, $brand, $color, $horsepower, $engineDisplacement, $seats);
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
    public function isAvailable(): bool
    {
        return $this->available;
    }
    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }
    public function getSaleOrder(): ?ESale
    {
        return $this->saleOrder;
    }
    public function setSaleOrder(?ESale $saleOrder): void
    {
        $this->saleOrder = $saleOrder;
    }
}
