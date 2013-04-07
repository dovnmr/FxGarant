<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity
 */
class Languages
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
     * @ORM\Column(name="name_en", type="string", length=30, nullable=false)
     */
    private $nameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="name_native", type="string", length=30, nullable=false)
     */
    private $nameNative;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=8, nullable=false)
     */
    private $designation;



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
     * Set nameEn
     *
     * @param string $nameEn
     * @return Languages
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;
    
        return $this;
    }

    /**
     * Get nameEn
     *
     * @return string 
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * Set nameNative
     *
     * @param string $nameNative
     * @return Languages
     */
    public function setNameNative($nameNative)
    {
        $this->nameNative = $nameNative;
    
        return $this;
    }

    /**
     * Get nameNative
     *
     * @return string 
     */
    public function getNameNative()
    {
        return $this->nameNative;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Languages
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    
        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }
}