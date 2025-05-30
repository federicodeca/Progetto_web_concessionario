<?php

namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;
require_once 'EPerson.php';

#[ORM\Entity]
#[ORM\Table(name: 'admins')]  
  
class EAdmin extends EPerson {

#[ORM\Column(type: 'string')]
private string $description ="Admin";

}