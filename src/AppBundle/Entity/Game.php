<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRepository")
 */
class Game
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
     * @var int
     *
     * @ORM\Column(name="nbMinPlayer", type="integer")
     */
    private $nbMinPlayer;

    /**
     * @var int
     *
     * @ORM\Column(name="nbMaxPlayer", type="integer")
     */
    private $nbMaxPlayer;

    /**
     * @var array
     *
     * @ORM\Column(name="extension", type="array", nullable=true)
     */
    private $extension;

    /**
     * @var bool
     *
     * @ORM\Column(name="optionalRule", type="boolean")
     */
    private $optionalRule;

    /**
     * @var int
     *
     * @ORM\Column(name="nbStacks", type="integer", nullable=true)
     */
    private $nbStacks;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var datetime
     *
     * @ORM\Column(name="startAt", type="datetime")
     */
    private $startAt;

    /**
     * @var datetime
     *
     * @ORM\Column(name="endAt", type="datetime")
     */
    private $endAt;


    //TODO : class player
    private $winner;


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
     * Set nbMinPlayer
     *
     * @param integer $nbMinPlayer
     *
     * @return Game
     */
    public function setNbMinPlayer($nbMinPlayer)
    {
        $this->nbMinPlayer = $nbMinPlayer;

        return $this;
    }

    /**
     * Get nbMinPlayer
     *
     * @return int
     */
    public function getNbMinPlayer()
    {
        return $this->nbMinPlayer;
    }

    /**
     * Set nbMaxPlayer
     *
     * @param integer $nbMaxPlayer
     *
     * @return Game
     */
    public function setNbMaxPlayer($nbMaxPlayer)
    {
        $this->nbMaxPlayer = $nbMaxPlayer;

        return $this;
    }

    /**
     * Get nbMaxPlayer
     *
     * @return int
     */
    public function getNbMaxPlayer()
    {
        return $this->nbMaxPlayer;
    }

    /**
     * Set extension
     *
     * @param array $extension
     *
     * @return Game
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return array
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set optionalRule
     *
     * @param boolean $optionalRule
     *
     * @return Game
     */
    public function setOptionalRule($optionalRule)
    {
        $this->optionalRule = $optionalRule;

        return $this;
    }

    /**
     * Get optionalRule
     *
     * @return bool
     */
    public function getOptionalRule()
    {
        return $this->optionalRule;
    }

    /**
     * Set nbStacks
     *
     * @param integer $nbStacks
     *
     * @return Game
     */
    public function setNbStacks($nbStacks)
    {
        $this->nbStacks = $nbStacks;

        return $this;
    }

    /**
     * Get nbStacks
     *
     * @return int
     */
    public function getNbStacks()
    {
        return $this->nbStacks;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Game
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}

