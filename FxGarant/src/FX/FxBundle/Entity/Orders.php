<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity
 */
class Orders
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
     * @var float
     *
     * @ORM\Column(name="sum", type="float", nullable=true)
     */
    private $sum;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_order", type="integer", nullable=true)
     */
    private $statusOrder;

    /**
     * @var \TypeOrder
     *
     * @ORM\ManyToOne(targetEntity="TypeOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_order", referencedColumnName="id")
     * })
     */
    private $typeOrder;

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
     * @var \PammAccount
     *
     * @ORM\ManyToOne(targetEntity="PammAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_account_pamm", referencedColumnName="id")
     * })
     */
    private $idAccountPamm;

    /**
     * @var \MtAccounts
     *
     * @ORM\ManyToOne(targetEntity="MtAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mt_login_trader", referencedColumnName="mt_login")
     * })
     */
    private $mtLoginTrader;

    /**
     * @var \MtAccounts
     *
     * @ORM\ManyToOne(targetEntity="MtAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mt_login_inv", referencedColumnName="mt_login")
     * })
     */
    private $mtLoginInv;



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
     * Set sum
     *
     * @param float $sum
     * @return Orders
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    
        return $this;
    }

    /**
     * Get sum
     *
     * @return float 
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Set statusOrder
     *
     * @param integer $statusOrder
     * @return Orders
     */
    public function setStatusOrder($statusOrder)
    {
        $this->statusOrder = $statusOrder;
    
        return $this;
    }

    /**
     * Get statusOrder
     *
     * @return integer 
     */
    public function getStatusOrder()
    {
        return $this->statusOrder;
    }

    /**
     * Set typeOrder
     *
     * @param \FX\FxBundle\Entity\TypeOrder $typeOrder
     * @return Orders
     */
    public function setTypeOrder(\FX\FxBundle\Entity\TypeOrder $typeOrder = null)
    {
        $this->typeOrder = $typeOrder;
    
        return $this;
    }

    /**
     * Get typeOrder
     *
     * @return \FX\FxBundle\Entity\TypeOrder 
     */
    public function getTypeOrder()
    {
        return $this->typeOrder;
    }

    /**
     * Set idUser
     *
     * @param \FX\FxBundle\Entity\Users $idUser
     * @return Orders
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
     * Set idAccountPamm
     *
     * @param \FX\FxBundle\Entity\PammAccount $idAccountPamm
     * @return Orders
     */
    public function setIdAccountPamm(\FX\FxBundle\Entity\PammAccount $idAccountPamm = null)
    {
        $this->idAccountPamm = $idAccountPamm;
    
        return $this;
    }

    /**
     * Get idAccountPamm
     *
     * @return \FX\FxBundle\Entity\PammAccount 
     */
    public function getIdAccountPamm()
    {
        return $this->idAccountPamm;
    }

    /**
     * Set mtLoginTrader
     *
     * @param \FX\FxBundle\Entity\MtAccounts $mtLoginTrader
     * @return Orders
     */
    public function setMtLoginTrader(\FX\FxBundle\Entity\MtAccounts $mtLoginTrader = null)
    {
        $this->mtLoginTrader = $mtLoginTrader;
    
        return $this;
    }

    /**
     * Get mtLoginTrader
     *
     * @return \FX\FxBundle\Entity\MtAccounts 
     */
    public function getMtLoginTrader()
    {
        return $this->mtLoginTrader;
    }

    /**
     * Set mtLoginInv
     *
     * @param \FX\FxBundle\Entity\MtAccounts $mtLoginInv
     * @return Orders
     */
    public function setMtLoginInv(\FX\FxBundle\Entity\MtAccounts $mtLoginInv = null)
    {
        $this->mtLoginInv = $mtLoginInv;
    
        return $this;
    }

    /**
     * Get mtLoginInv
     *
     * @return \FX\FxBundle\Entity\MtAccounts 
     */
    public function getMtLoginInv()
    {
        return $this->mtLoginInv;
    }
}