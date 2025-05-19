<?php
use Doctrine\ORM\Mapping as ORM;

class EAutoNoleggio extends EAuto
{
    private $prezzoGiornaliero;

    private $CalendarioNoleggio;



    #[ORM\OnetoMany(targetEntity: ESovrapprezzo::class, mappedBy: 'auto', cascade: ['persist', 'remove'])]
    private array $sovrapprezzi;



    public function __construct($idAuto, $modello, $marca, $colore, $cavalli, $cilindrata, $posti, $prezzoGiornaliero)
    {
        parent::__construct($idAuto, $modello, $marca, $colore, $cavalli, $cilindrata, $posti);
        $this->prezzoGiornaliero = $prezzoGiornaliero;
        $this->CalendarioNoleggio = [];
    }


    


   


}