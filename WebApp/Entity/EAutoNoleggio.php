<?php
namespace WebApp\Entity;

require_once 'EAuto.php';
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;




#[ORM\Entity]
#[ORM\Table(name: 'auto_noleggio')] // Tabella specifica per AutoVendita



class EAutoNoleggio extends EAuto
{
    #[ORM\Column(type: 'float')]
    protected $prezzoBase;



    #[OneToMany(targetEntity: EIndisponibilità::class, mappedBy: 'auto', cascade: ['persist', 'remove'])]
    protected $indisponibilità;


    
    #[OneToMany(targetEntity: ESovrapprezzo::class, mappedBy: 'auto', cascade: ['persist', 'remove'])]
    protected $sovrapprezzi;



    public function __construct( string $modello, string $marca, string $colore, int $cavalli, int $cilindrata, int $posti, int $prezzoBase)
    {
        parent::__construct( $modello, $marca, $colore, $cavalli, $cilindrata, $posti);
        $this->prezzoBase= $prezzoBase;
        $this->indisponibilità = new ArrayCollection();
        $this->sovrapprezzi = new ArrayCollection();
    
        
    }
    public function getPrezzoBase(): float
    {
        return $this->prezzoBase;
    }
    public function setPrezzoBase(float $prezzoBase): void
    {
        $this->prezzoBase = $prezzoBase;
    }
    public function getIndisponibilità(): ArrayCollection
    {
        return $this->indisponibilità;
    }
    
    public function addIndisponibilità(EIndisponibilità $indisponibilità): void
    {   
        $indisponibilità->setAuto($this); 
        $this->indisponibilità[] = $indisponibilità;
    }
    public function getSovrapprezzi(): ArrayCollection
    {
        return $this->sovrapprezzi;
    }
    public function addSovrapprezzo(ESovrapprezzo $sovrapprezzo): void
    {
        $sovrapprezzo->setAuto($this); 
        $this->sovrapprezzi[] = $sovrapprezzo;
    }


    


   


}