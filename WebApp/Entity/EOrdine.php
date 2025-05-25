<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;


require_once 'ECartaDiCredito.php';
require_once 'EUtente.php';

#[ORM\Entity]
#[ORM\Table(name: 'ordini')]
#[ORM\InheritanceType("JOINED")]  //CTI joined table
#[ORM\DiscriminatorColumn(name: "tipo", type: "string")]
#[ORM\DiscriminatorMap(["noleggi" => "ENoleggio", "vendite" => "EVendita"])]




abstract class EOrdine
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $idOrdine;

    #[ORM\Column(type: 'datetime')]
    private DateTime $dataOrdine;
  

    #[ORM\Column(type: 'string')]
    private string $statoOrdine;

    #[ORM\ManyToOne(targetEntity: ECartaDICredito::class)]
    #[ORM\JoinColumn(name: 'metodo_id', referencedColumnName: 'idCarta',nullable: false)]
    private ECartaDICredito $metodo;



    #[ORM\ManyToOne(targetEntity: EUtente::class)]
    #[ORM\JoinColumn(name: 'utente_id', referencedColumnName: 'idPersona', nullable: false)]
    protected EUtente $utente;


    public function __construct(DateTime $dataOrdine, string $statoOrdine, ECartaDICredito $metodo, EUtente $utente)
    {
        
        $this->data = $data;
        $this->stato = $stato;
        $this->metodo = $metodo;  
        $this->utente = $utente;


    }
    public function getIdOrdine(): int
    {
        return $this->idOrdine;
    }
    public function getData(): DateTime
    {
        return $this->data;
    }
    public function setData(DateTime $data): void
    {
        $this->data = $data;
    }

    public function getStato(): string
    {
        return $this->stato;
    }
    public function setStato(string $stato): void
    {
        $this->stato = $stato;
    }
    public function getMetodo(): ECartaDICredito
    {
        return $this->metodo;
    }
    public function setMetodo(ECartaDICredito $metodo): void
    {
        $this->metodo = $metodo;
    }

    public function getIdMetodo(): int
    {
        return $this->metodo->getIdCarta();
    }
    public function getUtente(): EUtente
    {
        return $this->utente;
    }
    public function setUtente(EUtente $utente): void
    {
        $this->utente = $utente;
    }
    public function getIdUtente(): int
    {
        return $this->utente->getIdPersona();
    }

    
    
 
    
}