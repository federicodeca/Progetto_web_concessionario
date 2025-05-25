<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;
require_once 'EUtente.php';

#[ORM\Entity]
#[ORM\Table(name: 'carte_di_credito')]

class ECartaDiCredito {  

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: 'string')]
    private string $numeroCarta;

    #[ORM\Column(type: 'DateTime')]
    private string $scadenza;

    #[ORM\Column(type: 'string')]
    private string $cvv;
    
    #[ORM\Column(type: 'object')]
    protected EUtente $utente;



    public function __construct(string $numeroCarta, DateTime $scadenza, string $cvv, EUtente $utente)
    {
        $this->numeroCarta = $numeroCarta;
        $this->scadenza = $scadenza;
        $this->cvv = $cvv;
        $this->nomeIntestatario = $nomeIntestatario;
        $this->cognomeIntestatario = $cognomeIntestatario;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getNumeroCarta(): string
    {
        return $this->numeroCarta;
    }
    public function setNumeroCarta(string $numeroCarta): void
    {
        $this->numeroCarta = $numeroCarta;
    }
    public function getScadenza(): DateTime
    {
        return $this->scadenza;
    }
    public function setScadenza(DateTime $scadenza): void
    {
        $this->scadenza = $scadenza;
    }
    public function getCvv(): string
    {
        return $this->cvv;
    }
    public function setCvv(string $cvv): void
    {
        $this->cvv = $cvv;
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
        return $this->utente->getIdUtente();
    }
    

}