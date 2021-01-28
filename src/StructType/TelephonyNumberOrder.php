<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberOrder StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberOrder extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The billingAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
    /**
     * The aliasNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $aliasNumber;
    /**
     * The prefix
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $prefix;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The firstname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $firstname;
    /**
     * The streetName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetName;
    /**
     * The streetNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetNumber;
    /**
     * The zip
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The numberToReserve
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $numberToReserve;
    /**
     * The procedureId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $procedureId;
    /**
     * The legalForm
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalForm;
    /**
     * The siret
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $siret;
    /**
     * The ape
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ape;
    /**
     * The socialNomination
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $socialNomination;
    /**
     * The displayUniversalDirectory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayUniversalDirectory;
    /**
     * The retractation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $retractation;
    /**
     * Constructor method for telephonyNumberOrder
     * @uses TelephonyNumberOrder::setSession()
     * @uses TelephonyNumberOrder::setBillingAccount()
     * @uses TelephonyNumberOrder::setAliasNumber()
     * @uses TelephonyNumberOrder::setPrefix()
     * @uses TelephonyNumberOrder::setCountry()
     * @uses TelephonyNumberOrder::setName()
     * @uses TelephonyNumberOrder::setFirstname()
     * @uses TelephonyNumberOrder::setStreetName()
     * @uses TelephonyNumberOrder::setStreetNumber()
     * @uses TelephonyNumberOrder::setZip()
     * @uses TelephonyNumberOrder::setCity()
     * @uses TelephonyNumberOrder::setEmail()
     * @uses TelephonyNumberOrder::setNumberToReserve()
     * @uses TelephonyNumberOrder::setProcedureId()
     * @uses TelephonyNumberOrder::setLegalForm()
     * @uses TelephonyNumberOrder::setSiret()
     * @uses TelephonyNumberOrder::setApe()
     * @uses TelephonyNumberOrder::setSocialNomination()
     * @uses TelephonyNumberOrder::setDisplayUniversalDirectory()
     * @uses TelephonyNumberOrder::setRetractation()
     * @param string $session
     * @param string $billingAccount
     * @param string $aliasNumber
     * @param string $prefix
     * @param string $country
     * @param string $name
     * @param string $firstname
     * @param string $streetName
     * @param string $streetNumber
     * @param string $zip
     * @param string $city
     * @param string $email
     * @param string $numberToReserve
     * @param int $procedureId
     * @param string $legalForm
     * @param string $siret
     * @param string $ape
     * @param string $socialNomination
     * @param string $displayUniversalDirectory
     * @param string $retractation
     */
    public function __construct($session = null, $billingAccount = null, $aliasNumber = null, $prefix = null, $country = null, $name = null, $firstname = null, $streetName = null, $streetNumber = null, $zip = null, $city = null, $email = null, $numberToReserve = null, $procedureId = null, $legalForm = null, $siret = null, $ape = null, $socialNomination = null, $displayUniversalDirectory = null, $retractation = null)
    {
        $this
            ->setSession($session)
            ->setBillingAccount($billingAccount)
            ->setAliasNumber($aliasNumber)
            ->setPrefix($prefix)
            ->setCountry($country)
            ->setName($name)
            ->setFirstname($firstname)
            ->setStreetName($streetName)
            ->setStreetNumber($streetNumber)
            ->setZip($zip)
            ->setCity($city)
            ->setEmail($email)
            ->setNumberToReserve($numberToReserve)
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAccount, true), gettype($billingAccount)), __LINE__);
        }
        $this->billingAccount = $billingAccount;
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setAliasNumber($aliasNumber = null)
    {
        // validation for constraint: string
        if (!is_null($aliasNumber) && !is_string($aliasNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aliasNumber, true), gettype($aliasNumber)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefix, true), gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setFirstname($firstname = null)
    {
        // validation for constraint: string
        if (!is_null($firstname) && !is_string($firstname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstname, true), gettype($firstname)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setStreetName($streetName = null)
    {
        // validation for constraint: string
        if (!is_null($streetName) && !is_string($streetName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetName, true), gettype($streetName)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setStreetNumber($streetNumber = null)
    {
        // validation for constraint: string
        if (!is_null($streetNumber) && !is_string($streetNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNumber, true), gettype($streetNumber)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zip, true), gettype($zip)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setNumberToReserve($numberToReserve = null)
    {
        // validation for constraint: string
        if (!is_null($numberToReserve) && !is_string($numberToReserve)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberToReserve, true), gettype($numberToReserve)), __LINE__);
        }
        $this->numberToReserve = $numberToReserve;
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setProcedureId($procedureId = null)
    {
        // validation for constraint: int
        if (!is_null($procedureId) && !(is_int($procedureId) || ctype_digit($procedureId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($procedureId, true), gettype($procedureId)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setLegalForm($legalForm = null)
    {
        // validation for constraint: string
        if (!is_null($legalForm) && !is_string($legalForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalForm, true), gettype($legalForm)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setSiret($siret = null)
    {
        // validation for constraint: string
        if (!is_null($siret) && !is_string($siret)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siret, true), gettype($siret)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setApe($ape = null)
    {
        // validation for constraint: string
        if (!is_null($ape) && !is_string($ape)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ape, true), gettype($ape)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setSocialNomination($socialNomination = null)
    {
        // validation for constraint: string
        if (!is_null($socialNomination) && !is_string($socialNomination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($socialNomination, true), gettype($socialNomination)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setDisplayUniversalDirectory($displayUniversalDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($displayUniversalDirectory) && !is_string($displayUniversalDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayUniversalDirectory, true), gettype($displayUniversalDirectory)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyNumberOrder
     */
    public function setRetractation($retractation = null)
    {
        // validation for constraint: string
        if (!is_null($retractation) && !is_string($retractation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retractation, true), gettype($retractation)), __LINE__);
        }
        $this->retractation = $retractation;
        return $this;
    }
}
