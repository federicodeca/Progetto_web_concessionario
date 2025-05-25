<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'vendite')]

class EVendita extends EOrdine
{
    


    #[ORM\OneToOne (targetEntity: EAutoInVendita::class,inversedBy: 'OrdineVendita')]
    #[ORM\JoinColumn(name: 'auto_id', referencedColumnName: 'idAuto', nullable: false)]
    private EAutoInVendita $autoVendita;


    public function __construct(DateTime $dataOrdine, string $statoOrdine, ECartaDiCredito $metodo, EUtente $utente, EAutoInVendita $autoVendita)
    {
        parent::__construct($dataOrdine, $statoOrdine, $metodo, $utente);

        $this->autoVendita= $autoVendita;

        
    
    }
}