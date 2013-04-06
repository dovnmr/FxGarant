<?php

namespace RL\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="phone_password", type="string", length=255, nullable=true)
     */
    protected $phonePassword;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_register", type="datetime", nullable=false)
     */
    protected $dateOfRegister;

    /**
     * @var string
     *
     * @ORM\Column(name="name_en", type="string", length=30, nullable=false)
     */
    protected $nameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="sname_en", type="string", length=30, nullable=false)
     */
    protected $snameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="name_native", type="string", length=30, nullable=false)
     */
    protected $nameNative;

    /**
     * @var string
     *
     * @ORM\Column(name="sname_native", type="string", length=30, nullable=false)
     */
    protected $snameNative;

    /**
     * @var string
     *
     * @ORM\Column(name="patronymic_native", type="string", length=30, nullable=false)
     */
    protected $patronymicNative;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=false)
     */
    protected $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="document_data", type="string", length=300, nullable=false)
     */
    protected $documentData;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=128, nullable=false)
     */
    protected $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=16, nullable=true)
     */
    protected $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=32, nullable=false)
     */
    protected $phone;

    /**
     * @var float
     *
     * @ORM\Column(name="reiting", type="float", nullable=false)
     */
    protected $reiting;

    /**
     * @var \Languages
     *
     * @ORM\ManyToOne(targetEntity="Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    protected $languageId;

    /**
     * @var \UsrReferences
     *
     * @ORM\ManyToOne(targetEntity="UsrReferences")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usr_reference_id", referencedColumnName="id")
     * })
     */
    protected $usrReferenceId;

    /**
     * @var \Countries
     *
     * @ORM\ManyToOne(targetEntity="Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    protected $countryId;

    /**
     * @var \Cities
     *
     * @ORM\ManyToOne(targetEntity="Cities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    protected $cityId;

    /**
     * @var \UsrDocumentTypes
     *
     * @ORM\ManyToOne(targetEntity="UsrDocumentTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usr_type_document_id", referencedColumnName="id")
     * })
     */
    protected $usrTypeDocumentId;


	public function __construct()
	{
		parent::__construct();
		
	}

//	/**
//     * Get id
//     *
//     * @return integer 
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
}
