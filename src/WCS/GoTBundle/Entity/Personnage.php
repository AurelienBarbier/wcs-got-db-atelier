<?php

namespace WCS\GoTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnage
 *
 * @ORM\Table(name="personnage")
 * @ORM\Entity(repositoryClass="WCS\GoTBundle\Repository\PersonnageRepository")
 */
class Personnage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="string", length=255)
     */
    private $bio;

    /**
     * @ORM\ManyToOne(targetEntity="Royaume")
     */
    private $royaume;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Personnage
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Personnage
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set royaume
     *
     * @param \WCS\GoTBundle\Entity\Royaume $royaume
     *
     * @return Personnage
     */
    public function setRoyaume(\WCS\GoTBundle\Entity\Royaume $royaume = null)
    {
        $this->royaume = $royaume;

        return $this;
    }

    /**
     * Get royaume
     *
     * @return \WCS\GoTBundle\Entity\Royaume
     */
    public function getRoyaume()
    {
        return $this->royaume;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return Personnage
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }
}
