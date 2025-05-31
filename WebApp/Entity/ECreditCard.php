<?php

use Doctrine\ORM\Mapping as ORM;
use DateTime;
require_once 'EUser.php';

#[ORM\Entity]
#[ORM\Table(name: 'credit_cards')]

class ECreditCard {  

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $CardId;

    #[ORM\Column(type: 'string')]
    private string $cardNumber;

    #[ORM\Column(type: 'DateTime')]
    private DateTime $expirationDate;

    #[ORM\Column(type: 'string')]
    private string $cvv;
    

    #[ORM\ManyToOne(targetEntity: EUser::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'PersonId', nullable: false)]
    protected int $IdUser;



    public function __construct(string $cardNumber, DateTime $expirationDate, string $cvv, int $user)
    {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
        $this->IdUser = $user;
    }
    public function getCardId(): int
    {
        return $this->CardId;
    }
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }
    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }
    public function getExpirationDate(): DateTime
    {
        return $this->expirationDate;
    }
    public function setExpirationDate(DateTime $expirationDate): void
    {
        $this->expirationDate = $expirationDate;
    }
    public function getCvv(): string
    {
        return $this->cvv;
    }
    public function setCvv(string $cvv): void
    {
        $this->cvv = $cvv;
    }
    public function getUser(): int
    {
        return $this->IdUser;
    }
    public function setIdUser(int $IdUser): void
    {
        $this->IdUser = $IdUser;
    }
    public function getUserId(): int
    {
        return $this->IdUser;
    }
}
