<?php


use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'admins')]  
  
class EAdmin extends EPerson {

#[ORM\Column(type: 'string')]
private string $description ="Admin";

}