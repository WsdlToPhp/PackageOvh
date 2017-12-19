<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resellerDomainCreateIT StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResellerDomainCreateIT extends AbstractStructBase
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
     * The legalRepresentantFirstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalRepresentantFirstName;
    /**
     * The legalRepresentantLastName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalRepresentantLastName;
    /**
     * The legalNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalNumber;
    /**
     * The vat
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vat;
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
     * The nationality
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nationality;
    /**
     * The dryRun
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $dryRun;
    /**
     * Constructor method for resellerDomainCreateIT
     * @uses ResellerDomainCreateIT::setSession()
     * @uses ResellerDomainCreateIT::setDomain()
     * @uses ResellerDomainCreateIT::setHosting()
     * @uses ResellerDomainCreateIT::setOffer()
     * @uses ResellerDomainCreateIT::setProfile()
     * @uses ResellerDomainCreateIT::setOwo()
     * @uses ResellerDomainCreateIT::setOwner()
     * @uses ResellerDomainCreateIT::setAdmin()
     * @uses ResellerDomainCreateIT::setTech()
     * @uses ResellerDomainCreateIT::setBilling()
     * @uses ResellerDomainCreateIT::setDns1()
     * @uses ResellerDomainCreateIT::setDns2()
     * @uses ResellerDomainCreateIT::setDns3()
     * @uses ResellerDomainCreateIT::setDns4()
     * @uses ResellerDomainCreateIT::setDns5()
     * @uses ResellerDomainCreateIT::setLegalRepresentantFirstName()
     * @uses ResellerDomainCreateIT::setLegalRepresentantLastName()
     * @uses ResellerDomainCreateIT::setLegalNumber()
     * @uses ResellerDomainCreateIT::setVat()
     * @uses ResellerDomainCreateIT::setBirthDate()
     * @uses ResellerDomainCreateIT::setBirthCity()
     * @uses ResellerDomainCreateIT::setBirthDepartement()
     * @uses ResellerDomainCreateIT::setBirthCountry()
     * @uses ResellerDomainCreateIT::setNationality()
     * @uses ResellerDomainCreateIT::setDryRun()
     * @param string $session
     * @param string $domain
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
     * @param string $legalRepresentantFirstName
     * @param string $legalRepresentantLastName
     * @param string $legalNumber
     * @param string $vat
     * @param string $birthDate
     * @param string $birthCity
     * @param string $birthDepartement
     * @param string $birthCountry
     * @param string $nationality
     * @param bool $dryRun
     */
    public function __construct($session = null, $domain = null, $hosting = null, $offer = null, $profile = null, $owo = null, $owner = null, $admin = null, $tech = null, $billing = null, $dns1 = null, $dns2 = null, $dns3 = null, $dns4 = null, $dns5 = null, $legalRepresentantFirstName = null, $legalRepresentantLastName = null, $legalNumber = null, $vat = null, $birthDate = null, $birthCity = null, $birthDepartement = null, $birthCountry = null, $nationality = null, $dryRun = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
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
            ->setLegalRepresentantFirstName($legalRepresentantFirstName)
            ->setLegalRepresentantLastName($legalRepresentantLastName)
            ->setLegalNumber($legalNumber)
            ->setVat($vat)
            ->setBirthDate($birthDate)
            ->setBirthCity($birthCity)
            ->setBirthDepartement($birthDepartement)
            ->setBirthCountry($birthCountry)
            ->setNationality($nationality)
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * Get legalRepresentantFirstName value
     * @return string|null
     */
    public function getLegalRepresentantFirstName()
    {
        return $this->legalRepresentantFirstName;
    }
    /**
     * Set legalRepresentantFirstName value
     * @param string $legalRepresentantFirstName
     * @return \Ovh\StructType\ResellerDomainCreateIT
     */
    public function setLegalRepresentantFirstName($legalRepresentantFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($legalRepresentantFirstName) && !is_string($legalRepresentantFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalRepresentantFirstName)), __LINE__);
        }
        $this->legalRepresentantFirstName = $legalRepresentantFirstName;
        return $this;
    }
    /**
     * Get legalRepresentantLastName value
     * @return string|null
     */
    public function getLegalRepresentantLastName()
    {
        return $this->legalRepresentantLastName;
    }
    /**
     * Set legalRepresentantLastName value
     * @param string $legalRepresentantLastName
     * @return \Ovh\StructType\ResellerDomainCreateIT
     */
    public function setLegalRepresentantLastName($legalRepresentantLastName = null)
    {
        // validation for constraint: string
        if (!is_null($legalRepresentantLastName) && !is_string($legalRepresentantLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalRepresentantLastName)), __LINE__);
        }
        $this->legalRepresentantLastName = $legalRepresentantLastName;
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * Get vat value
     * @return string|null
     */
    public function getVat()
    {
        return $this->vat;
    }
    /**
     * Set vat value
     * @param string $vat
     * @return \Ovh\StructType\ResellerDomainCreateIT
     */
    public function setVat($vat = null)
    {
        // validation for constraint: string
        if (!is_null($vat) && !is_string($vat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vat)), __LINE__);
        }
        $this->vat = $vat;
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * Get nationality value
     * @return string|null
     */
    public function getNationality()
    {
        return $this->nationality;
    }
    /**
     * Set nationality value
     * @param string $nationality
     * @return \Ovh\StructType\ResellerDomainCreateIT
     */
    public function setNationality($nationality = null)
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nationality)), __LINE__);
        }
        $this->nationality = $nationality;
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
     * @return \Ovh\StructType\ResellerDomainCreateIT
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
