<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Especepokemon
 *
 * @ORM\Table(name="especePokemon")
 * @ORM\Entity
 */
class Especepokemon
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="courbeXP", type="string", length=1, nullable=false)
     */
    private $courbexp;

    /**
     * @var string
     *
     * @ORM\Column(name="evolution", type="string", length=1, nullable=false)
     */
    private $evolution;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Typepokemon", inversedBy="idpokemon")
     * @ORM\JoinTable(name="bindpoketype",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idPokemon", referencedColumnName="id")
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
     * @return string
     */
    public function getCourbexp(): string
    {
        return $this->courbexp;
    }

    /**
     * @return string
     */
    public function getEvolution(): string
    {
        return $this->evolution;
    }

    /**
     * @return Collection
     */
    public function getIdtype(): Collection
    {
        return $this->idtype;
    }

}
