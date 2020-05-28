<?php

namespace App\Entity;

use DateTime;
use DateTimeZone;
use Doctrine\ORM\Mapping as ORM;
use Exception;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon", indexes={@ORM\Index(name="idEspece", columns={"idEspece"}), @ORM\Index(name="idDresseur", columns={"idDresseur"})})
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
     * @var DateTime|null
     *
     * @ORM\Column(name="action", type="datetime", nullable=true)
     */
    private $action;

    /**
     * @var Dresseur
     *
     * @ORM\ManyToOne(targetEntity="Dresseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDresseur", referencedColumnName="id")
     * })
     */
    private $iddresseur;

    /**
     * @var Especepokemon
     *
     * @ORM\ManyToOne(targetEntity="Especepokemon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEspece", referencedColumnName="id")
     * })
     */
    private $idespece;

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
     * @return DateTime|null
     */
    public function getAction(): ?DateTime
    {
        return $this->action;
    }

    /**
     * @return Dresseur
     */
    public function getIddresseur(): ?Dresseur
    {
        return $this->iddresseur;
    }

    /**
     * @return Especepokemon
     */
    public function getIdespece(): ?Especepokemon
    {
        return $this->idespece;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $surnom
     */
    public function setSurnom(string $surnom): void
    {
        $this->surnom = $surnom;
    }

    /**
     * @param int $xp
     */
    public function setXp(int $xp): void
    {
        $this->xp = $xp;
    }

    /**
     * @param int $niveau
     */
    public function setNiveau(int $niveau): void
    {
        $this->niveau = $niveau;
    }

    /**
     * @param string $sexe
     */
    public function setSexe(string $sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @param int $prix
     */
    public function setPrix(int $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @param DateTime|null $action
     */
    public function setAction(?DateTime $action): void
    {
        $this->action = $action;
    }


    public function isRecentAction(): bool
    {
        if(is_null($this->action)){
            return false;
        }

        $dif = $this->action->diff(new DateTime('now'),true);

        if($dif->format('%h') > 0){
            return false;
        }

        return true;
    }

    /**
     * @param Dresseur $iddresseur
     */
    public function setIddresseur(Dresseur $iddresseur): void
    {
        $this->iddresseur = $iddresseur;
    }

    /**
     * @param Especepokemon $idespece
     */
    public function setIdespece(Especepokemon $idespece): void
    {
        $this->idespece = $idespece;
    }

    /**
     * @throws Exception
     */
    public function getTrained(): bool
    {
        if($this->isRecentAction()){
            return false;
        }

        $results = random_int(10, 30) + $this->xp;

        switch ($this->idespece->getCourbexp()){
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

        $date = new DateTime('now');
        $this->setAction($date);

        return true;
    }

}
