<?php
namespace Entity;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'sales')]

class ESale extends EOrder
{
    #[ORM\OneToOne(targetEntity: ECarForSale::class, inversedBy: 'SaleOrder')]
    #[ORM\JoinColumn(name: 'car_id', referencedColumnName: 'idAuto', nullable: true)]
    private ECarForSale $carForSale;

    public function __construct(DateTime $orderDate, string $orderStatus, ECreditCard $method, EUser $user, ECarForSale $carForSale)
    {
        parent::__construct($orderDate, $orderStatus, $method, $user);

        $this->carForSale = $carForSale;
    }
}
