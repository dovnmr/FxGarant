<?php

namespace FX\FxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=255, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_password", type="string", length=255, nullable=true)
     */
    private $phonePassword;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expired", type="boolean", nullable=false)
     */
    private $expired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    private $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credentials_expired", type="boolean", nullable=false)
     */
    private $credentialsExpired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="credentials_expire_at", type="datetime", nullable=true)
     */
    private $credentialsExpireAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_register", type="datetime", nullable=false)
     */
    private $dateOfRegister;

    /**
     * @var string
     *
     * @ORM\Column(name="name_en", type="string", length=30, nullable=false)
     */
    private $nameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="sname_en", type="string", length=30, nullable=false)
     */
    private $snameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="name_native", type="string", length=30, nullable=false)
     */
    private $nameNative;

    /**
     * @var string
     *
     * @ORM\Column(name="sname_native", type="string", length=30, nullable=false)
     */
    private $snameNative;

    /**
     * @var string
     *
     * @ORM\Column(name="patronymic_native", type="string", length=30, nullable=false)
     */
    private $patronymicNative;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=false)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="document_data", type="string", length=300, nullable=false)
     */
    private $documentData;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=128, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=16, nullable=true)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=32, nullable=false)
     */
    private $phone;

    /**
     * @var float
     *
     * @ORM\Column(name="reiting", type="float", nullable=false)
     */
    private $reiting;

    /**
     * @var \Cities
     *
     * @ORM\ManyToOne(targetEntity="Cities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

    /**
     * @var \Countries
     *
     * @ORM\ManyToOne(targetEntity="Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \Languages
     *
     * @ORM\ManyToOne(targetEntity="Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    private $language;

    /**
     * @var \UsrDocumentTypes
     *
     * @ORM\ManyToOne(targetEntity="UsrDocumentTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usr_type_document_id", referencedColumnName="id")
     * })
     */
    private $usrTypeDocument;

    /**
     * @var \UsrReferences
     *
     * @ORM\ManyToOne(targetEntity="UsrReferences")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usr_reference_id", referencedColumnName="id")
     * })
     */
    private $usrReference;



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
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set usernameCanonical
     *
     * @param string $usernameCanonical
     * @return Users
     */
    public function setUsernameCanonical($usernameCanonical)
    {
        $this->usernameCanonical = $usernameCanonical;
    
        return $this;
    }

    /**
     * Get usernameCanonical
     *
     * @return string 
     */
    public function getUsernameCanonical()
    {
        return $this->usernameCanonical;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailCanonical
     *
     * @param string $emailCanonical
     * @return Users
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->emailCanonical = $emailCanonical;
    
        return $this;
    }

    /**
     * Get emailCanonical
     *
     * @return string 
     */
    public function getEmailCanonical()
    {
        return $this->emailCanonical;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Users
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Users
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set phonePassword
     *
     * @param string $phonePassword
     * @return Users
     */
    public function setPhonePassword($phonePassword)
    {
        $this->phonePassword = $phonePassword;
    
        return $this;
    }

    /**
     * Get phonePassword
     *
     * @return string 
     */
    public function getPhonePassword()
    {
        return $this->phonePassword;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return Users
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    
        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return Users
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
    
        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set expired
     *
     * @param boolean $expired
     * @return Users
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;
    
        return $this;
    }

    /**
     * Get expired
     *
     * @return boolean 
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Set expiresAt
     *
     * @param \DateTime $expiresAt
     * @return Users
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;
    
        return $this;
    }

    /**
     * Get expiresAt
     *
     * @return \DateTime 
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Set confirmationToken
     *
     * @param string $confirmationToken
     * @return Users
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;
    
        return $this;
    }

    /**
     * Get confirmationToken
     *
     * @return string 
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * Set passwordRequestedAt
     *
     * @param \DateTime $passwordRequestedAt
     * @return Users
     */
    public function setPasswordRequestedAt($passwordRequestedAt)
    {
        $this->passwordRequestedAt = $passwordRequestedAt;
    
        return $this;
    }

    /**
     * Get passwordRequestedAt
     *
     * @return \DateTime 
     */
    public function getPasswordRequestedAt()
    {
        return $this->passwordRequestedAt;
    }

    /**
     * Set roles
     *
     * @param array $roles
     * @return Users
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    
        return $this;
    }

    /**
     * Get roles
     *
     * @return array 
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set credentialsExpired
     *
     * @param boolean $credentialsExpired
     * @return Users
     */
    public function setCredentialsExpired($credentialsExpired)
    {
        $this->credentialsExpired = $credentialsExpired;
    
        return $this;
    }

    /**
     * Get credentialsExpired
     *
     * @return boolean 
     */
    public function getCredentialsExpired()
    {
        return $this->credentialsExpired;
    }

    /**
     * Set credentialsExpireAt
     *
     * @param \DateTime $credentialsExpireAt
     * @return Users
     */
    public function setCredentialsExpireAt($credentialsExpireAt)
    {
        $this->credentialsExpireAt = $credentialsExpireAt;
    
        return $this;
    }

    /**
     * Get credentialsExpireAt
     *
     * @return \DateTime 
     */
    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }

    /**
     * Set dateOfRegister
     *
     * @param \DateTime $dateOfRegister
     * @return Users
     */
    public function setDateOfRegister($dateOfRegister)
    {
        $this->dateOfRegister = $dateOfRegister;
    
        return $this;
    }

    /**
     * Get dateOfRegister
     *
     * @return \DateTime 
     */
    public function getDateOfRegister()
    {
        return $this->dateOfRegister;
    }

    /**
     * Set nameEn
     *
     * @param string $nameEn
     * @return Users
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;
    
        return $this;
    }

    /**
     * Get nameEn
     *
     * @return string 
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * Set snameEn
     *
     * @param string $snameEn
     * @return Users
     */
    public function setSnameEn($snameEn)
    {
        $this->snameEn = $snameEn;
    
        return $this;
    }

    /**
     * Get snameEn
     *
     * @return string 
     */
    public function getSnameEn()
    {
        return $this->snameEn;
    }

    /**
     * Set nameNative
     *
     * @param string $nameNative
     * @return Users
     */
    public function setNameNative($nameNative)
    {
        $this->nameNative = $nameNative;
    
        return $this;
    }

    /**
     * Get nameNative
     *
     * @return string 
     */
    public function getNameNative()
    {
        return $this->nameNative;
    }

    /**
     * Set snameNative
     *
     * @param string $snameNative
     * @return Users
     */
    public function setSnameNative($snameNative)
    {
        $this->snameNative = $snameNative;
    
        return $this;
    }

    /**
     * Get snameNative
     *
     * @return string 
     */
    public function getSnameNative()
    {
        return $this->snameNative;
    }

    /**
     * Set patronymicNative
     *
     * @param string $patronymicNative
     * @return Users
     */
    public function setPatronymicNative($patronymicNative)
    {
        $this->patronymicNative = $patronymicNative;
    
        return $this;
    }

    /**
     * Get patronymicNative
     *
     * @return string 
     */
    public function getPatronymicNative()
    {
        return $this->patronymicNative;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Users
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set documentData
     *
     * @param string $documentData
     * @return Users
     */
    public function setDocumentData($documentData)
    {
        $this->documentData = $documentData;
    
        return $this;
    }

    /**
     * Get documentData
     *
     * @return string 
     */
    public function getDocumentData()
    {
        return $this->documentData;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Users
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Users
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    
        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set reiting
     *
     * @param float $reiting
     * @return Users
     */
    public function setReiting($reiting)
    {
        $this->reiting = $reiting;
    
        return $this;
    }

    /**
     * Get reiting
     *
     * @return float 
     */
    public function getReiting()
    {
        return $this->reiting;
    }

    /**
     * Set city
     *
     * @param \FX\FxBundle\Entity\Cities $city
     * @return Users
     */
    public function setCity(\FX\FxBundle\Entity\Cities $city = null)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return \FX\FxBundle\Entity\Cities 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param \FX\FxBundle\Entity\Countries $country
     * @return Users
     */
    public function setCountry(\FX\FxBundle\Entity\Countries $country = null)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return \FX\FxBundle\Entity\Countries 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set language
     *
     * @param \FX\FxBundle\Entity\Languages $language
     * @return Users
     */
    public function setLanguage(\FX\FxBundle\Entity\Languages $language = null)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return \FX\FxBundle\Entity\Languages 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set usrTypeDocument
     *
     * @param \FX\FxBundle\Entity\UsrDocumentTypes $usrTypeDocument
     * @return Users
     */
    public function setUsrTypeDocument(\FX\FxBundle\Entity\UsrDocumentTypes $usrTypeDocument = null)
    {
        $this->usrTypeDocument = $usrTypeDocument;
    
        return $this;
    }

    /**
     * Get usrTypeDocument
     *
     * @return \FX\FxBundle\Entity\UsrDocumentTypes 
     */
    public function getUsrTypeDocument()
    {
        return $this->usrTypeDocument;
    }

    /**
     * Set usrReference
     *
     * @param \FX\FxBundle\Entity\UsrReferences $usrReference
     * @return Users
     */
    public function setUsrReference(\FX\FxBundle\Entity\UsrReferences $usrReference = null)
    {
        $this->usrReference = $usrReference;
    
        return $this;
    }

    /**
     * Get usrReference
     *
     * @return \FX\FxBundle\Entity\UsrReferences 
     */
    public function getUsrReference()
    {
        return $this->usrReference;
    }
}