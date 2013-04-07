<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_country", type="string", length=32, nullable=false)
     */
    private $nameCountry;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameCountry
     *
     * @param string $nameCountry
     * @return Countries
     */
    public function setNameCountry($nameCountry)
    {
        $this->nameCountry = $nameCountry;
    
        return $this;
    }

    /**
     * Get nameCountry
     *
     * @return string 
     */
    public function getNameCountry()
    {
        return $this->nameCountry;
    }
}