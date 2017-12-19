<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceModifyOwner StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceModifyOwner extends AbstractStructBase
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
     * The component
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $component;
    /**
     * The legalform
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalform;
    /**
     * The organisation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $organisation;
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
     * The address
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * The area
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $area;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The phone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * The fax
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fax;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The identityConfirmation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $identityConfirmation;
    /**
     * The acceptanceConfirmation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $acceptanceConfirmation;
    /**
     * Constructor method for serviceModifyOwner
     * @uses ServiceModifyOwner::setSession()
     * @uses ServiceModifyOwner::setDomain()
     * @uses ServiceModifyOwner::setComponent()
     * @uses ServiceModifyOwner::setLegalform()
     * @uses ServiceModifyOwner::setOrganisation()
     * @uses ServiceModifyOwner::setName()
     * @uses ServiceModifyOwner::setFirstname()
     * @uses ServiceModifyOwner::setAddress()
     * @uses ServiceModifyOwner::setCity()
     * @uses ServiceModifyOwner::setZip()
     * @uses ServiceModifyOwner::setArea()
     * @uses ServiceModifyOwner::setCountry()
     * @uses ServiceModifyOwner::setPhone()
     * @uses ServiceModifyOwner::setFax()
     * @uses ServiceModifyOwner::setEmail()
     * @uses ServiceModifyOwner::setIdentityConfirmation()
     * @uses ServiceModifyOwner::setAcceptanceConfirmation()
     * @param string $session
     * @param string $domain
     * @param string $component
     * @param string $legalform
     * @param string $organisation
     * @param string $name
     * @param string $firstname
     * @param string $address
     * @param string $city
     * @param string $zip
     * @param string $area
     * @param string $country
     * @param string $phone
     * @param string $fax
     * @param string $email
     * @param bool $identityConfirmation
     * @param bool $acceptanceConfirmation
     */
    public function __construct($session = null, $domain = null, $component = null, $legalform = null, $organisation = null, $name = null, $firstname = null, $address = null, $city = null, $zip = null, $area = null, $country = null, $phone = null, $fax = null, $email = null, $identityConfirmation = null, $acceptanceConfirmation = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setComponent($component)
            ->setLegalform($legalform)
            ->setOrganisation($organisation)
            ->setName($name)
            ->setFirstname($firstname)
            ->setAddress($address)
            ->setCity($city)
            ->setZip($zip)
            ->setArea($area)
            ->setCountry($country)
            ->setPhone($phone)
            ->setFax($fax)
            ->setEmail($email)
            ->setIdentityConfirmation($identityConfirmation)
            ->setAcceptanceConfirmation($acceptanceConfirmation);
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
     * @return \PayPal\StructType\ServiceModifyOwner
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
     * @return \PayPal\StructType\ServiceModifyOwner
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
     * Get component value
     * @return string|null
     */
    public function getComponent()
    {
        return $this->component;
    }
    /**
     * Set component value
     * @param string $component
     * @return \PayPal\StructType\ServiceModifyOwner
     */
    public function setComponent($component = null)
    {
        // validation for constraint: string
        if (!is_null($component) && !is_string($component)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($component)), __LINE__);
        }
        $this->component = $component;
        return $this;
    }
    /**
     * Get legalform value
     * @return string|null
     */
    public function getLegalform()
    {
        return $this->legalform;
    }
    /**
     * Set legalform value
     * @param string $legalform
     * @return \PayPal\StructType\ServiceModifyOwner
     */
    public function setLegalform($legalform = null)
    {
        // validation for constraint: string
        if (!is_null($legalform) && !is_string($legalform)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalform)), __LINE__);
        }
        $this->legalform = $legalform;
        return $this;
    }
    /**
     * Get organisation value
     * @return string|null
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
    /**
     * Set organisation value
     * @param string $organisation
     * @return \PayPal\StructType\ServiceModifyOwner
     */
    public function setOrganisation($organisation = null)
    {
        // validation for constraint: string
        if (!is_null($organisation) && !is_string($organisation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($organisation)), __LINE__);
        }
        $this->organisation = $organisation;
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
     * @return \PayPal\StructType\ServiceModifyOwner
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
     * @return \PayPal\StructType\ServiceModifyOwner
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
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \PayPal\StructType\ServiceModifyOwner
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
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
     * @return \PayPal\StructType\ServiceModifyOwner
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
     * @return \PayPal\StructType\ServiceModifyOwner
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
     * Get area value
     * @return string|null
     */
    public function getArea()
    {
        return $this->area;
    }
    /**
     * Set area value
     * @param string $area
     * @return \PayPal\StructType\ServiceModifyOwner
     */
    public function setArea($area = null)
    {
        // validation for constraint: string
        if (!is_null($area) && !is_string($area)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($area)), __LINE__);
        }
        $this->area = $area;
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
     * @return \PayPal\StructType\ServiceModifyOwner
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
     * Get phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \PayPal\StructType\ServiceModifyOwner
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \PayPal\StructType\ServiceModifyOwner
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
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
     * @return \PayPal\StructType\ServiceModifyOwner
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
     * Get identityConfirmation value
     * @return bool|null
     */
    public function getIdentityConfirmation()
    {
        return $this->identityConfirmation;
    }
    /**
     * Set identityConfirmation value
     * @param bool $identityConfirmation
     * @return \PayPal\StructType\ServiceModifyOwner
     */
    public function setIdentityConfirmation($identityConfirmation = null)
    {
        // validation for constraint: boolean
        if (!is_null($identityConfirmation) && !is_bool($identityConfirmation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($identityConfirmation)), __LINE__);
        }
        $this->identityConfirmation = $identityConfirmation;
        return $this;
    }
    /**
     * Get acceptanceConfirmation value
     * @return bool|null
     */
    public function getAcceptanceConfirmation()
    {
        return $this->acceptanceConfirmation;
    }
    /**
     * Set acceptanceConfirmation value
     * @param bool $acceptanceConfirmation
     * @return \PayPal\StructType\ServiceModifyOwner
     */
    public function setAcceptanceConfirmation($acceptanceConfirmation = null)
    {
        // validation for constraint: boolean
        if (!is_null($acceptanceConfirmation) && !is_bool($acceptanceConfirmation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($acceptanceConfirmation)), __LINE__);
        }
        $this->acceptanceConfirmation = $acceptanceConfirmation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ServiceModifyOwner
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
