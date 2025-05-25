<?php
require_once 'EAuto.php';

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'auto_in_vendita')]

class EAutoInVendita extends EAuto
{
    #[ORM\Column(type: 'integer')]
    protected int $prezzo;

    
    #[ORM\Column(type: 'boolean')]
    protected bool $disponibilita = true;

    #[ORM\OnetoOne(targetEntity: EVendita::class, mappedBy: 'autoVendita',nullable: true)]
    protected? EVendita $OrdineVendita=null;





    public function __construct( string $modello, string $marca, string $colore, int $cavalli, int $cilindrata, int $posti, int $prezzo)
    {
        parent::__construct( $modello, $marca, $colore, $cavalli, $cilindrata, $posti);
        $this->prezzo = $prezzo;

    }


    public function getPrezzo(): int
    {
        return $this->prezzo;
    }
    public function setPrezzo(int $prezzo): void
    {
        $this->prezzo = $prezzo;
    }
    public function isDisponibile(): bool
    {
        return $this->disponibile;
    }
    public function setDisponibile(bool $disponibile): void
    {
        $this->disponibile = $disponibile;
    }
    public function getOrdineVendita(): ?EVendita
    {
        return $this->OrdineVendita;
    }
    public function setOrdineVendita(?EVendita $OrdineVendita): void
    {
        $this->OrdineVendita = $OrdineVendita;
    }
}