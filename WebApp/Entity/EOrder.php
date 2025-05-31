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
    private ECreditCard $method;

    #[ORM\ManyToOne(targetEntity: EUser::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'PersonId', nullable: false)]
    protected EUser $user;

    public function __construct(DateTime $orderDate, string $orderStatus, ECreditCard $method, EUser $user)
    {
        $this->orderDate = $orderDate;
        $this->orderStatus = $orderStatus;
        $this->method = $method;
        $this->user = $user;
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
    public function getMethod(): ECreditCard
    {
        return $this->method;
    }
    public function setMethod(ECreditCard $method): void
    {
        $this->method = $method;
    }

    public function getMethodId(): int
    {
        return $this->method->getCardId();
    }
    public function getUser(): EUser
    {
        return $this->user;
    }
    public function setUser(EUser $user): void
    {
        $this->user = $user;
    }
    public function getUserId(): int
    {
        return $this->user->getId();
    }
}
