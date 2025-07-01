<?php 

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'owners')]  


class EOwner extends EPerson {


    #[ORM\Column(type: 'string')]
    private string $description ="Owner";


     protected static $entity = EOwner::class;



    public function __construct($firstname, $surname, $email, $password, $username)
    {
        parent::__construct($firstname, $surname, $email, $password, $username);
        $this->role = 'owner'; // Set the role specifically for owner
    }

    public static function getEntity() {
        return self::$entity;
    }


}