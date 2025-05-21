<?php
namespace WebApp\Entity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AutoRepository;


#[ORM\Entity(repositoryClass: AutoRepository::class)]
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
    private DateTime $data;

    #[ORM\Column(type: 'datetime')]
    private DateTime $ora;

    #[ORM\Column(type: 'string')]
    private string $stato;

    #[ORM\ManyToOne(targetEntity: ECartaDICredito::class,inversedBy: 'ordini')]
    #[ORM\JoinColumn(name: 'metodo_id', referencedColumnName: 'idCarta',nullable: false)]
    private ECartaDICredito $metodo;

    private EAuto $auto;


    public function __construct($data, $ora, $stato, ECartaDICredito $metodo, EAuto $auto)
    {
        
        $this->data = $data;
        $this->ora = $ora;
        $this->stato = $stato;
        $this->metodo = $metodo;
        $this->auto = $auto;


    }
    
 
    
}