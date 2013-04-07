<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffersInv
 *
 * @ORM\Table(name="offers_inv")
 * @ORM\Entity
 */
class OffersInv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inv_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $invId;

    /**
     * @var \InvAccount
     *
     * @ORM\ManyToOne(targetEntity="InvAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offers", referencedColumnName="id")
     * })
     */
    private $offers;



    /**
     * Get invId
     *
     * @return integer 
     */
    public function getInvId()
    {
        return $this->invId;
    }

    /**
     * Set offers
     *
     * @param \FX\FxBundle\Entity\InvAccount $offers
     * @return OffersInv
     */
    public function setOffers(\FX\FxBundle\Entity\InvAccount $offers = null)
    {
        $this->offers = $offers;
    
        return $this;
    }

    /**
     * Get offers
     *
     * @return \FX\FxBundle\Entity\InvAccount 
     */
    public function getOffers()
    {
        return $this->offers;
    }
}