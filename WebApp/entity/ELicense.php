<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
#[ORM\Table(name: 'license')]



 Class ELicense{

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected $idLicense;

    #[ORM\Column(type: 'datetime')]
    protected DateTime $exp;


    #[ORM\OneToOne(targetEntity: EImage::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'photo_id', referencedColumnName: 'idImage', nullable: true)]
    protected EImage $photo;

    #[ORM\OneToOne(targetEntity: EUSer::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'idUser', nullable: true)]
    protected EUser $user;

    
    protected bool $verified = false;


    public function __construct(DateTime $date, EImage $image, EUser $user){
        $this->exp = $date;
        $this->photo = $image;
        $this->user = $user;
    }

    public function checkExpiration():bool {
        $user = $this->user;
        $now = new DateTime("now", new DateTimeZone("Europe/Rome"));

        if ($this->exp>$now) return true;
        $this->user->setVerified(true);
        return false;


    }
}