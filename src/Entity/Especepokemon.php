<?php

namespace App\Entity;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCourbexp(): ?string
    {
        return $this->courbexp;
    }

    public function setCourbexp(string $courbexp): self
    {
        $this->courbexp = $courbexp;

        return $this;
    }

    public function getEvolution(): ?string
    {
        return $this->evolution;
    }

    public function setEvolution(string $evolution): self
    {
        $this->evolution = $evolution;

        return $this;
    }


}
