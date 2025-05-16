<?php
require_once 'EAuto.php';

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'auto_in_vendita')]

class EAutoInVendita extends EAuto
{
    #[ORM\Column(type: 'integer')]
    private int $prezzo;
  

    public function __construct(int $idAuto, string $modello, string $marca, string $colore, int $cavalli, int $cilindrata, int $posti, int $prezzo)
    {
        parent::__construct($idAuto, $modello, $marca, $colore, $cavalli, $cilindrata, $posti);
        $this->prezzo = $prezzo;

    }
}