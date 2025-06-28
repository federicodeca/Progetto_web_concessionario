<?php


use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'admins')]  
  
class EAdmin extends EPerson {

    #[ORM\Column(type: 'string')]
    private string $description ="Admin";


    public function __construct($firstname, $surname, $email, $password, $username)
    {
        parent::__construct($firstname, $surname, $email, $password, $username);
        $this->role = 'admin'; // Ensure role is set to admin

    }   

}