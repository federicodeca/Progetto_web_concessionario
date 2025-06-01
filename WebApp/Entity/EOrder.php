<?php

use Doctrine\ORM\Mapping as ORM;
use DateTime;

require_once 'ECreditCard.php';
require_once 'EUser.php';

#[ORM\Entity]
#[ORM\Table(name: 'orders')]
#[ORM\InheritanceType("JOINED")]  //CTI joined table
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(["rentals" => "ERent", "sales" => "ESale"])]

abstract class EOrder
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $orderId;

    #[ORM\Column(type: 'datetime')]
    private DateTime $orderDate;

    #[ORM\Column(type: 'string')]
    private string $orderStatus;

    #[ORM\ManyToOne(targetEntity: ECreditCard::class)]
    #[ORM\JoinColumn(name: 'method_id', referencedColumnName: 'CardId', nullable: false)]
    private int $idMethod;

    #[ORM\ManyToOne(targetEntity: EUser::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'PersonId', nullable: false)]
    protected int  $idUser;

    public function __construct(DateTime $orderDate, string $orderStatus, int $method, int $user)
    {
        $this->orderDate = $orderDate;
        $this->orderStatus = $orderStatus;
        $this->idMethod = $method;
        $this->idUser = $user;
    }
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    public function getOrderDate(): DateTime
    {
        return $this->orderDate;
    }
    public function setOrderDate(DateTime $orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }
    public function setOrderStatus(string $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    public function setMethod(int $method): void
    {
        $this->idMethod = $method;
    }

    public function getMethod(): int
    {
        return $this->idMethod;
    }
    public function getIdUser(): int
    {
        return $this->idUser;
    }
    public function setUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

}
