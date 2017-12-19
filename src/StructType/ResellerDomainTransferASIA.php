<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resellerDomainTransferASIA StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResellerDomainTransferASIA extends AbstractStructBase
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
     * The CedCea
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CedCea;
    /**
     * The contactCED
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contactCED;
    /**
     * The localityCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $localityCity;
    /**
     * The localitySp
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $localitySp;
    /**
     * The ccLocality
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ccLocality;
    /**
     * The legalEntityType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalEntityType;
    /**
     * The otherLEType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $otherLEType;
    /**
     * The identForm
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $identForm;
    /**
     * The otherIdentForm
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $otherIdentForm;
    /**
     * The identNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $identNumber;
    /**
     * The dryRun
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $dryRun;
    /**
     * Constructor method for resellerDomainTransferASIA
     * @uses ResellerDomainTransferASIA::setSession()
     * @uses ResellerDomainTransferASIA::setDomain()
     * @uses ResellerDomainTransferASIA::setAuthinfo()
     * @uses ResellerDomainTransferASIA::setHosting()
     * @uses ResellerDomainTransferASIA::setOffer()
     * @uses ResellerDomainTransferASIA::setProfile()
     * @uses ResellerDomainTransferASIA::setOwo()
     * @uses ResellerDomainTransferASIA::setOwner()
     * @uses ResellerDomainTransferASIA::setAdmin()
     * @uses ResellerDomainTransferASIA::setTech()
     * @uses ResellerDomainTransferASIA::setBilling()
     * @uses ResellerDomainTransferASIA::setDns1()
     * @uses ResellerDomainTransferASIA::setDns2()
     * @uses ResellerDomainTransferASIA::setDns3()
     * @uses ResellerDomainTransferASIA::setDns4()
     * @uses ResellerDomainTransferASIA::setDns5()
     * @uses ResellerDomainTransferASIA::setCedCea()
     * @uses ResellerDomainTransferASIA::setContactCED()
     * @uses ResellerDomainTransferASIA::setLocalityCity()
     * @uses ResellerDomainTransferASIA::setLocalitySp()
     * @uses ResellerDomainTransferASIA::setCcLocality()
     * @uses ResellerDomainTransferASIA::setLegalEntityType()
     * @uses ResellerDomainTransferASIA::setOtherLEType()
     * @uses ResellerDomainTransferASIA::setIdentForm()
     * @uses ResellerDomainTransferASIA::setOtherIdentForm()
     * @uses ResellerDomainTransferASIA::setIdentNumber()
     * @uses ResellerDomainTransferASIA::setDryRun()
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
     * @param string $cedCea
     * @param string $contactCED
     * @param string $localityCity
     * @param string $localitySp
     * @param string $ccLocality
     * @param string $legalEntityType
     * @param string $otherLEType
     * @param string $identForm
     * @param string $otherIdentForm
     * @param string $identNumber
     * @param bool $dryRun
     */
    public function __construct($session = null, $domain = null, $authinfo = null, $hosting = null, $offer = null, $profile = null, $owo = null, $owner = null, $admin = null, $tech = null, $billing = null, $dns1 = null, $dns2 = null, $dns3 = null, $dns4 = null, $dns5 = null, $cedCea = null, $contactCED = null, $localityCity = null, $localitySp = null, $ccLocality = null, $legalEntityType = null, $otherLEType = null, $identForm = null, $otherIdentForm = null, $identNumber = null, $dryRun = null)
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
            ->setCedCea($cedCea)
            ->setContactCED($contactCED)
            ->setLocalityCity($localityCity)
            ->setLocalitySp($localitySp)
            ->setCcLocality($ccLocality)
            ->setLegalEntityType($legalEntityType)
            ->setOtherLEType($otherLEType)
            ->setIdentForm($identForm)
            ->setOtherIdentForm($otherIdentForm)
            ->setIdentNumber($identNumber)
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * Get CedCea value
     * @return string|null
     */
    public function getCedCea()
    {
        return $this->CedCea;
    }
    /**
     * Set CedCea value
     * @param string $cedCea
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setCedCea($cedCea = null)
    {
        // validation for constraint: string
        if (!is_null($cedCea) && !is_string($cedCea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cedCea)), __LINE__);
        }
        $this->CedCea = $cedCea;
        return $this;
    }
    /**
     * Get contactCED value
     * @return string|null
     */
    public function getContactCED()
    {
        return $this->contactCED;
    }
    /**
     * Set contactCED value
     * @param string $contactCED
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setContactCED($contactCED = null)
    {
        // validation for constraint: string
        if (!is_null($contactCED) && !is_string($contactCED)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactCED)), __LINE__);
        }
        $this->contactCED = $contactCED;
        return $this;
    }
    /**
     * Get localityCity value
     * @return string|null
     */
    public function getLocalityCity()
    {
        return $this->localityCity;
    }
    /**
     * Set localityCity value
     * @param string $localityCity
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setLocalityCity($localityCity = null)
    {
        // validation for constraint: string
        if (!is_null($localityCity) && !is_string($localityCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localityCity)), __LINE__);
        }
        $this->localityCity = $localityCity;
        return $this;
    }
    /**
     * Get localitySp value
     * @return string|null
     */
    public function getLocalitySp()
    {
        return $this->localitySp;
    }
    /**
     * Set localitySp value
     * @param string $localitySp
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setLocalitySp($localitySp = null)
    {
        // validation for constraint: string
        if (!is_null($localitySp) && !is_string($localitySp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localitySp)), __LINE__);
        }
        $this->localitySp = $localitySp;
        return $this;
    }
    /**
     * Get ccLocality value
     * @return string|null
     */
    public function getCcLocality()
    {
        return $this->ccLocality;
    }
    /**
     * Set ccLocality value
     * @param string $ccLocality
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setCcLocality($ccLocality = null)
    {
        // validation for constraint: string
        if (!is_null($ccLocality) && !is_string($ccLocality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ccLocality)), __LINE__);
        }
        $this->ccLocality = $ccLocality;
        return $this;
    }
    /**
     * Get legalEntityType value
     * @return string|null
     */
    public function getLegalEntityType()
    {
        return $this->legalEntityType;
    }
    /**
     * Set legalEntityType value
     * @param string $legalEntityType
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setLegalEntityType($legalEntityType = null)
    {
        // validation for constraint: string
        if (!is_null($legalEntityType) && !is_string($legalEntityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalEntityType)), __LINE__);
        }
        $this->legalEntityType = $legalEntityType;
        return $this;
    }
    /**
     * Get otherLEType value
     * @return string|null
     */
    public function getOtherLEType()
    {
        return $this->otherLEType;
    }
    /**
     * Set otherLEType value
     * @param string $otherLEType
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setOtherLEType($otherLEType = null)
    {
        // validation for constraint: string
        if (!is_null($otherLEType) && !is_string($otherLEType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherLEType)), __LINE__);
        }
        $this->otherLEType = $otherLEType;
        return $this;
    }
    /**
     * Get identForm value
     * @return string|null
     */
    public function getIdentForm()
    {
        return $this->identForm;
    }
    /**
     * Set identForm value
     * @param string $identForm
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setIdentForm($identForm = null)
    {
        // validation for constraint: string
        if (!is_null($identForm) && !is_string($identForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identForm)), __LINE__);
        }
        $this->identForm = $identForm;
        return $this;
    }
    /**
     * Get otherIdentForm value
     * @return string|null
     */
    public function getOtherIdentForm()
    {
        return $this->otherIdentForm;
    }
    /**
     * Set otherIdentForm value
     * @param string $otherIdentForm
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setOtherIdentForm($otherIdentForm = null)
    {
        // validation for constraint: string
        if (!is_null($otherIdentForm) && !is_string($otherIdentForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherIdentForm)), __LINE__);
        }
        $this->otherIdentForm = $otherIdentForm;
        return $this;
    }
    /**
     * Get identNumber value
     * @return string|null
     */
    public function getIdentNumber()
    {
        return $this->identNumber;
    }
    /**
     * Set identNumber value
     * @param string $identNumber
     * @return \PayPal\StructType\ResellerDomainTransferASIA
     */
    public function setIdentNumber($identNumber = null)
    {
        // validation for constraint: string
        if (!is_null($identNumber) && !is_string($identNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identNumber)), __LINE__);
        }
        $this->identNumber = $identNumber;
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
     * @return \PayPal\StructType\ResellerDomainTransferASIA
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
