<?php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'images')]
 class EImage{


    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private $idImage;

    #[ORM\Column(type: 'string')]
    private $name;

    #[ORM\Column(type: 'integer')]
    private $size;

    #[ORM\Column(type: 'string')]
    private $types;

    #[ORM\Column(type: 'blob')]
    private $imageData;


    private static $entity = EImage::class;


    public function __construct($name, $size, $type, $imageData){
        $this->name = $name;
        $this->size = $size;
        $this->types = $type;
        $this->imageData = $imageData;
    }

    public static function getEntity(): string
    {
        return self::$entity;
    }


    public function getId()
    {
        return $this->idImage;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getType()
    {
        return $this->types;
    }

    public function getImageData()
    {
        return $this->imageData;
    }

    public function getEncodedData(){
        if(is_resource($this->imageData)){
            $data = stream_get_contents($this->imageData); //blob returned by doctrine is a resource, so we need to convert it to string
            return base64_encode($data);
        }else{
            return base64_encode($this->imageData);
        }
        
    }

}