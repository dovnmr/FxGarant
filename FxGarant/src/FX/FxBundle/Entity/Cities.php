<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cities
 *
 * @ORM\Table(name="cities")
 * @ORM\Entity
 */
class Cities
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
     * @ORM\Column(name="name_city", type="string", length=32, nullable=false)
     */
    private $nameCity;

    /**
     * @var \Countries
     *
     * @ORM\ManyToOne(targetEntity="Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;



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
     * Set nameCity
     *
     * @param string $nameCity
     * @return Cities
     */
    public function setNameCity($nameCity)
    {
        $this->nameCity = $nameCity;
    
        return $this;
    }

    /**
     * Get nameCity
     *
     * @return string 
     */
    public function getNameCity()
    {
        return $this->nameCity;
    }

    /**
     * Set country
     *
     * @param \FX\FxBundle\Entity\Countries $country
     * @return Cities
     */
    public function setCountry(\FX\FxBundle\Entity\Countries $country = null)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return \FX\FxBundle\Entity\Countries 
     */
    public function getCountry()
    {
        return $this->country;
    }
}