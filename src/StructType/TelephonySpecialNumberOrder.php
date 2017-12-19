<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpecialNumberOrder StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpecialNumberOrder extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The billingAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The aliasNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $aliasNumber;
    /**
     * The prefix
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $prefix;
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $category;
    /**
     * The numberToReserve
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $numberToReserve;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The firstname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $firstname;
    /**
     * The streetName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetName;
    /**
     * The streetNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetNumber;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The procedureId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $procedureId;
    /**
     * The legalForm
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalForm;
    /**
     * The siret
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $siret;
    /**
     * The ape
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ape;
    /**
     * The socialNomination
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $socialNomination;
    /**
     * The displayUniversalDirectory
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayUniversalDirectory;
    /**
     * The retractation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $retractation;
    /**
     * Constructor method for telephonySpecialNumberOrder
     * @uses TelephonySpecialNumberOrder::setSession()
     * @uses TelephonySpecialNumberOrder::setBillingAccount()
     * @uses TelephonySpecialNumberOrder::setCountry()
     * @uses TelephonySpecialNumberOrder::setAliasNumber()
     * @uses TelephonySpecialNumberOrder::setPrefix()
     * @uses TelephonySpecialNumberOrder::setCategory()
     * @uses TelephonySpecialNumberOrder::setNumberToReserve()
     * @uses TelephonySpecialNumberOrder::setName()
     * @uses TelephonySpecialNumberOrder::setFirstname()
     * @uses TelephonySpecialNumberOrder::setStreetName()
     * @uses TelephonySpecialNumberOrder::setStreetNumber()
     * @uses TelephonySpecialNumberOrder::setZip()
     * @uses TelephonySpecialNumberOrder::setCity()
     * @uses TelephonySpecialNumberOrder::setEmail()
     * @uses TelephonySpecialNumberOrder::setProcedureId()
     * @uses TelephonySpecialNumberOrder::setLegalForm()
     * @uses TelephonySpecialNumberOrder::setSiret()
     * @uses TelephonySpecialNumberOrder::setApe()
     * @uses TelephonySpecialNumberOrder::setSocialNomination()
     * @uses TelephonySpecialNumberOrder::setDisplayUniversalDirectory()
     * @uses TelephonySpecialNumberOrder::setRetractation()
     * @param string $session
     * @param string $billingAccount
     * @param string $country
     * @param string $aliasNumber
     * @param string $prefix
     * @param string $category
     * @param string $numberToReserve
     * @param string $name
     * @param string $firstname
     * @param string $streetName
     * @param string $streetNumber
     * @param string $zip
     * @param string $city
     * @param string $email
     * @param int $procedureId
     * @param string $legalForm
     * @param string $siret
     * @param string $ape
     * @param string $socialNomination
     * @param string $displayUniversalDirectory
     * @param string $retractation
     */
    public function __construct($session = null, $billingAccount = null, $country = null, $aliasNumber = null, $prefix = null, $category = null, $numberToReserve = null, $name = null, $firstname = null, $streetName = null, $streetNumber = null, $zip = null, $city = null, $email = null, $procedureId = null, $legalForm = null, $siret = null, $ape = null, $socialNomination = null, $displayUniversalDirectory = null, $retractation = null)
    {
        $this
            ->setSession($session)
            ->setBillingAccount($billingAccount)
            ->setCountry($country)
            ->setAliasNumber($aliasNumber)
            ->setPrefix($prefix)
            ->setCategory($category)
            ->setNumberToReserve($numberToReserve)
            ->setName($name)
            ->setFirstname($firstname)
            ->setStreetName($streetName)
            ->setStreetNumber($streetNumber)
            ->setZip($zip)
            ->setCity($city)
            ->setEmail($email)
            ->setProcedureId($procedureId)
            ->setLegalForm($legalForm)
            ->setSiret($siret)
            ->setApe($ape)
            ->setSocialNomination($socialNomination)
            ->setDisplayUniversalDirectory($displayUniversalDirectory)
            ->setRetractation($retractation);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get billingAccount value
     * @return string|null
     */
    public function getBillingAccount()
    {
        return $this->billingAccount;
    }
    /**
     * Set billingAccount value
     * @param string $billingAccount
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAccount)), __LINE__);
        }
        $this->billingAccount = $billingAccount;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get aliasNumber value
     * @return string|null
     */
    public function getAliasNumber()
    {
        return $this->aliasNumber;
    }
    /**
     * Set aliasNumber value
     * @param string $aliasNumber
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setAliasNumber($aliasNumber = null)
    {
        // validation for constraint: string
        if (!is_null($aliasNumber) && !is_string($aliasNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aliasNumber)), __LINE__);
        }
        $this->aliasNumber = $aliasNumber;
        return $this;
    }
    /**
     * Get prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Set prefix value
     * @param string $prefix
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get numberToReserve value
     * @return string|null
     */
    public function getNumberToReserve()
    {
        return $this->numberToReserve;
    }
    /**
     * Set numberToReserve value
     * @param string $numberToReserve
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setNumberToReserve($numberToReserve = null)
    {
        // validation for constraint: string
        if (!is_null($numberToReserve) && !is_string($numberToReserve)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberToReserve)), __LINE__);
        }
        $this->numberToReserve = $numberToReserve;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get firstname value
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    /**
     * Set firstname value
     * @param string $firstname
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setFirstname($firstname = null)
    {
        // validation for constraint: string
        if (!is_null($firstname) && !is_string($firstname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstname)), __LINE__);
        }
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * Get streetName value
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->streetName;
    }
    /**
     * Set streetName value
     * @param string $streetName
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setStreetName($streetName = null)
    {
        // validation for constraint: string
        if (!is_null($streetName) && !is_string($streetName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetName)), __LINE__);
        }
        $this->streetName = $streetName;
        return $this;
    }
    /**
     * Get streetNumber value
     * @return string|null
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }
    /**
     * Set streetNumber value
     * @param string $streetNumber
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setStreetNumber($streetNumber = null)
    {
        // validation for constraint: string
        if (!is_null($streetNumber) && !is_string($streetNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetNumber)), __LINE__);
        }
        $this->streetNumber = $streetNumber;
        return $this;
    }
    /**
     * Get zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param string $zip
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zip)), __LINE__);
        }
        $this->zip = $zip;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get procedureId value
     * @return int|null
     */
    public function getProcedureId()
    {
        return $this->procedureId;
    }
    /**
     * Set procedureId value
     * @param int $procedureId
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setProcedureId($procedureId = null)
    {
        // validation for constraint: int
        if (!is_null($procedureId) && !is_numeric($procedureId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($procedureId)), __LINE__);
        }
        $this->procedureId = $procedureId;
        return $this;
    }
    /**
     * Get legalForm value
     * @return string|null
     */
    public function getLegalForm()
    {
        return $this->legalForm;
    }
    /**
     * Set legalForm value
     * @param string $legalForm
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setLegalForm($legalForm = null)
    {
        // validation for constraint: string
        if (!is_null($legalForm) && !is_string($legalForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalForm)), __LINE__);
        }
        $this->legalForm = $legalForm;
        return $this;
    }
    /**
     * Get siret value
     * @return string|null
     */
    public function getSiret()
    {
        return $this->siret;
    }
    /**
     * Set siret value
     * @param string $siret
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setSiret($siret = null)
    {
        // validation for constraint: string
        if (!is_null($siret) && !is_string($siret)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siret)), __LINE__);
        }
        $this->siret = $siret;
        return $this;
    }
    /**
     * Get ape value
     * @return string|null
     */
    public function getApe()
    {
        return $this->ape;
    }
    /**
     * Set ape value
     * @param string $ape
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setApe($ape = null)
    {
        // validation for constraint: string
        if (!is_null($ape) && !is_string($ape)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ape)), __LINE__);
        }
        $this->ape = $ape;
        return $this;
    }
    /**
     * Get socialNomination value
     * @return string|null
     */
    public function getSocialNomination()
    {
        return $this->socialNomination;
    }
    /**
     * Set socialNomination value
     * @param string $socialNomination
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setSocialNomination($socialNomination = null)
    {
        // validation for constraint: string
        if (!is_null($socialNomination) && !is_string($socialNomination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($socialNomination)), __LINE__);
        }
        $this->socialNomination = $socialNomination;
        return $this;
    }
    /**
     * Get displayUniversalDirectory value
     * @return string|null
     */
    public function getDisplayUniversalDirectory()
    {
        return $this->displayUniversalDirectory;
    }
    /**
     * Set displayUniversalDirectory value
     * @param string $displayUniversalDirectory
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setDisplayUniversalDirectory($displayUniversalDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($displayUniversalDirectory) && !is_string($displayUniversalDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayUniversalDirectory)), __LINE__);
        }
        $this->displayUniversalDirectory = $displayUniversalDirectory;
        return $this;
    }
    /**
     * Get retractation value
     * @return string|null
     */
    public function getRetractation()
    {
        return $this->retractation;
    }
    /**
     * Set retractation value
     * @param string $retractation
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public function setRetractation($retractation = null)
    {
        // validation for constraint: string
        if (!is_null($retractation) && !is_string($retractation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($retractation)), __LINE__);
        }
        $this->retractation = $retractation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySpecialNumberOrder
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
