<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offers
 *
 * @ORM\Table(name="offers")
 * @ORM\Entity
 */
class Offers
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
     * @ORM\Column(name="offer_type", type="string", length=15, nullable=true)
     */
    private $offerType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="offer_term", type="date", nullable=true)
     */
    private $offerTerm;

    /**
     * @var integer
     *
     * @ORM\Column(name="inv_depo", type="integer", nullable=true)
     */
    private $invDepo;

    /**
     * @var integer
     *
     * @ORM\Column(name="risk_division", type="integer", nullable=true)
     */
    private $riskDivision;

    /**
     * @var integer
     *
     * @ORM\Column(name="profit_division", type="integer", nullable=true)
     */
    private $profitDivision;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reinvestment_posblt", type="boolean", nullable=true)
     */
    private $reinvestmentPosblt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="modfct_lock", type="boolean", nullable=true)
     */
    private $modfctLock;

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_offer", type="float", nullable=true)
     */
    private $bonusOffer;

    /**
     * @var float
     *
     * @ORM\Column(name="commision", type="float", nullable=true)
     */
    private $commision;

    /**
     * @var float
     *
     * @ORM\Column(name="min_balance", type="float", nullable=true)
     */
    private $minBalance;

    /**
     * @var float
     *
     * @ORM\Column(name="min_input", type="float", nullable=true)
     */
    private $minInput;

    /**
     * @var float
     *
     * @ORM\Column(name="min_withdraw", type="float", nullable=true)
     */
    private $minWithdraw;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_bonus", type="integer", nullable=true)
     */
    private $agentBonus;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_method", type="string", length=1000, nullable=true)
     */
    private $contactMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="ts_desc", type="string", length=2000, nullable=true)
     */
    private $tsDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_offer", type="integer", nullable=true)
     */
    private $statusOffer;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_offer", type="integer", nullable=true)
     */
    private $dateOffer;

    /**
     * @var integer
     *
     * @ORM\Column(name="period_num", type="integer", nullable=true)
     */
    private $periodNum;

    /**
     * @var string
     *
     * @ORM\Column(name="period_type", type="string", length=15, nullable=true)
     */
    private $periodType;

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
     * @var \ReportLevels
     *
     * @ORM\ManyToOne(targetEntity="ReportLevels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_level_id", referencedColumnName="id")
     * })
     */
    private $reportLevel;



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
     * Set offerType
     *
     * @param string $offerType
     * @return Offers
     */
    public function setOfferType($offerType)
    {
        $this->offerType = $offerType;
    
        return $this;
    }

    /**
     * Get offerType
     *
     * @return string 
     */
    public function getOfferType()
    {
        return $this->offerType;
    }

    /**
     * Set offerTerm
     *
     * @param \DateTime $offerTerm
     * @return Offers
     */
    public function setOfferTerm($offerTerm)
    {
        $this->offerTerm = $offerTerm;
    
        return $this;
    }

    /**
     * Get offerTerm
     *
     * @return \DateTime 
     */
    public function getOfferTerm()
    {
        return $this->offerTerm;
    }

    /**
     * Set invDepo
     *
     * @param integer $invDepo
     * @return Offers
     */
    public function setInvDepo($invDepo)
    {
        $this->invDepo = $invDepo;
    
        return $this;
    }

    /**
     * Get invDepo
     *
     * @return integer 
     */
    public function getInvDepo()
    {
        return $this->invDepo;
    }

    /**
     * Set riskDivision
     *
     * @param integer $riskDivision
     * @return Offers
     */
    public function setRiskDivision($riskDivision)
    {
        $this->riskDivision = $riskDivision;
    
        return $this;
    }

    /**
     * Get riskDivision
     *
     * @return integer 
     */
    public function getRiskDivision()
    {
        return $this->riskDivision;
    }

    /**
     * Set profitDivision
     *
     * @param integer $profitDivision
     * @return Offers
     */
    public function setProfitDivision($profitDivision)
    {
        $this->profitDivision = $profitDivision;
    
        return $this;
    }

    /**
     * Get profitDivision
     *
     * @return integer 
     */
    public function getProfitDivision()
    {
        return $this->profitDivision;
    }

    /**
     * Set reinvestmentPosblt
     *
     * @param boolean $reinvestmentPosblt
     * @return Offers
     */
    public function setReinvestmentPosblt($reinvestmentPosblt)
    {
        $this->reinvestmentPosblt = $reinvestmentPosblt;
    
        return $this;
    }

    /**
     * Get reinvestmentPosblt
     *
     * @return boolean 
     */
    public function getReinvestmentPosblt()
    {
        return $this->reinvestmentPosblt;
    }

    /**
     * Set modfctLock
     *
     * @param boolean $modfctLock
     * @return Offers
     */
    public function setModfctLock($modfctLock)
    {
        $this->modfctLock = $modfctLock;
    
        return $this;
    }

    /**
     * Get modfctLock
     *
     * @return boolean 
     */
    public function getModfctLock()
    {
        return $this->modfctLock;
    }

    /**
     * Set bonusOffer
     *
     * @param float $bonusOffer
     * @return Offers
     */
    public function setBonusOffer($bonusOffer)
    {
        $this->bonusOffer = $bonusOffer;
    
        return $this;
    }

    /**
     * Get bonusOffer
     *
     * @return float 
     */
    public function getBonusOffer()
    {
        return $this->bonusOffer;
    }

    /**
     * Set commision
     *
     * @param float $commision
     * @return Offers
     */
    public function setCommision($commision)
    {
        $this->commision = $commision;
    
        return $this;
    }

    /**
     * Get commision
     *
     * @return float 
     */
    public function getCommision()
    {
        return $this->commision;
    }

    /**
     * Set minBalance
     *
     * @param float $minBalance
     * @return Offers
     */
    public function setMinBalance($minBalance)
    {
        $this->minBalance = $minBalance;
    
        return $this;
    }

    /**
     * Get minBalance
     *
     * @return float 
     */
    public function getMinBalance()
    {
        return $this->minBalance;
    }

    /**
     * Set minInput
     *
     * @param float $minInput
     * @return Offers
     */
    public function setMinInput($minInput)
    {
        $this->minInput = $minInput;
    
        return $this;
    }

    /**
     * Get minInput
     *
     * @return float 
     */
    public function getMinInput()
    {
        return $this->minInput;
    }

    /**
     * Set minWithdraw
     *
     * @param float $minWithdraw
     * @return Offers
     */
    public function setMinWithdraw($minWithdraw)
    {
        $this->minWithdraw = $minWithdraw;
    
        return $this;
    }

    /**
     * Get minWithdraw
     *
     * @return float 
     */
    public function getMinWithdraw()
    {
        return $this->minWithdraw;
    }

    /**
     * Set agentBonus
     *
     * @param integer $agentBonus
     * @return Offers
     */
    public function setAgentBonus($agentBonus)
    {
        $this->agentBonus = $agentBonus;
    
        return $this;
    }

    /**
     * Get agentBonus
     *
     * @return integer 
     */
    public function getAgentBonus()
    {
        return $this->agentBonus;
    }

    /**
     * Set contactMethod
     *
     * @param string $contactMethod
     * @return Offers
     */
    public function setContactMethod($contactMethod)
    {
        $this->contactMethod = $contactMethod;
    
        return $this;
    }

    /**
     * Get contactMethod
     *
     * @return string 
     */
    public function getContactMethod()
    {
        return $this->contactMethod;
    }

    /**
     * Set tsDesc
     *
     * @param string $tsDesc
     * @return Offers
     */
    public function setTsDesc($tsDesc)
    {
        $this->tsDesc = $tsDesc;
    
        return $this;
    }

    /**
     * Get tsDesc
     *
     * @return string 
     */
    public function getTsDesc()
    {
        return $this->tsDesc;
    }

    /**
     * Set statusOffer
     *
     * @param integer $statusOffer
     * @return Offers
     */
    public function setStatusOffer($statusOffer)
    {
        $this->statusOffer = $statusOffer;
    
        return $this;
    }

    /**
     * Get statusOffer
     *
     * @return integer 
     */
    public function getStatusOffer()
    {
        return $this->statusOffer;
    }

    /**
     * Set dateOffer
     *
     * @param integer $dateOffer
     * @return Offers
     */
    public function setDateOffer($dateOffer)
    {
        $this->dateOffer = $dateOffer;
    
        return $this;
    }

    /**
     * Get dateOffer
     *
     * @return integer 
     */
    public function getDateOffer()
    {
        return $this->dateOffer;
    }

    /**
     * Set periodNum
     *
     * @param integer $periodNum
     * @return Offers
     */
    public function setPeriodNum($periodNum)
    {
        $this->periodNum = $periodNum;
    
        return $this;
    }

    /**
     * Get periodNum
     *
     * @return integer 
     */
    public function getPeriodNum()
    {
        return $this->periodNum;
    }

    /**
     * Set periodType
     *
     * @param string $periodType
     * @return Offers
     */
    public function setPeriodType($periodType)
    {
        $this->periodType = $periodType;
    
        return $this;
    }

    /**
     * Get periodType
     *
     * @return string 
     */
    public function getPeriodType()
    {
        return $this->periodType;
    }

    /**
     * Set idUser
     *
     * @param \FX\FxBundle\Entity\Users $idUser
     * @return Offers
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
     * Set reportLevel
     *
     * @param \FX\FxBundle\Entity\ReportLevels $reportLevel
     * @return Offers
     */
    public function setReportLevel(\FX\FxBundle\Entity\ReportLevels $reportLevel = null)
    {
        $this->reportLevel = $reportLevel;
    
        return $this;
    }

    /**
     * Get reportLevel
     *
     * @return \FX\FxBundle\Entity\ReportLevels 
     */
    public function getReportLevel()
    {
        return $this->reportLevel;
    }
}