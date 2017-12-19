<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resellerDomainTransfer StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResellerDomainTransfer extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The authinfo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $authinfo;
    /**
     * The hosting
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hosting;
    /**
     * The offer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $offer;
    /**
     * The profile
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $profile;
    /**
     * The owo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $owo;
    /**
     * The owner
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $owner;
    /**
     * The admin
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $admin;
    /**
     * The tech
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tech;
    /**
     * The billing
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billing;
    /**
     * The dns1
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns1;
    /**
     * The dns2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns2;
    /**
     * The dns3
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns3;
    /**
     * The dns4
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns4;
    /**
     * The dns5
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns5;
    /**
     * The method
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $method;
    /**
     * The legalName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalName;
    /**
     * The legalNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalNumber;
    /**
     * The afnicIdent
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $afnicIdent;
    /**
     * The birthDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthDate;
    /**
     * The birthCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthCity;
    /**
     * The birthDepartement
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthDepartement;
    /**
     * The birthCountry
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthCountry;
    /**
     * The dryRun
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $dryRun;
    /**
     * Constructor method for resellerDomainTransfer
     * @uses ResellerDomainTransfer::setSession()
     * @uses ResellerDomainTransfer::setDomain()
     * @uses ResellerDomainTransfer::setAuthinfo()
     * @uses ResellerDomainTransfer::setHosting()
     * @uses ResellerDomainTransfer::setOffer()
     * @uses ResellerDomainTransfer::setProfile()
     * @uses ResellerDomainTransfer::setOwo()
     * @uses ResellerDomainTransfer::setOwner()
     * @uses ResellerDomainTransfer::setAdmin()
     * @uses ResellerDomainTransfer::setTech()
     * @uses ResellerDomainTransfer::setBilling()
     * @uses ResellerDomainTransfer::setDns1()
     * @uses ResellerDomainTransfer::setDns2()
     * @uses ResellerDomainTransfer::setDns3()
     * @uses ResellerDomainTransfer::setDns4()
     * @uses ResellerDomainTransfer::setDns5()
     * @uses ResellerDomainTransfer::setMethod()
     * @uses ResellerDomainTransfer::setLegalName()
     * @uses ResellerDomainTransfer::setLegalNumber()
     * @uses ResellerDomainTransfer::setAfnicIdent()
     * @uses ResellerDomainTransfer::setBirthDate()
     * @uses ResellerDomainTransfer::setBirthCity()
     * @uses ResellerDomainTransfer::setBirthDepartement()
     * @uses ResellerDomainTransfer::setBirthCountry()
     * @uses ResellerDomainTransfer::setDryRun()
     * @param string $session
     * @param string $domain
     * @param string $authinfo
     * @param string $hosting
     * @param string $offer
     * @param string $profile
     * @param string $owo
     * @param string $owner
     * @param string $admin
     * @param string $tech
     * @param string $billing
     * @param string $dns1
     * @param string $dns2
     * @param string $dns3
     * @param string $dns4
     * @param string $dns5
     * @param string $method
     * @param string $legalName
     * @param string $legalNumber
     * @param string $afnicIdent
     * @param string $birthDate
     * @param string $birthCity
     * @param string $birthDepartement
     * @param string $birthCountry
     * @param bool $dryRun
     */
    public function __construct($session = null, $domain = null, $authinfo = null, $hosting = null, $offer = null, $profile = null, $owo = null, $owner = null, $admin = null, $tech = null, $billing = null, $dns1 = null, $dns2 = null, $dns3 = null, $dns4 = null, $dns5 = null, $method = null, $legalName = null, $legalNumber = null, $afnicIdent = null, $birthDate = null, $birthCity = null, $birthDepartement = null, $birthCountry = null, $dryRun = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setAuthinfo($authinfo)
            ->setHosting($hosting)
            ->setOffer($offer)
            ->setProfile($profile)
            ->setOwo($owo)
            ->setOwner($owner)
            ->setAdmin($admin)
            ->setTech($tech)
            ->setBilling($billing)
            ->setDns1($dns1)
            ->setDns2($dns2)
            ->setDns3($dns3)
            ->setDns4($dns4)
            ->setDns5($dns5)
            ->setMethod($method)
            ->setLegalName($legalName)
            ->setLegalNumber($legalNumber)
            ->setAfnicIdent($afnicIdent)
            ->setBirthDate($birthDate)
            ->setBirthCity($birthCity)
            ->setBirthDepartement($birthDepartement)
            ->setBirthCountry($birthCountry)
            ->setDryRun($dryRun);
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
     * @return \Ovh\StructType\ResellerDomainTransfer
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
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get authinfo value
     * @return string|null
     */
    public function getAuthinfo()
    {
        return $this->authinfo;
    }
    /**
     * Set authinfo value
     * @param string $authinfo
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setAuthinfo($authinfo = null)
    {
        // validation for constraint: string
        if (!is_null($authinfo) && !is_string($authinfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authinfo)), __LINE__);
        }
        $this->authinfo = $authinfo;
        return $this;
    }
    /**
     * Get hosting value
     * @return string|null
     */
    public function getHosting()
    {
        return $this->hosting;
    }
    /**
     * Set hosting value
     * @param string $hosting
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setHosting($hosting = null)
    {
        // validation for constraint: string
        if (!is_null($hosting) && !is_string($hosting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hosting)), __LINE__);
        }
        $this->hosting = $hosting;
        return $this;
    }
    /**
     * Get offer value
     * @return string|null
     */
    public function getOffer()
    {
        return $this->offer;
    }
    /**
     * Set offer value
     * @param string $offer
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setOffer($offer = null)
    {
        // validation for constraint: string
        if (!is_null($offer) && !is_string($offer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offer)), __LINE__);
        }
        $this->offer = $offer;
        return $this;
    }
    /**
     * Get profile value
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param string $profile
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setProfile($profile = null)
    {
        // validation for constraint: string
        if (!is_null($profile) && !is_string($profile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profile)), __LINE__);
        }
        $this->profile = $profile;
        return $this;
    }
    /**
     * Get owo value
     * @return string|null
     */
    public function getOwo()
    {
        return $this->owo;
    }
    /**
     * Set owo value
     * @param string $owo
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setOwo($owo = null)
    {
        // validation for constraint: string
        if (!is_null($owo) && !is_string($owo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($owo)), __LINE__);
        }
        $this->owo = $owo;
        return $this;
    }
    /**
     * Get owner value
     * @return string|null
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param string $owner
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setOwner($owner = null)
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($owner)), __LINE__);
        }
        $this->owner = $owner;
        return $this;
    }
    /**
     * Get admin value
     * @return string|null
     */
    public function getAdmin()
    {
        return $this->admin;
    }
    /**
     * Set admin value
     * @param string $admin
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setAdmin($admin = null)
    {
        // validation for constraint: string
        if (!is_null($admin) && !is_string($admin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($admin)), __LINE__);
        }
        $this->admin = $admin;
        return $this;
    }
    /**
     * Get tech value
     * @return string|null
     */
    public function getTech()
    {
        return $this->tech;
    }
    /**
     * Set tech value
     * @param string $tech
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setTech($tech = null)
    {
        // validation for constraint: string
        if (!is_null($tech) && !is_string($tech)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tech)), __LINE__);
        }
        $this->tech = $tech;
        return $this;
    }
    /**
     * Get billing value
     * @return string|null
     */
    public function getBilling()
    {
        return $this->billing;
    }
    /**
     * Set billing value
     * @param string $billing
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setBilling($billing = null)
    {
        // validation for constraint: string
        if (!is_null($billing) && !is_string($billing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billing)), __LINE__);
        }
        $this->billing = $billing;
        return $this;
    }
    /**
     * Get dns1 value
     * @return string|null
     */
    public function getDns1()
    {
        return $this->dns1;
    }
    /**
     * Set dns1 value
     * @param string $dns1
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setDns1($dns1 = null)
    {
        // validation for constraint: string
        if (!is_null($dns1) && !is_string($dns1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns1)), __LINE__);
        }
        $this->dns1 = $dns1;
        return $this;
    }
    /**
     * Get dns2 value
     * @return string|null
     */
    public function getDns2()
    {
        return $this->dns2;
    }
    /**
     * Set dns2 value
     * @param string $dns2
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setDns2($dns2 = null)
    {
        // validation for constraint: string
        if (!is_null($dns2) && !is_string($dns2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns2)), __LINE__);
        }
        $this->dns2 = $dns2;
        return $this;
    }
    /**
     * Get dns3 value
     * @return string|null
     */
    public function getDns3()
    {
        return $this->dns3;
    }
    /**
     * Set dns3 value
     * @param string $dns3
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setDns3($dns3 = null)
    {
        // validation for constraint: string
        if (!is_null($dns3) && !is_string($dns3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns3)), __LINE__);
        }
        $this->dns3 = $dns3;
        return $this;
    }
    /**
     * Get dns4 value
     * @return string|null
     */
    public function getDns4()
    {
        return $this->dns4;
    }
    /**
     * Set dns4 value
     * @param string $dns4
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setDns4($dns4 = null)
    {
        // validation for constraint: string
        if (!is_null($dns4) && !is_string($dns4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns4)), __LINE__);
        }
        $this->dns4 = $dns4;
        return $this;
    }
    /**
     * Get dns5 value
     * @return string|null
     */
    public function getDns5()
    {
        return $this->dns5;
    }
    /**
     * Set dns5 value
     * @param string $dns5
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setDns5($dns5 = null)
    {
        // validation for constraint: string
        if (!is_null($dns5) && !is_string($dns5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns5)), __LINE__);
        }
        $this->dns5 = $dns5;
        return $this;
    }
    /**
     * Get method value
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * Set method value
     * @param string $method
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setMethod($method = null)
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($method)), __LINE__);
        }
        $this->method = $method;
        return $this;
    }
    /**
     * Get legalName value
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->legalName;
    }
    /**
     * Set legalName value
     * @param string $legalName
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setLegalName($legalName = null)
    {
        // validation for constraint: string
        if (!is_null($legalName) && !is_string($legalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalName)), __LINE__);
        }
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * Get legalNumber value
     * @return string|null
     */
    public function getLegalNumber()
    {
        return $this->legalNumber;
    }
    /**
     * Set legalNumber value
     * @param string $legalNumber
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setLegalNumber($legalNumber = null)
    {
        // validation for constraint: string
        if (!is_null($legalNumber) && !is_string($legalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalNumber)), __LINE__);
        }
        $this->legalNumber = $legalNumber;
        return $this;
    }
    /**
     * Get afnicIdent value
     * @return string|null
     */
    public function getAfnicIdent()
    {
        return $this->afnicIdent;
    }
    /**
     * Set afnicIdent value
     * @param string $afnicIdent
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setAfnicIdent($afnicIdent = null)
    {
        // validation for constraint: string
        if (!is_null($afnicIdent) && !is_string($afnicIdent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($afnicIdent)), __LINE__);
        }
        $this->afnicIdent = $afnicIdent;
        return $this;
    }
    /**
     * Get birthDate value
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    /**
     * Set birthDate value
     * @param string $birthDate
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setBirthDate($birthDate = null)
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDate)), __LINE__);
        }
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * Get birthCity value
     * @return string|null
     */
    public function getBirthCity()
    {
        return $this->birthCity;
    }
    /**
     * Set birthCity value
     * @param string $birthCity
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setBirthCity($birthCity = null)
    {
        // validation for constraint: string
        if (!is_null($birthCity) && !is_string($birthCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthCity)), __LINE__);
        }
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     * Get birthDepartement value
     * @return string|null
     */
    public function getBirthDepartement()
    {
        return $this->birthDepartement;
    }
    /**
     * Set birthDepartement value
     * @param string $birthDepartement
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setBirthDepartement($birthDepartement = null)
    {
        // validation for constraint: string
        if (!is_null($birthDepartement) && !is_string($birthDepartement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDepartement)), __LINE__);
        }
        $this->birthDepartement = $birthDepartement;
        return $this;
    }
    /**
     * Get birthCountry value
     * @return string|null
     */
    public function getBirthCountry()
    {
        return $this->birthCountry;
    }
    /**
     * Set birthCountry value
     * @param string $birthCountry
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setBirthCountry($birthCountry = null)
    {
        // validation for constraint: string
        if (!is_null($birthCountry) && !is_string($birthCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthCountry)), __LINE__);
        }
        $this->birthCountry = $birthCountry;
        return $this;
    }
    /**
     * Get dryRun value
     * @return bool|null
     */
    public function getDryRun()
    {
        return $this->dryRun;
    }
    /**
     * Set dryRun value
     * @param bool $dryRun
     * @return \Ovh\StructType\ResellerDomainTransfer
     */
    public function setDryRun($dryRun = null)
    {
        // validation for constraint: boolean
        if (!is_null($dryRun) && !is_bool($dryRun)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dryRun)), __LINE__);
        }
        $this->dryRun = $dryRun;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\ResellerDomainTransfer
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
