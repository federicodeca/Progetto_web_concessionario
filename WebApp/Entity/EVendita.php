<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'vendite')]

class EVendita extends EOrdine
{
    
    #[ORM\Column(type: 'float')]
    private float $prezzoTotale;

    #[ORM\]
    private Cliente $cliente;

   
    private EAutoInVendita $auto;


    public function __construct( float $prezzoTotale , $data, $ora, $stato, ECartaDiCredito $metodo, EAuto $auto)
    {
        parent::__construct($data, $ora, $stato,$metodo,$auto);
       
        $this->prezzoTotale = $prezzoTotale;
       
    }
}