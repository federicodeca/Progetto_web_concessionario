<?php



use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'cars_for_sale')]

class ECarForSale extends EAuto
{
    #[ORM\Column(type: 'integer')]
    protected int $price;

    #[ORM\Column(type: 'boolean')]
    protected bool $available = true;

    #[ORM\OneToOne(targetEntity: ESale::class, mappedBy: 'carForSale')]
    protected? ESale $saleOrder = null;
    
    #[ORM\OneToOne(targetEntity: EImage::class)]
    #[ORM\JoinColumn(name: 'photo_id', referencedColumnName: 'idImage', nullable: true)]
    protected $photo=null;

    #[ORM\Column(type: 'boolean')]
    protected bool $saled = false;



    public function __construct(string $model, string $brand, string $color, int $horsepower, int $engineDisplacement, int $seats, int $price)
    {
        parent::__construct($model, $brand, $color, $horsepower, $engineDisplacement, $seats);
        $this->price = $price;
        $this->photo = null; // Initialize photo to null
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
    public function getSaled(): bool{
        return $this->saled;}
    
    public function setSaled(bool $saled): void
    {
        $this->saled = $saled;}

    public function getPhoto(): EImage
    {
        return $this->photo;
    }

    public function setPhoto(EImage $photo): void
    {
        $this->photo = $photo;
    }

}
