<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Establishment
 *
 * @ORM\Table(name="establishment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstablishmentRepository")
 */
class Establishment
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="minDiceValue", type="integer")
     */
    private $minDiceValue;

    /**
     * @var int
     *
     * @ORM\Column(name="maxDiceValue", type="integer")
     */
    private $maxDiceValue;

    /**
     * @var int
     *
     * @ORM\Column(name="cost", type="integer")
     */
    private $cost;


    /**
     * @var string
     *
     * @ORM\Column(name="type", type="int")
     */
    private $type;

    /**
     * @var Extension
     *
     * @ORM\ManyToOne(targetEntity="Extension", inversedBy="establishments")
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
     * @return Establishment
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
     * Set minDiceValue
     *
     * @param integer $minDiceValue
     *
     * @return Establishment
     */
    public function setMinDiceValue($minDiceValue)
    {
        $this->minDiceValue = $minDiceValue;

        return $this;
    }

    /**
     * Get minDiceValue
     *
     * @return int
     */
    public function getMinDiceValue()
    {
        return $this->minDiceValue;
    }

    /**
     * Set maxDiceValue
     *
     * @param integer $maxDiceValue
     *
     * @return Establishment
     */
    public function setMaxDiceValue($maxDiceValue)
    {
        $this->maxDiceValue = $maxDiceValue;

        return $this;
    }

    /**
     * Get maxDiceValue
     *
     * @return int
     */
    public function getMaxDiceValue()
    {
        return $this->maxDiceValue;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     *
     * @return Establishment
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Establishment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Establishment
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return Extension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param Extension $extension
     */
    public function setExtension(Extension $extension)
    {
        $this->extension = $extension;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

}
