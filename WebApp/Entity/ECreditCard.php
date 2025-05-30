<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;
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
    private string $expirationDate;

    #[ORM\Column(type: 'string')]
    private string $cvv;
    
    #[ORM\Column(type: 'object')]
    protected EUser $user;



    public function __construct(string $cardNumber, DateTime $expirationDate, string $cvv, EUser $user)
    {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
        $this->user = $user;
    }
    public function getId(): int
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
        return $this->user->getUserId();
    }
}
