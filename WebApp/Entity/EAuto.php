<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'auto')]
#[ORM\InheritanceType("JOINED")]  //CTI joined table
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(["car_for_sale" => "ECarForSale", "rental_car" => "ECarForRent" ])]

abstract class EAuto {

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected int $idAuto;

    #[ORM\Column(type: 'string')]
    protected? string $model;

    #[ORM\Column(type: 'string')]
    protected? string $brand;

    #[ORM\Column(type: 'string')]
    protected? string $color;

    #[ORM\Column(type: 'integer')]
    protected? int $horsepower;

    #[ORM\Column(type: 'integer')]
    protected? int $displacement;

    #[ORM\Column(type: 'integer')]
    protected? int $seats;

    #[ORM\Column(type: 'string')]
    protected? string $fuelType;

    public function __construct(string $model, string $brand, string $color, int $horsepower, int $displacement, int $seats, string $fuelType) {
        $this->model = $model;
        $this->brand = $brand;
        $this->color = $color;
        $this->horsepower = $horsepower;
        $this->displacement = $displacement;
        $this->seats = $seats;
        $this->fuelType = $fuelType;
    }

    public function getIdAuto(): int {
        return $this->idAuto;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getHorsepower(): int {
        return $this->horsepower;
    }

    public function getDisplacement(): int {
        return $this->displacement;
    }

    public function getSeats(): int {
        return $this->seats;
    }

    public function getFuelType(): string {
        return $this->fuelType;
    }

    public function setModel(string $model): void {
        $this->model = $model;
    }

    public function setBrand(string $brand): void {
        $this->brand = $brand;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function setHorsepower(int $horsepower): void {
        $this->horsepower = $horsepower;
    }

    public function setDisplacement(int $displacement): void {
        $this->displacement = $displacement;
    }

    public function setSeats(int $seats): void {
        $this->seats = $seats;
    }

    public function setFuelType(string $fuelType): void {
        $this->fuelType = $fuelType;
    }
}
