<?php

namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'persone')]
#[ORM\InheritanceType("JOINED")] // STI single table inheritance
#[ORM\DiscriminatorColumn(name: "tipo", type: "string")]
#[ORM\DiscriminatorMap(["admin" => "EAdmin", "utente" => "EUtente"])]



class EPersona{

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected $idPersona;

    #[ORM\Column(type: 'string')]
    protected $nome;

    #[ORM\Column(type: 'string')]
    protected $cognome;

    #[ORM\Column(type: 'string', unique: true)]
    protected $email;

    #[ORM\Column(type: 'string')]
    protected $password;


    #[ORM\Column(type: 'string', unique: true)]
    protected $userName;


    protected static $entity=EPersona::class;
    


    public function __construct( $nome, $cognome, $email,$password,$userName)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $this->nome = $nome;        
        $this->cognome = $cognome;
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
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCognome()
    {
        return $this->cognome;
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