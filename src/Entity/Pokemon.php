<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

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
     * @var Date
     *
     * @ORM\Column(name="action", type="date", nullable=true)
     */
    private $action;


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

    /**
     * @return Date
     */
    public function getAction(): Date
    {
        return $this->action;
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

    public function setAction(Date $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getTrained(PokemonRepository $pokemonRepository):void {
        $results = random_int(10, 30) + $this->xp;
        switch ($pokemonRepository->getEspece($this->id)['courbeXP']){
            case 'R':
                $exp = 0.8 * (pow($this->niveau, 3));
                while ($results > $exp){
                    $this->niveau = $this->niveau + 1;
                    $results = $results - $exp;
                    $exp = 0.8 * (pow($this->niveau, 3));
                }
                break;
            case 'M':
                $exp = pow($this->niveau, 3);
                while ($results > $exp){
                    $this->niveau = $this->niveau + 1;
                    $results = $results - $exp;
                    $exp = pow($this->niveau, 3);
                }
                break;
            case 'P':
                $exp = 1.2 * (pow($this->niveau, 3)) - 15 * (pow($this->niveau, 2)) + 100 * $this->niveau - 140;
                while ($results > $exp){
                    $this->niveau = $this->niveau + 1;
                    $results = $results - $exp;
                    $exp = 1.2 * (pow($this->niveau, 3)) - 15 * (pow($this->niveau, 2)) + 100 * $this->niveau - 140;
                }
                break;
            case 'L':
                $exp = 1.25 * (pow($this->niveau, 3));
                while ($results > $exp){
                    $this->niveau = $this->niveau + 1;
                    $results = $results - $exp;
                    $exp = 1.25 * (pow($this->niveau, 3));
                }
                break;
        }
        $this->xp = round($results, 0, PHP_ROUND_HALF_UP);

    }

}
