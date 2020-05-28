<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Lieu
 *
 * @ORM\Table(name="lieu")
 * @ORM\Entity
 */
class Lieu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Typepokemon", inversedBy="idlieu")
     * @ORM\JoinTable(name="capture",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idLieu", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idType", referencedColumnName="id")
     *   }
     * )
     */
    private $idtype;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idtype = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return Collection
     */
    public function getIdtype(): Collection
    {
        return $this->idtype;
    }

}
