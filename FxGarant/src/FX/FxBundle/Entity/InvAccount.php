<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvAccount
 *
 * @ORM\Table(name="inv_account")
 * @ORM\Entity
 */
class InvAccount
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
     * @var \DateTime
     *
     * @ORM\Column(name="regdate", type="date", nullable=true)
     */
    private $regdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actvated_date", type="date", nullable=true)
     */
    private $actvatedDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_inv", type="integer", nullable=true)
     */
    private $statusInv;

    /**
     * @var float
     *
     * @ORM\Column(name="min_balance", type="float", nullable=true)
     */
    private $minBalance;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_preterm", type="integer", nullable=true)
     */
    private $statePreterm;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_all_and_close", type="integer", nullable=true)
     */
    private $stateAllAndClose;

    /**
     * @var float
     *
     * @ORM\Column(name="investor_input", type="float", nullable=true)
     */
    private $investorInput;

    /**
     * @var float
     *
     * @ORM\Column(name="investor_withdraw", type="float", nullable=true)
     */
    private $investorWithdraw;

    /**
     * @var float
     *
     * @ORM\Column(name="investor_insured", type="float", nullable=true)
     */
    private $investorInsured;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_delete", type="integer", nullable=true)
     */
    private $statusDelete;

    /**
     * @var float
     *
     * @ORM\Column(name="lock_money", type="float", nullable=true)
     */
    private $lockMoney;

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
     * @var \TypesAccounts
     *
     * @ORM\ManyToOne(targetEntity="TypesAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_account", referencedColumnName="id")
     * })
     */
    private $typeAccount;

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
     * Set regdate
     *
     * @param \DateTime $regdate
     * @return InvAccount
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
     * Set actvatedDate
     *
     * @param \DateTime $actvatedDate
     * @return InvAccount
     */
    public function setActvatedDate($actvatedDate)
    {
        $this->actvatedDate = $actvatedDate;
    
        return $this;
    }

    /**
     * Get actvatedDate
     *
     * @return \DateTime 
     */
    public function getActvatedDate()
    {
        return $this->actvatedDate;
    }

    /**
     * Set statusInv
     *
     * @param integer $statusInv
     * @return InvAccount
     */
    public function setStatusInv($statusInv)
    {
        $this->statusInv = $statusInv;
    
        return $this;
    }

    /**
     * Get statusInv
     *
     * @return integer 
     */
    public function getStatusInv()
    {
        return $this->statusInv;
    }

    /**
     * Set minBalance
     *
     * @param float $minBalance
     * @return InvAccount
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
     * Set statePreterm
     *
     * @param integer $statePreterm
     * @return InvAccount
     */
    public function setStatePreterm($statePreterm)
    {
        $this->statePreterm = $statePreterm;
    
        return $this;
    }

    /**
     * Get statePreterm
     *
     * @return integer 
     */
    public function getStatePreterm()
    {
        return $this->statePreterm;
    }

    /**
     * Set stateAllAndClose
     *
     * @param integer $stateAllAndClose
     * @return InvAccount
     */
    public function setStateAllAndClose($stateAllAndClose)
    {
        $this->stateAllAndClose = $stateAllAndClose;
    
        return $this;
    }

    /**
     * Get stateAllAndClose
     *
     * @return integer 
     */
    public function getStateAllAndClose()
    {
        return $this->stateAllAndClose;
    }

    /**
     * Set investorInput
     *
     * @param float $investorInput
     * @return InvAccount
     */
    public function setInvestorInput($investorInput)
    {
        $this->investorInput = $investorInput;
    
        return $this;
    }

    /**
     * Get investorInput
     *
     * @return float 
     */
    public function getInvestorInput()
    {
        return $this->investorInput;
    }

    /**
     * Set investorWithdraw
     *
     * @param float $investorWithdraw
     * @return InvAccount
     */
    public function setInvestorWithdraw($investorWithdraw)
    {
        $this->investorWithdraw = $investorWithdraw;
    
        return $this;
    }

    /**
     * Get investorWithdraw
     *
     * @return float 
     */
    public function getInvestorWithdraw()
    {
        return $this->investorWithdraw;
    }

    /**
     * Set investorInsured
     *
     * @param float $investorInsured
     * @return InvAccount
     */
    public function setInvestorInsured($investorInsured)
    {
        $this->investorInsured = $investorInsured;
    
        return $this;
    }

    /**
     * Get investorInsured
     *
     * @return float 
     */
    public function getInvestorInsured()
    {
        return $this->investorInsured;
    }

    /**
     * Set statusDelete
     *
     * @param integer $statusDelete
     * @return InvAccount
     */
    public function setStatusDelete($statusDelete)
    {
        $this->statusDelete = $statusDelete;
    
        return $this;
    }

    /**
     * Get statusDelete
     *
     * @return integer 
     */
    public function getStatusDelete()
    {
        return $this->statusDelete;
    }

    /**
     * Set lockMoney
     *
     * @param float $lockMoney
     * @return InvAccount
     */
    public function setLockMoney($lockMoney)
    {
        $this->lockMoney = $lockMoney;
    
        return $this;
    }

    /**
     * Get lockMoney
     *
     * @return float 
     */
    public function getLockMoney()
    {
        return $this->lockMoney;
    }

    /**
     * Set mtLogin
     *
     * @param \FX\FxBundle\Entity\MtAccounts $mtLogin
     * @return InvAccount
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
     * Set typeAccount
     *
     * @param \FX\FxBundle\Entity\TypesAccounts $typeAccount
     * @return InvAccount
     */
    public function setTypeAccount(\FX\FxBundle\Entity\TypesAccounts $typeAccount = null)
    {
        $this->typeAccount = $typeAccount;
    
        return $this;
    }

    /**
     * Get typeAccount
     *
     * @return \FX\FxBundle\Entity\TypesAccounts 
     */
    public function getTypeAccount()
    {
        return $this->typeAccount;
    }

    /**
     * Set idUser
     *
     * @param \FX\FxBundle\Entity\Users $idUser
     * @return InvAccount
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