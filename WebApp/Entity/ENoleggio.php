<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'noleggi')]

 // Tabella specifica per Noleggio

class Enoleggio extends EOrdine{


#[ORM\column(type: 'datetime')]
private DateTime $dataInizio;

#[ORM\column(type: 'datetime')]
private DateTime $dataFine;

#[ORM\Column(type: 'float')]
private float $prezzototale;

#[ORM\ManyToOne(targetEntity: EAutoNoleggio::class, inversedBy: 'noleggi')] // 'noleggi' punta all'attributo in Auto
#[ORM\JoinColumn(name: 'id_auto', referencedColumnName: 'idAuto', nullable: false)] // 'macchina_id' sarà la chiave esterna nella tabella 'noleggi'
private EAutoNoleggio $auto;

#[ORM\ManyToOne(targetEntity: CartaDiCredito::class)]
#[ORM\JoinColumn(name: 'carta_di_credito_id', referencedColumnName: 'idCarta', nullable: false)]
private ECartaDiCredito $metodo;

#[ORM\ManyToOne(targetEntity: EUtente::class)]
#[ORM\JoinColumn(name: 'id_utente', referencedColumnName: 'idPersona', nullable: false)]
private EUtente $utente;



    public function __construct(DateTime $dataInizio, DateTime $dataFine, $data, $ora, $stato, ECartaDiCredito $metodo, EAuto $auto)
    {
        parent::__construct($data, $ora, $stato, $metodo, $auto);
        $this->dataInizio = $dataInizio;
        $this->dataFine = $dataFine;
        $AmmontareNoleggio=$auto.getPrezzoPeriodo($dataInizio,$dataFine);

        $this->prezzoTotale = $AmmontareNoleggio;
    
    }

}
