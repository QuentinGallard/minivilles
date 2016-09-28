<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monument
 *
 * @ORM\Table(name="monument")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MonumentRepository")
 */
class Monument
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
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer")
     */
    private $cost;

    /**
     * @var Extension
     *
     * @ORM\ManyToOne(targetEntity="Extension", inversedBy="monuments")
     * @ORM\JoinColumn(name="extensionId", referencedColumnName="id")
     */
    private $extension;


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
     * @return Monument
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
     * Set cost
     *
     * @param string $cost
     *
     * @return Monument
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set extension
     *
     * @param \AppBundle\Entity\Extension $extension
     *
     * @return Monument
     */
    public function setExtension(\AppBundle\Entity\Extension $extension = null)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return \AppBundle\Entity\Extension
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
