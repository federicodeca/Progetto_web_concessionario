<?php

class EAutoInVendita extends EAuto
{
    private int $prezzo;
  

    public function __construct(int $idAuto, string $modello, string $marca, string $colore, int $cavalli, int $cilindrata, int $posti, int $prezzo)
    {
        parent::__construct($idAuto, $modello, $marca, $colore, $cavalli, $cilindrata, $posti);
        $this->prezzo = $prezzo;

    }
}