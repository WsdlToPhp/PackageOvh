<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nicCreateIT StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NicCreateIT extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
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
     * The sex
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sex;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
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
     * The area
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $area;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * The isOwner
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $isOwner;
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
     * The vat
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vat;
    /**
     * The birthDay
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthDay;
    /**
     * The birthCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthCity;
    /**
     * The nationalIdentificationNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nationalIdentificationNumber;
    /**
     * The companyNationalIdentificationNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $companyNationalIdentificationNumber;
    /**
     * The corporationType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $corporationType;
    /**
     * Constructor method for nicCreateIT
     * @uses NicCreateIT::setSession()
     * @uses NicCreateIT::setName()
     * @uses NicCreateIT::setFirstname()
     * @uses NicCreateIT::setSex()
     * @uses NicCreateIT::setPassword()
     * @uses NicCreateIT::setEmail()
     * @uses NicCreateIT::setPhone()
     * @uses NicCreateIT::setFax()
     * @uses NicCreateIT::setAddress()
     * @uses NicCreateIT::setCity()
     * @uses NicCreateIT::setArea()
     * @uses NicCreateIT::setZip()
     * @uses NicCreateIT::setCountry()
     * @uses NicCreateIT::setLanguage()
     * @uses NicCreateIT::setIsOwner()
     * @uses NicCreateIT::setLegalform()
     * @uses NicCreateIT::setOrganisation()
     * @uses NicCreateIT::setLegalName()
     * @uses NicCreateIT::setLegalNumber()
     * @uses NicCreateIT::setVat()
     * @uses NicCreateIT::setBirthDay()
     * @uses NicCreateIT::setBirthCity()
     * @uses NicCreateIT::setNationalIdentificationNumber()
     * @uses NicCreateIT::setCompanyNationalIdentificationNumber()
     * @uses NicCreateIT::setCorporationType()
     * @param string $session
     * @param string $name
     * @param string $firstname
     * @param string $sex
     * @param string $password
     * @param string $email
     * @param string $phone
     * @param string $fax
     * @param string $address
     * @param string $city
     * @param string $area
     * @param string $zip
     * @param string $country
     * @param string $language
     * @param bool $isOwner
     * @param string $legalform
     * @param string $organisation
     * @param string $legalName
     * @param string $legalNumber
     * @param string $vat
     * @param string $birthDay
     * @param string $birthCity
     * @param string $nationalIdentificationNumber
     * @param string $companyNationalIdentificationNumber
     * @param string $corporationType
     */
    public function __construct($session = null, $name = null, $firstname = null, $sex = null, $password = null, $email = null, $phone = null, $fax = null, $address = null, $city = null, $area = null, $zip = null, $country = null, $language = null, $isOwner = null, $legalform = null, $organisation = null, $legalName = null, $legalNumber = null, $vat = null, $birthDay = null, $birthCity = null, $nationalIdentificationNumber = null, $companyNationalIdentificationNumber = null, $corporationType = null)
    {
        $this
            ->setSession($session)
            ->setName($name)
            ->setFirstname($firstname)
            ->setSex($sex)
            ->setPassword($password)
            ->setEmail($email)
            ->setPhone($phone)
            ->setFax($fax)
            ->setAddress($address)
            ->setCity($city)
            ->setArea($area)
            ->setZip($zip)
            ->setCountry($country)
            ->setLanguage($language)
            ->setIsOwner($isOwner)
            ->setLegalform($legalform)
            ->setOrganisation($organisation)
            ->setLegalName($legalName)
            ->setLegalNumber($legalNumber)
            ->setVat($vat)
            ->setBirthDay($birthDay)
            ->setBirthCity($birthCity)
            ->setNationalIdentificationNumber($nationalIdentificationNumber)
            ->setCompanyNationalIdentificationNumber($companyNationalIdentificationNumber)
            ->setCorporationType($corporationType);
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * Get sex value
     * @return string|null
     */
    public function getSex()
    {
        return $this->sex;
    }
    /**
     * Set sex value
     * @param string $sex
     * @return \PayPal\StructType\NicCreateIT
     */
    public function setSex($sex = null)
    {
        // validation for constraint: string
        if (!is_null($sex) && !is_string($sex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sex)), __LINE__);
        }
        $this->sex = $sex;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \PayPal\StructType\NicCreateIT
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * @return \PayPal\StructType\NicCreateIT
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
     * Get birthDay value
     * @return string|null
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }
    /**
     * Set birthDay value
     * @param string $birthDay
     * @return \PayPal\StructType\NicCreateIT
     */
    public function setBirthDay($birthDay = null)
    {
        // validation for constraint: string
        if (!is_null($birthDay) && !is_string($birthDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDay)), __LINE__);
        }
        $this->birthDay = $birthDay;
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
     * @return \PayPal\StructType\NicCreateIT
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
     * Get nationalIdentificationNumber value
     * @return string|null
     */
    public function getNationalIdentificationNumber()
    {
        return $this->nationalIdentificationNumber;
    }
    /**
     * Set nationalIdentificationNumber value
     * @param string $nationalIdentificationNumber
     * @return \PayPal\StructType\NicCreateIT
     */
    public function setNationalIdentificationNumber($nationalIdentificationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($nationalIdentificationNumber) && !is_string($nationalIdentificationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nationalIdentificationNumber)), __LINE__);
        }
        $this->nationalIdentificationNumber = $nationalIdentificationNumber;
        return $this;
    }
    /**
     * Get companyNationalIdentificationNumber value
     * @return string|null
     */
    public function getCompanyNationalIdentificationNumber()
    {
        return $this->companyNationalIdentificationNumber;
    }
    /**
     * Set companyNationalIdentificationNumber value
     * @param string $companyNationalIdentificationNumber
     * @return \PayPal\StructType\NicCreateIT
     */
    public function setCompanyNationalIdentificationNumber($companyNationalIdentificationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($companyNationalIdentificationNumber) && !is_string($companyNationalIdentificationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyNationalIdentificationNumber)), __LINE__);
        }
        $this->companyNationalIdentificationNumber = $companyNationalIdentificationNumber;
        return $this;
    }
    /**
     * Get corporationType value
     * @return string|null
     */
    public function getCorporationType()
    {
        return $this->corporationType;
    }
    /**
     * Set corporationType value
     * @param string $corporationType
     * @return \PayPal\StructType\NicCreateIT
     */
    public function setCorporationType($corporationType = null)
    {
        // validation for constraint: string
        if (!is_null($corporationType) && !is_string($corporationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporationType)), __LINE__);
        }
        $this->corporationType = $corporationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\NicCreateIT
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
