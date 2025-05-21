<?php

class Enoleggio extends EOrdine{

private DateTime $dataInizio;

private DateTime $dataFine;

private float $prezzototale;

#[ORM\ManyToOne(targetEntity: EAutoNoleggio::class, inversedBy: 'noleggi')] // 'noleggi' punta all'attributo in Auto
#[ORM\JoinColumn(name: 'id_auto', referencedColumnName: 'idAuto', nullable: false)] // 'macchina_id' sarà la chiave esterna nella tabella 'noleggi'
private EAutoNoleggio $auto;



    public function __construct(DateTime $dataInizio, DateTime $dataFine, $data, $ora, $stato, ECartaDiCredito $metodo, EAuto $auto)
    {
        parent::__construct($data, $ora, $stato, $metodo, $auto);
        $this->dataInizio = $dataInizio;
        $this->dataFine = $dataFine;
        $AmmontareNoleggio=$auto.getPrezzoPeriodo($dataInizio,$dataFine);

        $this->prezzoTotale = $AmmontareNoleggio;
    
    }

}
