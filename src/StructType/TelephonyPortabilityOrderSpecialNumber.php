<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPortabilityOrderSpecialNumber StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPortabilityOrderSpecialNumber extends AbstractStructBase
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
     * The offer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $offer;
    /**
     * The desireDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $desireDate;
    /**
     * The callNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callNumber;
    /**
     * The extraNumbers
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $extraNumbers;
    /**
     * The legalForm
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalForm;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $firstName;
    /**
     * The siret
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $siret;
    /**
     * The streetNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetNumber;
    /**
     * The streetNumberExtra
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetNumberExtra;
    /**
     * The streetType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetType;
    /**
     * The streetName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetName;
    /**
     * The building
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $building;
    /**
     * The stair
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $stair;
    /**
     * The floor
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $floor;
    /**
     * The door
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $door;
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
     * The displayUniversalDirectory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayUniversalDirectory;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $category;
    /**
     * The contactName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contactName;
    /**
     * The contactNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contactNumber;
    /**
     * Constructor method for telephonyPortabilityOrderSpecialNumber
     * @uses TelephonyPortabilityOrderSpecialNumber::setSession()
     * @uses TelephonyPortabilityOrderSpecialNumber::setBillingAccount()
     * @uses TelephonyPortabilityOrderSpecialNumber::setOffer()
     * @uses TelephonyPortabilityOrderSpecialNumber::setDesireDate()
     * @uses TelephonyPortabilityOrderSpecialNumber::setCallNumber()
     * @uses TelephonyPortabilityOrderSpecialNumber::setExtraNumbers()
     * @uses TelephonyPortabilityOrderSpecialNumber::setLegalForm()
     * @uses TelephonyPortabilityOrderSpecialNumber::setName()
     * @uses TelephonyPortabilityOrderSpecialNumber::setFirstName()
     * @uses TelephonyPortabilityOrderSpecialNumber::setSiret()
     * @uses TelephonyPortabilityOrderSpecialNumber::setStreetNumber()
     * @uses TelephonyPortabilityOrderSpecialNumber::setStreetNumberExtra()
     * @uses TelephonyPortabilityOrderSpecialNumber::setStreetType()
     * @uses TelephonyPortabilityOrderSpecialNumber::setStreetName()
     * @uses TelephonyPortabilityOrderSpecialNumber::setBuilding()
     * @uses TelephonyPortabilityOrderSpecialNumber::setStair()
     * @uses TelephonyPortabilityOrderSpecialNumber::setFloor()
     * @uses TelephonyPortabilityOrderSpecialNumber::setDoor()
     * @uses TelephonyPortabilityOrderSpecialNumber::setZip()
     * @uses TelephonyPortabilityOrderSpecialNumber::setCity()
     * @uses TelephonyPortabilityOrderSpecialNumber::setCountry()
     * @uses TelephonyPortabilityOrderSpecialNumber::setDisplayUniversalDirectory()
     * @uses TelephonyPortabilityOrderSpecialNumber::setCategory()
     * @uses TelephonyPortabilityOrderSpecialNumber::setContactName()
     * @uses TelephonyPortabilityOrderSpecialNumber::setContactNumber()
     * @param string $session
     * @param string $billingAccount
     * @param string $offer
     * @param string $desireDate
     * @param string $callNumber
     * @param \Ovh\ArrayType\MyArrayOfStringType $extraNumbers
     * @param string $legalForm
     * @param string $name
     * @param string $firstName
     * @param string $siret
     * @param string $streetNumber
     * @param string $streetNumberExtra
     * @param string $streetType
     * @param string $streetName
     * @param string $building
     * @param string $stair
     * @param string $floor
     * @param string $door
     * @param string $zip
     * @param string $city
     * @param string $country
     * @param string $displayUniversalDirectory
     * @param string $category
     * @param string $contactName
     * @param string $contactNumber
     */
    public function __construct($session = null, $billingAccount = null, $offer = null, $desireDate = null, $callNumber = null, \Ovh\ArrayType\MyArrayOfStringType $extraNumbers = null, $legalForm = null, $name = null, $firstName = null, $siret = null, $streetNumber = null, $streetNumberExtra = null, $streetType = null, $streetName = null, $building = null, $stair = null, $floor = null, $door = null, $zip = null, $city = null, $country = null, $displayUniversalDirectory = null, $category = null, $contactName = null, $contactNumber = null)
    {
        $this
            ->setSession($session)
            ->setBillingAccount($billingAccount)
            ->setOffer($offer)
            ->setDesireDate($desireDate)
            ->setCallNumber($callNumber)
            ->setExtraNumbers($extraNumbers)
            ->setLegalForm($legalForm)
            ->setName($name)
            ->setFirstName($firstName)
            ->setSiret($siret)
            ->setStreetNumber($streetNumber)
            ->setStreetNumberExtra($streetNumberExtra)
            ->setStreetType($streetType)
            ->setStreetName($streetName)
            ->setBuilding($building)
            ->setStair($stair)
            ->setFloor($floor)
            ->setDoor($door)
            ->setZip($zip)
            ->setCity($city)
            ->setCountry($country)
            ->setDisplayUniversalDirectory($displayUniversalDirectory)
            ->setCategory($category)
            ->setContactName($contactName)
            ->setContactNumber($contactNumber);
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setOffer($offer = null)
    {
        // validation for constraint: string
        if (!is_null($offer) && !is_string($offer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offer, true), gettype($offer)), __LINE__);
        }
        $this->offer = $offer;
        return $this;
    }
    /**
     * Get desireDate value
     * @return string|null
     */
    public function getDesireDate()
    {
        return $this->desireDate;
    }
    /**
     * Set desireDate value
     * @param string $desireDate
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setDesireDate($desireDate = null)
    {
        // validation for constraint: string
        if (!is_null($desireDate) && !is_string($desireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desireDate, true), gettype($desireDate)), __LINE__);
        }
        $this->desireDate = $desireDate;
        return $this;
    }
    /**
     * Get callNumber value
     * @return string|null
     */
    public function getCallNumber()
    {
        return $this->callNumber;
    }
    /**
     * Set callNumber value
     * @param string $callNumber
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setCallNumber($callNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callNumber) && !is_string($callNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callNumber, true), gettype($callNumber)), __LINE__);
        }
        $this->callNumber = $callNumber;
        return $this;
    }
    /**
     * Get extraNumbers value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getExtraNumbers()
    {
        return $this->extraNumbers;
    }
    /**
     * Set extraNumbers value
     * @param \Ovh\ArrayType\MyArrayOfStringType $extraNumbers
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setExtraNumbers(\Ovh\ArrayType\MyArrayOfStringType $extraNumbers = null)
    {
        $this->extraNumbers = $extraNumbers;
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * Get streetNumberExtra value
     * @return string|null
     */
    public function getStreetNumberExtra()
    {
        return $this->streetNumberExtra;
    }
    /**
     * Set streetNumberExtra value
     * @param string $streetNumberExtra
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setStreetNumberExtra($streetNumberExtra = null)
    {
        // validation for constraint: string
        if (!is_null($streetNumberExtra) && !is_string($streetNumberExtra)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNumberExtra, true), gettype($streetNumberExtra)), __LINE__);
        }
        $this->streetNumberExtra = $streetNumberExtra;
        return $this;
    }
    /**
     * Get streetType value
     * @return string|null
     */
    public function getStreetType()
    {
        return $this->streetType;
    }
    /**
     * Set streetType value
     * @param string $streetType
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setStreetType($streetType = null)
    {
        // validation for constraint: string
        if (!is_null($streetType) && !is_string($streetType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetType, true), gettype($streetType)), __LINE__);
        }
        $this->streetType = $streetType;
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * Get building value
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param string $building
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setBuilding($building = null)
    {
        // validation for constraint: string
        if (!is_null($building) && !is_string($building)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($building, true), gettype($building)), __LINE__);
        }
        $this->building = $building;
        return $this;
    }
    /**
     * Get stair value
     * @return string|null
     */
    public function getStair()
    {
        return $this->stair;
    }
    /**
     * Set stair value
     * @param string $stair
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setStair($stair = null)
    {
        // validation for constraint: string
        if (!is_null($stair) && !is_string($stair)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stair, true), gettype($stair)), __LINE__);
        }
        $this->stair = $stair;
        return $this;
    }
    /**
     * Get floor value
     * @return string|null
     */
    public function getFloor()
    {
        return $this->floor;
    }
    /**
     * Set floor value
     * @param string $floor
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setFloor($floor = null)
    {
        // validation for constraint: string
        if (!is_null($floor) && !is_string($floor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floor, true), gettype($floor)), __LINE__);
        }
        $this->floor = $floor;
        return $this;
    }
    /**
     * Get door value
     * @return string|null
     */
    public function getDoor()
    {
        return $this->door;
    }
    /**
     * Set door value
     * @param string $door
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setDoor($door = null)
    {
        // validation for constraint: string
        if (!is_null($door) && !is_string($door)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($door, true), gettype($door)), __LINE__);
        }
        $this->door = $door;
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get contactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->contactName;
    }
    /**
     * Set contactName value
     * @param string $contactName
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setContactName($contactName = null)
    {
        // validation for constraint: string
        if (!is_null($contactName) && !is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactName, true), gettype($contactName)), __LINE__);
        }
        $this->contactName = $contactName;
        return $this;
    }
    /**
     * Get contactNumber value
     * @return string|null
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }
    /**
     * Set contactNumber value
     * @param string $contactNumber
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber
     */
    public function setContactNumber($contactNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contactNumber) && !is_string($contactNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactNumber, true), gettype($contactNumber)), __LINE__);
        }
        $this->contactNumber = $contactNumber;
        return $this;
    }
}
