<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nicInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NicInfoReturn extends AbstractStructBase
{
    /**
     * The nic
     * @var string
     */
    public $nic;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The firstname
     * @var string
     */
    public $firstname;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The spareEmail
     * @var string
     */
    public $spareEmail;
    /**
     * The phone
     * @var string
     */
    public $phone;
    /**
     * The fax
     * @var string
     */
    public $fax;
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The area
     * @var string
     */
    public $area;
    /**
     * The zip
     * @var string
     */
    public $zip;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * The legalform
     * @var string
     */
    public $legalform;
    /**
     * The organisation
     * @var string
     */
    public $organisation;
    /**
     * The legalName
     * @var string
     */
    public $legalName;
    /**
     * The legalNumber
     * @var string
     */
    public $legalNumber;
    /**
     * The vat
     * @var string
     */
    public $vat;
    /**
     * The isOwner
     * @var bool
     */
    public $isOwner;
    /**
     * The billingCountry
     * @var string
     */
    public $billingCountry;
    /**
     * Constructor method for nicInfoReturn
     * @uses NicInfoReturn::setNic()
     * @uses NicInfoReturn::setName()
     * @uses NicInfoReturn::setFirstname()
     * @uses NicInfoReturn::setEmail()
     * @uses NicInfoReturn::setSpareEmail()
     * @uses NicInfoReturn::setPhone()
     * @uses NicInfoReturn::setFax()
     * @uses NicInfoReturn::setAddress()
     * @uses NicInfoReturn::setCity()
     * @uses NicInfoReturn::setArea()
     * @uses NicInfoReturn::setZip()
     * @uses NicInfoReturn::setCountry()
     * @uses NicInfoReturn::setLanguage()
     * @uses NicInfoReturn::setLegalform()
     * @uses NicInfoReturn::setOrganisation()
     * @uses NicInfoReturn::setLegalName()
     * @uses NicInfoReturn::setLegalNumber()
     * @uses NicInfoReturn::setVat()
     * @uses NicInfoReturn::setIsOwner()
     * @uses NicInfoReturn::setBillingCountry()
     * @param string $nic
     * @param string $name
     * @param string $firstname
     * @param string $email
     * @param string $spareEmail
     * @param string $phone
     * @param string $fax
     * @param string $address
     * @param string $city
     * @param string $area
     * @param string $zip
     * @param string $country
     * @param string $language
     * @param string $legalform
     * @param string $organisation
     * @param string $legalName
     * @param string $legalNumber
     * @param string $vat
     * @param bool $isOwner
     * @param string $billingCountry
     */
    public function __construct($nic = null, $name = null, $firstname = null, $email = null, $spareEmail = null, $phone = null, $fax = null, $address = null, $city = null, $area = null, $zip = null, $country = null, $language = null, $legalform = null, $organisation = null, $legalName = null, $legalNumber = null, $vat = null, $isOwner = null, $billingCountry = null)
    {
        $this
            ->setNic($nic)
            ->setName($name)
            ->setFirstname($firstname)
            ->setEmail($email)
            ->setSpareEmail($spareEmail)
            ->setPhone($phone)
            ->setFax($fax)
            ->setAddress($address)
            ->setCity($city)
            ->setArea($area)
            ->setZip($zip)
            ->setCountry($country)
            ->setLanguage($language)
            ->setLegalform($legalform)
            ->setOrganisation($organisation)
            ->setLegalName($legalName)
            ->setLegalNumber($legalNumber)
            ->setVat($vat)
            ->setIsOwner($isOwner)
            ->setBillingCountry($billingCountry);
    }
    /**
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \Ovh\StructType\NicInfoReturn
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * Get spareEmail value
     * @return string|null
     */
    public function getSpareEmail()
    {
        return $this->spareEmail;
    }
    /**
     * Set spareEmail value
     * @param string $spareEmail
     * @return \Ovh\StructType\NicInfoReturn
     */
    public function setSpareEmail($spareEmail = null)
    {
        // validation for constraint: string
        if (!is_null($spareEmail) && !is_string($spareEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($spareEmail)), __LINE__);
        }
        $this->spareEmail = $spareEmail;
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Ovh\StructType\NicInfoReturn
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * @return \Ovh\StructType\NicInfoReturn
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
     * Get isOwner value
     * @return bool|null
     */
    public function getIsOwner()
    {
        return $this->isOwner;
    }
    /**
     * Set isOwner value
     * @param bool $isOwner
     * @return \Ovh\StructType\NicInfoReturn
     */
    public function setIsOwner($isOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOwner) && !is_bool($isOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOwner)), __LINE__);
        }
        $this->isOwner = $isOwner;
        return $this;
    }
    /**
     * Get billingCountry value
     * @return string|null
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }
    /**
     * Set billingCountry value
     * @param string $billingCountry
     * @return \Ovh\StructType\NicInfoReturn
     */
    public function setBillingCountry($billingCountry = null)
    {
        // validation for constraint: string
        if (!is_null($billingCountry) && !is_string($billingCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingCountry)), __LINE__);
        }
        $this->billingCountry = $billingCountry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\NicInfoReturn
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
