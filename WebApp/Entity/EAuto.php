<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AutoRepository;


#[ORM\Entity(repositoryClass: AutoRepository::class)]
#[ORM\Table(name: 'auto')]
#[ORM\InheritanceType("JOINED")]  //CTI joined table
#[ORM\DiscriminatorColumn(name: "tipo", type: "string")]
#[ORM\DiscriminatorMap(["auto_in_vendita" => "EAutoInVendita", "auto_noleggio" => "EAutoNoleggio"])]





abstract class EAuto {

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected? int $idAuto;

    #[ORM\Column(type: 'string')]
    protected? string $modello;

    #[ORM\Column(type: 'string')]
    protected? string $marca;

    #[ORM\Column(type: 'string')]
    protected? string $colore;

    #[ORM\Column(type: 'integer')]
    protected? int $cavalli;

    #[ORM\Column(type: 'integer')]
    protected? int $cilindrata;

    #[ORM\Column(type: 'integer')]
    protected? int $posti;

    #[ORM\Column(type: 'string')]
    protected? string $alimentazione;

    public function __construct(int $idAuto, string $modello, string $marca, string $colore, int $cavalli, int $cilindrata, int $posti,string $alimentazione) {

        $this->idAuto = $idAuto;
        $this->modello = $modello;
        $this->marca = $marca;
        $this->colore = $colore;
        $this->cavalli = $cavalli;
        $this->cilindrata = $cilindrata;
        $this->posti = $posti;
        $this->alimentazione = $alimentazione;
    }

    public function getIdAuto(): int {
        return $this->idAuto;
    }

    public function getModello(): string {
        return $this->modello;
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function getColore(): string {
        return $this->colore;
    }

    public function getCavalli(): int {
        return $this->cavalli;
    }

    public function getCilindrata(): int {
        return $this->cilindrata;
    }

    public function getPosti(): int {
        return $this->posti;
    }

}