<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Extension
 *
 * @ORM\Table(name="extension")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExtensionRepository")
 */
class Extension
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Establishment", mappedBy="extensionId")
     */
    private $establishments;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Monument", mappedBy="extensionId")
     */
    private $monuments;


    public function __construct()
    {
        $this->establishments = new ArrayCollection();
        $this->monuments      = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return Extension
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add establishment
     *
     * @param Establishment $establishment
     *
     * @return Extension
     */
    public function addEstablishment(Establishment $establishment)
    {
        $this->establishments[] = $establishment;

        return $this;
    }


    /**
     * Remove establishment
     *
     * @param Establishment $establishment
     */
    public function removeEstablishment(Establishment $establishment)
    {
        $this->establishments->removeElement($establishment);
    }

    /**
     * Get establishments
     *
     * @return Collection
     */
    public function getEstablishments()
    {
        return $this->establishments;
    }

    /**
     * Add monument
     *
     * @param Monument $monument
     *
     * @return Extension
     */
    public function addMonument(Monument $monument)
    {
        $this->monuments[] = $monument;

        return $this;
    }

    /**
     * Remove monument
     *
     * @param Monument $monument
     */
    public function removeMonument(Monument $monument)
    {
        $this->monuments->removeElement($monument);
    }

    /**
     * Get monuments
     *
     * @return Collection
     */
    public function getMonuments()
    {
        return $this->monuments;
    }
}
