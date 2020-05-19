<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bindpoketype
 *
 * @ORM\Table(name="bindPokeType", indexes={@ORM\Index(name="idPokemon", columns={"idPokemon"}), @ORM\Index(name="idType", columns={"idType"})})
 * @ORM\Entity
 */
class Bindpoketype
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPokemon", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpokemon;

    /**
     * @var int
     *
     * @ORM\Column(name="idType", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idtype;

    public function getIdpokemon(): ?int
    {
        return $this->idpokemon;
    }

    public function getIdtype(): ?int
    {
        return $this->idtype;
    }


}
