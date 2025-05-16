<?php
use Doctrine\ORM\Mapping as ORM;

class EAuto {




    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $idAuto;

    #[ORM\Column(type: 'string')]
    private string $modello;

    #[ORM\Column(type: 'string')]
    private string $marca;

    #[ORM\Column(type: 'string')]
    private string $colore;

    #[ORM\Column(type: 'integer')]
    private int $cavalli;

    #[ORM\Column(type: 'integer')]
    private int $cilindrata;

    #[ORM\Column(type: 'integer')]
    private int $posti;

    #[ORM\Column(type: 'string')]
    private string $alimentazione;

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