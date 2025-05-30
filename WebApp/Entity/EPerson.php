<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'persons')]
#[ORM\InheritanceType("JOINED")] // STI single table inheritance
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(["admin" => "EAdmin", "user" => "EUser"])]

class EPerson {

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected $PersonId;

    #[ORM\Column(type: 'string')]
    protected $firstName;

    #[ORM\Column(type: 'string')]
    protected $lastName;

    #[ORM\Column(type: 'string', unique: true)]
    protected $email;

    #[ORM\Column(type: 'string')]
    protected $password;

    #[ORM\Column(type: 'string', unique: true)]
    protected $userName;

    protected static $entity = EPerson::class;

    public function __construct($firstName, $lastName, $email, $password, $userName)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $hashedPassword;
        $this->userName = $userName;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    public static function getEntity()
    {
        return self::$entity;
    }

    public function getId()
    {
        return $this->PersonId;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getUserName()
    {
        return $this->userName;
    }
}
