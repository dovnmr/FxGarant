<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PammAccount
 *
 * @ORM\Table(name="pamm_account")
 * @ORM\Entity
 */
class PammAccount
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
     * @ORM\Column(name="responsibility", type="integer", nullable=true)
     */
    private $responsibility;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="regdate", type="datetime", nullable=true)
     */
    private $regdate;

    /**
     * @var float
     *
     * @ORM\Column(name="capital", type="float", nullable=true)
     */
    private $capital;

    /**
     * @var float
     *
     * @ORM\Column(name="min_capital", type="float", nullable=true)
     */
    private $minCapital;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_pamm", type="integer", nullable=true)
     */
    private $statusPamm;

    /**
     * @var integer
     *
     * @ORM\Column(name="drawdown", type="integer", nullable=true)
     */
    private $drawdown;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_drawdown", type="integer", nullable=true)
     */
    private $maxDrawdown;

    /**
     * @var float
     *
     * @ORM\Column(name="current_capital", type="float", nullable=true)
     */
    private $currentCapital;

    /**
     * @var float
     *
     * @ORM\Column(name="investment", type="float", nullable=true)
     */
    private $investment;

    /**
     * @var float
     *
     * @ORM\Column(name="insured_summ", type="float", nullable=true)
     */
    private $insuredSumm;

    /**
     * @var integer
     *
     * @ORM\Column(name="oppened_tickets", type="integer", nullable=true)
     */
    private $oppenedTickets;

    /**
     * @var \InvAccount
     *
     * @ORM\ManyToOne(targetEntity="InvAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inv_account_trader", referencedColumnName="id")
     * })
     */
    private $idInvAccountTrader;

    /**
     * @var \Offers
     *
     * @ORM\ManyToOne(targetEntity="Offers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offer_id", referencedColumnName="id")
     * })
     */
    private $offer;

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
     * @var \MtAccounts
     *
     * @ORM\ManyToOne(targetEntity="MtAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mt_login", referencedColumnName="mt_login")
     * })
     */
    private $mtLogin;

    /**
     * @var \TypesPamm
     *
     * @ORM\ManyToOne(targetEntity="TypesPamm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_pamm", referencedColumnName="id")
     * })
     */
    private $typePamm;



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
     * Set responsibility
     *
     * @param integer $responsibility
     * @return PammAccount
     */
    public function setResponsibility($responsibility)
    {
        $this->responsibility = $responsibility;
    
        return $this;
    }

    /**
     * Get responsibility
     *
     * @return integer 
     */
    public function getResponsibility()
    {
        return $this->responsibility;
    }

    /**
     * Set regdate
     *
     * @param \DateTime $regdate
     * @return PammAccount
     */
    public function setRegdate($regdate)
    {
        $this->regdate = $regdate;
    
        return $this;
    }

    /**
     * Get regdate
     *
     * @return \DateTime 
     */
    public function getRegdate()
    {
        return $this->regdate;
    }

    /**
     * Set capital
     *
     * @param float $capital
     * @return PammAccount
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    
        return $this;
    }

    /**
     * Get capital
     *
     * @return float 
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set minCapital
     *
     * @param float $minCapital
     * @return PammAccount
     */
    public function setMinCapital($minCapital)
    {
        $this->minCapital = $minCapital;
    
        return $this;
    }

    /**
     * Get minCapital
     *
     * @return float 
     */
    public function getMinCapital()
    {
        return $this->minCapital;
    }

    /**
     * Set statusPamm
     *
     * @param integer $statusPamm
     * @return PammAccount
     */
    public function setStatusPamm($statusPamm)
    {
        $this->statusPamm = $statusPamm;
    
        return $this;
    }

    /**
     * Get statusPamm
     *
     * @return integer 
     */
    public function getStatusPamm()
    {
        return $this->statusPamm;
    }

    /**
     * Set drawdown
     *
     * @param integer $drawdown
     * @return PammAccount
     */
    public function setDrawdown($drawdown)
    {
        $this->drawdown = $drawdown;
    
        return $this;
    }

    /**
     * Get drawdown
     *
     * @return integer 
     */
    public function getDrawdown()
    {
        return $this->drawdown;
    }

    /**
     * Set maxDrawdown
     *
     * @param integer $maxDrawdown
     * @return PammAccount
     */
    public function setMaxDrawdown($maxDrawdown)
    {
        $this->maxDrawdown = $maxDrawdown;
    
        return $this;
    }

    /**
     * Get maxDrawdown
     *
     * @return integer 
     */
    public function getMaxDrawdown()
    {
        return $this->maxDrawdown;
    }

    /**
     * Set currentCapital
     *
     * @param float $currentCapital
     * @return PammAccount
     */
    public function setCurrentCapital($currentCapital)
    {
        $this->currentCapital = $currentCapital;
    
        return $this;
    }

    /**
     * Get currentCapital
     *
     * @return float 
     */
    public function getCurrentCapital()
    {
        return $this->currentCapital;
    }

    /**
     * Set investment
     *
     * @param float $investment
     * @return PammAccount
     */
    public function setInvestment($investment)
    {
        $this->investment = $investment;
    
        return $this;
    }

    /**
     * Get investment
     *
     * @return float 
     */
    public function getInvestment()
    {
        return $this->investment;
    }

    /**
     * Set insuredSumm
     *
     * @param float $insuredSumm
     * @return PammAccount
     */
    public function setInsuredSumm($insuredSumm)
    {
        $this->insuredSumm = $insuredSumm;
    
        return $this;
    }

    /**
     * Get insuredSumm
     *
     * @return float 
     */
    public function getInsuredSumm()
    {
        return $this->insuredSumm;
    }

    /**
     * Set oppenedTickets
     *
     * @param integer $oppenedTickets
     * @return PammAccount
     */
    public function setOppenedTickets($oppenedTickets)
    {
        $this->oppenedTickets = $oppenedTickets;
    
        return $this;
    }

    /**
     * Get oppenedTickets
     *
     * @return integer 
     */
    public function getOppenedTickets()
    {
        return $this->oppenedTickets;
    }

    /**
     * Set idInvAccountTrader
     *
     * @param \FX\FxBundle\Entity\InvAccount $idInvAccountTrader
     * @return PammAccount
     */
    public function setIdInvAccountTrader(\FX\FxBundle\Entity\InvAccount $idInvAccountTrader = null)
    {
        $this->idInvAccountTrader = $idInvAccountTrader;
    
        return $this;
    }

    /**
     * Get idInvAccountTrader
     *
     * @return \FX\FxBundle\Entity\InvAccount 
     */
    public function getIdInvAccountTrader()
    {
        return $this->idInvAccountTrader;
    }

    /**
     * Set offer
     *
     * @param \FX\FxBundle\Entity\Offers $offer
     * @return PammAccount
     */
    public function setOffer(\FX\FxBundle\Entity\Offers $offer = null)
    {
        $this->offer = $offer;
    
        return $this;
    }

    /**
     * Get offer
     *
     * @return \FX\FxBundle\Entity\Offers 
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Set idUser
     *
     * @param \FX\FxBundle\Entity\Users $idUser
     * @return PammAccount
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

    /**
     * Set mtLogin
     *
     * @param \FX\FxBundle\Entity\MtAccounts $mtLogin
     * @return PammAccount
     */
    public function setMtLogin(\FX\FxBundle\Entity\MtAccounts $mtLogin = null)
    {
        $this->mtLogin = $mtLogin;
    
        return $this;
    }

    /**
     * Get mtLogin
     *
     * @return \FX\FxBundle\Entity\MtAccounts 
     */
    public function getMtLogin()
    {
        return $this->mtLogin;
    }

    /**
     * Set typePamm
     *
     * @param \FX\FxBundle\Entity\TypesPamm $typePamm
     * @return PammAccount
     */
    public function setTypePamm(\FX\FxBundle\Entity\TypesPamm $typePamm = null)
    {
        $this->typePamm = $typePamm;
    
        return $this;
    }

    /**
     * Get typePamm
     *
     * @return \FX\FxBundle\Entity\TypesPamm 
     */
    public function getTypePamm()
    {
        return $this->typePamm;
    }
}