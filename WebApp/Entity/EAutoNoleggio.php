<?php
namespace WebApp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity]
#[ORM\Table(name: 'auto_noleggio')] // Tabella specifica per AutoVendita



class EAutoNoleggio extends EAuto
{
    #
    private $prezzoGiornaliero;

    #[ORM\OnetoMany(targetEntity: ENoleggio::class, mappedBy: 'auto', cascade: ['persist', 'remove'])]
    private Collection $noleggi;


    #[ORM\OnetoMany(targetEntity: EIndisponibilità::class, mappedBy: 'auto', cascade: ['persist', 'remove'])]
    private Collection $prenotazioni_registrate;



    #[ORM\OnetoMany(targetEntity: ESovrapprezzo::class, mappedBy: 'auto', cascade: ['persist', 'remove'])]
    private Collection $sovrapprezzi;



    public function __construct($idAuto, $modello, $marca, $colore, $cavalli, $cilindrata, $posti, $prezzoGiornaliero)
    {
        parent::__construct($idAuto, $modello, $marca, $colore, $cavalli, $cilindrata, $posti);
        $this->prezzoGiornaliero = $prezzoGiornaliero;
        $this->noleggi = new ArrayCollection();
        $this->prenotazioni_registrate = new ArrayCollection();
        $this->sovrapprezzi = new ArrayCollection();
    }


    


   


}