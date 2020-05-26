<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon")
 * @ORM\Entity
 */
class Pokemon
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
     * @ORM\Column(name="surnom", type="string", length=25, nullable=false)
     */
    private $surnom;

    /**
     * @var int
     *
     * @ORM\Column(name="idDresseur", type="integer", nullable=false)
     */
    private $iddresseur;

    /**
     * @var int
     *
     * @ORM\Column(name="idEspece", type="integer", nullable=false)
     */
    private $idespece;

    /**
     * @var int
     *
     * @ORM\Column(name="xp", type="integer", nullable=false)
     */
    private $xp;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer", nullable=false)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=25, nullable=false)
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSurnom(): ?string
    {
        return $this->surnom;
    }

    /**
     * @return int
     */
    public function getIddresseur(): ?int
    {
        return $this->iddresseur;
    }

    /**
     * @return int
     */
    public function getIdespece(): ?int
    {
        return $this->idespece;
    }

    /**
     * @return int
     */
    public function getXp(): ?int
    {
        return $this->xp;
    }

    /**
     * @return int
     */
    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    /**
     * @return string
     */
    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    /**
     * @return int
     */
    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setIddresseur(int $iddresseur): self
    {
        $this->iddresseur = $iddresseur;

        return $this;
    }

    public function setIdespece(int $idespece): self
    {
        $this->idespece = $idespece;

        return $this;
    }

    public function setXp(int $xp): self
    {
        $this->xp = $xp;

        return $this;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function setSurnom(string $surnom): self
    {
        $this->surnom = $surnom;

        return $this;
    }

}
