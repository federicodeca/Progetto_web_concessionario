<?php

namespace WebApp\Entity;

require_once 'Eperson.php';

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
#[ORM\Table(name: 'users')]

class EUser extends Eperson {

    protected string $description = "User";

    #[ORM\Column(type: 'string')]
    protected string $phone;

    #[ORM\Column(type: 'string')]
    protected string $city;

    #[ORM\Column(type: 'integer')]
    protected int $zipCode;

    #[ORM\Column(type: 'string')]
    protected string $address;

    public function __construct($name, $surname, $email, $phone, $userName, $password, $city, $zipCode, $address)
    {
        parent::__construct($name, $surname, $email, $userName, $password);
        $this->phone = $phone;  
        $this->city = $city;
        $this->zipCode = $zipCode;
        $this->address = $address;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getZipCode()
    {
        return $this->zipCode;
    }
    public function getAddress()
    {
        return $this->address;
    }
}
