<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartnerGroups
 *
 * @ORM\Table(name="partner_groups")
 * @ORM\Entity
 */
class PartnerGroups
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
     * @ORM\Column(name="group_partner", type="string", length=16, nullable=true)
     */
    private $groupPartner;

    /**
     * @var \PartnerData
     *
     * @ORM\ManyToOne(targetEntity="PartnerData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partner", referencedColumnName="id")
     * })
     */
    private $idPartner;



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
     * Set groupPartner
     *
     * @param string $groupPartner
     * @return PartnerGroups
     */
    public function setGroupPartner($groupPartner)
    {
        $this->groupPartner = $groupPartner;
    
        return $this;
    }

    /**
     * Get groupPartner
     *
     * @return string 
     */
    public function getGroupPartner()
    {
        return $this->groupPartner;
    }

    /**
     * Set idPartner
     *
     * @param \FX\FxBundle\Entity\PartnerData $idPartner
     * @return PartnerGroups
     */
    public function setIdPartner(\FX\FxBundle\Entity\PartnerData $idPartner = null)
    {
        $this->idPartner = $idPartner;
    
        return $this;
    }

    /**
     * Get idPartner
     *
     * @return \FX\FxBundle\Entity\PartnerData 
     */
    public function getIdPartner()
    {
        return $this->idPartner;
    }
}