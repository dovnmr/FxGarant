<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtAccounts
 *
 * @ORM\Table(name="mt_accounts")
 * @ORM\Entity
 */
class MtAccounts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mt_login", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mtLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="status_mt", type="string", length=16, nullable=true)
     */
    private $statusMt;

    /**
     * @var integer
     *
     * @ORM\Column(name="leverage", type="integer", nullable=true)
     */
    private $leverage;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=true)
     */
    private $agent;

    /**
     * @var integer
     *
     * @ORM\Column(name="send_reports", type="integer", nullable=true)
     */
    private $sendReports;

    /**
     * @var float
     *
     * @ORM\Column(name="deposit_mt", type="float", nullable=true)
     */
    private $depositMt;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_mt", type="integer", nullable=true)
     */
    private $enableMt;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_change_password", type="integer", nullable=true)
     */
    private $enableChangePassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_read_only", type="integer", nullable=true)
     */
    private $enableReadOnly;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="regdate_mt", type="datetime", nullable=true)
     */
    private $regdateMt;

    /**
     * @var float
     *
     * @ORM\Column(name="balance", type="float", nullable=true)
     */
    private $balance;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=64, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="pswd", type="string", length=255, nullable=true)
     */
    private $pswd;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_pswd", type="string", length=255, nullable=true)
     */
    private $invPswd;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_pswd", type="string", length=255, nullable=true)
     */
    private $phonePswd;

    /**
     * @var \PartnerGroups
     *
     * @ORM\ManyToOne(targetEntity="PartnerGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_mt", referencedColumnName="id")
     * })
     */
    private $groupMt;

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
     * Get mtLogin
     *
     * @return integer 
     */
    public function getMtLogin()
    {
        return $this->mtLogin;
    }

    /**
     * Set statusMt
     *
     * @param string $statusMt
     * @return MtAccounts
     */
    public function setStatusMt($statusMt)
    {
        $this->statusMt = $statusMt;
    
        return $this;
    }

    /**
     * Get statusMt
     *
     * @return string 
     */
    public function getStatusMt()
    {
        return $this->statusMt;
    }

    /**
     * Set leverage
     *
     * @param integer $leverage
     * @return MtAccounts
     */
    public function setLeverage($leverage)
    {
        $this->leverage = $leverage;
    
        return $this;
    }

    /**
     * Get leverage
     *
     * @return integer 
     */
    public function getLeverage()
    {
        return $this->leverage;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return MtAccounts
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
    
        return $this;
    }

    /**
     * Get agent
     *
     * @return integer 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set sendReports
     *
     * @param integer $sendReports
     * @return MtAccounts
     */
    public function setSendReports($sendReports)
    {
        $this->sendReports = $sendReports;
    
        return $this;
    }

    /**
     * Get sendReports
     *
     * @return integer 
     */
    public function getSendReports()
    {
        return $this->sendReports;
    }

    /**
     * Set depositMt
     *
     * @param float $depositMt
     * @return MtAccounts
     */
    public function setDepositMt($depositMt)
    {
        $this->depositMt = $depositMt;
    
        return $this;
    }

    /**
     * Get depositMt
     *
     * @return float 
     */
    public function getDepositMt()
    {
        return $this->depositMt;
    }

    /**
     * Set enableMt
     *
     * @param integer $enableMt
     * @return MtAccounts
     */
    public function setEnableMt($enableMt)
    {
        $this->enableMt = $enableMt;
    
        return $this;
    }

    /**
     * Get enableMt
     *
     * @return integer 
     */
    public function getEnableMt()
    {
        return $this->enableMt;
    }

    /**
     * Set enableChangePassword
     *
     * @param integer $enableChangePassword
     * @return MtAccounts
     */
    public function setEnableChangePassword($enableChangePassword)
    {
        $this->enableChangePassword = $enableChangePassword;
    
        return $this;
    }

    /**
     * Get enableChangePassword
     *
     * @return integer 
     */
    public function getEnableChangePassword()
    {
        return $this->enableChangePassword;
    }

    /**
     * Set enableReadOnly
     *
     * @param integer $enableReadOnly
     * @return MtAccounts
     */
    public function setEnableReadOnly($enableReadOnly)
    {
        $this->enableReadOnly = $enableReadOnly;
    
        return $this;
    }

    /**
     * Get enableReadOnly
     *
     * @return integer 
     */
    public function getEnableReadOnly()
    {
        return $this->enableReadOnly;
    }

    /**
     * Set regdateMt
     *
     * @param \DateTime $regdateMt
     * @return MtAccounts
     */
    public function setRegdateMt($regdateMt)
    {
        $this->regdateMt = $regdateMt;
    
        return $this;
    }

    /**
     * Get regdateMt
     *
     * @return \DateTime 
     */
    public function getRegdateMt()
    {
        return $this->regdateMt;
    }

    /**
     * Set balance
     *
     * @param float $balance
     * @return MtAccounts
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    
        return $this;
    }

    /**
     * Get balance
     *
     * @return float 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return MtAccounts
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set pswd
     *
     * @param string $pswd
     * @return MtAccounts
     */
    public function setPswd($pswd)
    {
        $this->pswd = $pswd;
    
        return $this;
    }

    /**
     * Get pswd
     *
     * @return string 
     */
    public function getPswd()
    {
        return $this->pswd;
    }

    /**
     * Set invPswd
     *
     * @param string $invPswd
     * @return MtAccounts
     */
    public function setInvPswd($invPswd)
    {
        $this->invPswd = $invPswd;
    
        return $this;
    }

    /**
     * Get invPswd
     *
     * @return string 
     */
    public function getInvPswd()
    {
        return $this->invPswd;
    }

    /**
     * Set phonePswd
     *
     * @param string $phonePswd
     * @return MtAccounts
     */
    public function setPhonePswd($phonePswd)
    {
        $this->phonePswd = $phonePswd;
    
        return $this;
    }

    /**
     * Get phonePswd
     *
     * @return string 
     */
    public function getPhonePswd()
    {
        return $this->phonePswd;
    }

    /**
     * Set groupMt
     *
     * @param \FX\FxBundle\Entity\PartnerGroups $groupMt
     * @return MtAccounts
     */
    public function setGroupMt(\FX\FxBundle\Entity\PartnerGroups $groupMt = null)
    {
        $this->groupMt = $groupMt;
    
        return $this;
    }

    /**
     * Get groupMt
     *
     * @return \FX\FxBundle\Entity\PartnerGroups 
     */
    public function getGroupMt()
    {
        return $this->groupMt;
    }

    /**
     * Set idUser
     *
     * @param \FX\FxBundle\Entity\Users $idUser
     * @return MtAccounts
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