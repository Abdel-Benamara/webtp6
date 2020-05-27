<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Typepokemon
 *
 * @ORM\Table(name="typePokemon")
 * @ORM\Entity
 */
class Typepokemon
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
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Especepokemon", mappedBy="idtype")
     */
    private $idpokemon;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Lieu", mappedBy="idtype")
     */
    private $idlieu;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idpokemon = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idlieu = new \Doctrine\Common\Collections\ArrayCollection();
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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Collection
     */
    public function getIdpokemon(): Collection
    {
        return $this->idpokemon;
    }

    /**
     * @return Collection
     */
    public function getIdlieu(): Collection
    {
        return $this->idlieu;
    }

}
