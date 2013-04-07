<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankCards
 *
 * @ORM\Table(name="bank_cards")
 * @ORM\Entity
 */
class BankCards
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
     * @var integer
     *
     * @ORM\Column(name="number_card", type="integer", nullable=true)
     */
    private $numberCard;

    /**
     * @var integer
     *
     * @ORM\Column(name="city", type="integer", nullable=true)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="mfo", type="integer", nullable=true)
     */
    private $mfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="okpo", type="integer", nullable=true)
     */
    private $okpo;

    /**
     * @var integer
     *
     * @ORM\Column(name="iin", type="integer", nullable=true)
     */
    private $iin;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;



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
     * Set numberCard
     *
     * @param integer $numberCard
     * @return BankCards
     */
    public function setNumberCard($numberCard)
    {
        $this->numberCard = $numberCard;
    
        return $this;
    }

    /**
     * Get numberCard
     *
     * @return integer 
     */
    public function getNumberCard()
    {
        return $this->numberCard;
    }

    /**
     * Set city
     *
     * @param integer $city
     * @return BankCards
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return integer 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set mfo
     *
     * @param integer $mfo
     * @return BankCards
     */
    public function setMfo($mfo)
    {
        $this->mfo = $mfo;
    
        return $this;
    }

    /**
     * Get mfo
     *
     * @return integer 
     */
    public function getMfo()
    {
        return $this->mfo;
    }

    /**
     * Set okpo
     *
     * @param integer $okpo
     * @return BankCards
     */
    public function setOkpo($okpo)
    {
        $this->okpo = $okpo;
    
        return $this;
    }

    /**
     * Get okpo
     *
     * @return integer 
     */
    public function getOkpo()
    {
        return $this->okpo;
    }

    /**
     * Set iin
     *
     * @param integer $iin
     * @return BankCards
     */
    public function setIin($iin)
    {
        $this->iin = $iin;
    
        return $this;
    }

    /**
     * Get iin
     *
     * @return integer 
     */
    public function getIin()
    {
        return $this->iin;
    }

    /**
     * Set idUser
     *
     * @param \FX\FxBundle\Entity\Users $idUser
     * @return BankCards
     */
    public function setIdUser(\FX\FxBundle\Entity\Users $idUser = null)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return \FX\FxBundle\Entity\Users 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}