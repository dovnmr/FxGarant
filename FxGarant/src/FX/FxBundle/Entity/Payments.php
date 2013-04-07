<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="payments")
 * @ORM\Entity
 */
class Payments
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
     * @ORM\Column(name="summ", type="float", nullable=true)
     */
    private $summ;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=32, nullable=true)
     */
    private $comments;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_payment", type="integer", nullable=true)
     */
    private $typePayment;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_id", type="integer", nullable=true)
     */
    private $transactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="baggage", type="text", nullable=true)
     */
    private $baggage;

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="result", type="integer", nullable=true)
     */
    private $result;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="date", nullable=true)
     */
    private $dateTime;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set summ
     *
     * @param float $summ
     * @return Payments
     */
    public function setSumm($summ)
    {
        $this->summ = $summ;
    
        return $this;
    }

    /**
     * Get summ
     *
     * @return float 
     */
    public function getSumm()
    {
        return $this->summ;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Payments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set typePayment
     *
     * @param integer $typePayment
     * @return Payments
     */
    public function setTypePayment($typePayment)
    {
        $this->typePayment = $typePayment;
    
        return $this;
    }

    /**
     * Get typePayment
     *
     * @return integer 
     */
    public function getTypePayment()
    {
        return $this->typePayment;
    }

    /**
     * Set transactionId
     *
     * @param integer $transactionId
     * @return Payments
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    
        return $this;
    }

    /**
     * Get transactionId
     *
     * @return integer 
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set baggage
     *
     * @param string $baggage
     * @return Payments
     */
    public function setBaggage($baggage)
    {
        $this->baggage = $baggage;
    
        return $this;
    }

    /**
     * Get baggage
     *
     * @return string 
     */
    public function getBaggage()
    {
        return $this->baggage;
    }

    /**
     * Set code
     *
     * @param integer $code
     * @return Payments
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set result
     *
     * @param integer $result
     * @return Payments
     */
    public function setResult($result)
    {
        $this->result = $result;
    
        return $this;
    }

    /**
     * Get result
     *
     * @return integer 
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return Payments
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    
        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set mtLogin
     *
     * @param \FX\FxBundle\Entity\MtAccounts $mtLogin
     * @return Payments
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
}