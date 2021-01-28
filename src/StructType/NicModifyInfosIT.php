<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nicModifyInfosIT StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NicModifyInfosIT extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
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
     * The sex
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sex;
    /**
     * The legalform
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalform;
    /**
     * The organisation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $organisation;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The area
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $area;
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
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * The fax
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fax;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The spareEmail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $spareEmail;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * The vat
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vat;
    /**
     * The birthDay
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthDay;
    /**
     * The birthCity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthCity;
    /**
     * The nationalIdentificationNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nationalIdentificationNumber;
    /**
     * The companyNationalIdentificationNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $companyNationalIdentificationNumber;
    /**
     * The corporationType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $corporationType;
    /**
     * Constructor method for nicModifyInfosIT
     * @uses NicModifyInfosIT::setSession()
     * @uses NicModifyInfosIT::setName()
     * @uses NicModifyInfosIT::setFirstname()
     * @uses NicModifyInfosIT::setSex()
     * @uses NicModifyInfosIT::setLegalform()
     * @uses NicModifyInfosIT::setOrganisation()
     * @uses NicModifyInfosIT::setAddress()
     * @uses NicModifyInfosIT::setArea()
     * @uses NicModifyInfosIT::setZip()
     * @uses NicModifyInfosIT::setCity()
     * @uses NicModifyInfosIT::setCountry()
     * @uses NicModifyInfosIT::setPhone()
     * @uses NicModifyInfosIT::setFax()
     * @uses NicModifyInfosIT::setEmail()
     * @uses NicModifyInfosIT::setSpareEmail()
     * @uses NicModifyInfosIT::setLanguage()
     * @uses NicModifyInfosIT::setVat()
     * @uses NicModifyInfosIT::setBirthDay()
     * @uses NicModifyInfosIT::setBirthCity()
     * @uses NicModifyInfosIT::setNationalIdentificationNumber()
     * @uses NicModifyInfosIT::setCompanyNationalIdentificationNumber()
     * @uses NicModifyInfosIT::setCorporationType()
     * @param string $session
     * @param string $name
     * @param string $firstname
     * @param string $sex
     * @param string $legalform
     * @param string $organisation
     * @param string $address
     * @param string $area
     * @param string $zip
     * @param string $city
     * @param string $country
     * @param string $phone
     * @param string $fax
     * @param string $email
     * @param string $spareEmail
     * @param string $language
     * @param string $vat
     * @param string $birthDay
     * @param string $birthCity
     * @param string $nationalIdentificationNumber
     * @param string $companyNationalIdentificationNumber
     * @param string $corporationType
     */
    public function __construct($session = null, $name = null, $firstname = null, $sex = null, $legalform = null, $organisation = null, $address = null, $area = null, $zip = null, $city = null, $country = null, $phone = null, $fax = null, $email = null, $spareEmail = null, $language = null, $vat = null, $birthDay = null, $birthCity = null, $nationalIdentificationNumber = null, $companyNationalIdentificationNumber = null, $corporationType = null)
    {
        $this
            ->setSession($session)
            ->setName($name)
            ->setFirstname($firstname)
            ->setSex($sex)
            ->setLegalform($legalform)
            ->setOrganisation($organisation)
            ->setAddress($address)
            ->setArea($area)
            ->setZip($zip)
            ->setCity($city)
            ->setCountry($country)
            ->setPhone($phone)
            ->setFax($fax)
            ->setEmail($email)
            ->setSpareEmail($spareEmail)
            ->setLanguage($language)
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
     * @return \Ovh\StructType\NicModifyInfosIT
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
     * @return \Ovh\StructType\NicModifyInfosIT
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
     * @return \Ovh\StructType\NicModifyInfosIT
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setSex($sex = null)
    {
        // validation for constraint: string
        if (!is_null($sex) && !is_string($sex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sex, true), gettype($sex)), __LINE__);
        }
        $this->sex = $sex;
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setLegalform($legalform = null)
    {
        // validation for constraint: string
        if (!is_null($legalform) && !is_string($legalform)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalform, true), gettype($legalform)), __LINE__);
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setOrganisation($organisation = null)
    {
        // validation for constraint: string
        if (!is_null($organisation) && !is_string($organisation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisation, true), gettype($organisation)), __LINE__);
        }
        $this->organisation = $organisation;
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setArea($area = null)
    {
        // validation for constraint: string
        if (!is_null($area) && !is_string($area)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area, true), gettype($area)), __LINE__);
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
     * @return \Ovh\StructType\NicModifyInfosIT
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
     * @return \Ovh\StructType\NicModifyInfosIT
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
     * @return \Ovh\StructType\NicModifyInfosIT
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
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
     * @return \Ovh\StructType\NicModifyInfosIT
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setSpareEmail($spareEmail = null)
    {
        // validation for constraint: string
        if (!is_null($spareEmail) && !is_string($spareEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spareEmail, true), gettype($spareEmail)), __LINE__);
        }
        $this->spareEmail = $spareEmail;
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setVat($vat = null)
    {
        // validation for constraint: string
        if (!is_null($vat) && !is_string($vat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vat, true), gettype($vat)), __LINE__);
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setBirthDay($birthDay = null)
    {
        // validation for constraint: string
        if (!is_null($birthDay) && !is_string($birthDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthDay, true), gettype($birthDay)), __LINE__);
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setBirthCity($birthCity = null)
    {
        // validation for constraint: string
        if (!is_null($birthCity) && !is_string($birthCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthCity, true), gettype($birthCity)), __LINE__);
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setNationalIdentificationNumber($nationalIdentificationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($nationalIdentificationNumber) && !is_string($nationalIdentificationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationalIdentificationNumber, true), gettype($nationalIdentificationNumber)), __LINE__);
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setCompanyNationalIdentificationNumber($companyNationalIdentificationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($companyNationalIdentificationNumber) && !is_string($companyNationalIdentificationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyNationalIdentificationNumber, true), gettype($companyNationalIdentificationNumber)), __LINE__);
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
     * @return \Ovh\StructType\NicModifyInfosIT
     */
    public function setCorporationType($corporationType = null)
    {
        // validation for constraint: string
        if (!is_null($corporationType) && !is_string($corporationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporationType, true), gettype($corporationType)), __LINE__);
        }
        $this->corporationType = $corporationType;
        return $this;
    }
}
