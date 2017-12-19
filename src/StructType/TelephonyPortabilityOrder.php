<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPortabilityOrder StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPortabilityOrder extends AbstractStructBase
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
     * The offer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $offer;
    /**
     * The desireDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $desireDate;
    /**
     * The callNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callNumber;
    /**
     * The extraNumbers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $extraNumbers;
    /**
     * The legalForm
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalForm;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The firstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $firstName;
    /**
     * The siret
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $siret;
    /**
     * The streetNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetNumber;
    /**
     * The streetNumberExtra
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetNumberExtra;
    /**
     * The streetType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetType;
    /**
     * The streetName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetName;
    /**
     * The building
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $building;
    /**
     * The stair
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $stair;
    /**
     * The floor
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $floor;
    /**
     * The door
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $door;
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
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The displayUniversalDirectory
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayUniversalDirectory;
    /**
     * The contactName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contactName;
    /**
     * The contactNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contactNumber;
    /**
     * Constructor method for telephonyPortabilityOrder
     * @uses TelephonyPortabilityOrder::setSession()
     * @uses TelephonyPortabilityOrder::setBillingAccount()
     * @uses TelephonyPortabilityOrder::setOffer()
     * @uses TelephonyPortabilityOrder::setDesireDate()
     * @uses TelephonyPortabilityOrder::setCallNumber()
     * @uses TelephonyPortabilityOrder::setExtraNumbers()
     * @uses TelephonyPortabilityOrder::setLegalForm()
     * @uses TelephonyPortabilityOrder::setName()
     * @uses TelephonyPortabilityOrder::setFirstName()
     * @uses TelephonyPortabilityOrder::setSiret()
     * @uses TelephonyPortabilityOrder::setStreetNumber()
     * @uses TelephonyPortabilityOrder::setStreetNumberExtra()
     * @uses TelephonyPortabilityOrder::setStreetType()
     * @uses TelephonyPortabilityOrder::setStreetName()
     * @uses TelephonyPortabilityOrder::setBuilding()
     * @uses TelephonyPortabilityOrder::setStair()
     * @uses TelephonyPortabilityOrder::setFloor()
     * @uses TelephonyPortabilityOrder::setDoor()
     * @uses TelephonyPortabilityOrder::setZip()
     * @uses TelephonyPortabilityOrder::setCity()
     * @uses TelephonyPortabilityOrder::setCountry()
     * @uses TelephonyPortabilityOrder::setDisplayUniversalDirectory()
     * @uses TelephonyPortabilityOrder::setContactName()
     * @uses TelephonyPortabilityOrder::setContactNumber()
     * @param string $session
     * @param string $billingAccount
     * @param string $offer
     * @param string $desireDate
     * @param string $callNumber
     * @param \PayPal\ArrayType\MyArrayOfStringType $extraNumbers
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
     * @param string $contactName
     * @param string $contactNumber
     */
    public function __construct($session = null, $billingAccount = null, $offer = null, $desireDate = null, $callNumber = null, \PayPal\ArrayType\MyArrayOfStringType $extraNumbers = null, $legalForm = null, $name = null, $firstName = null, $siret = null, $streetNumber = null, $streetNumberExtra = null, $streetType = null, $streetName = null, $building = null, $stair = null, $floor = null, $door = null, $zip = null, $city = null, $country = null, $displayUniversalDirectory = null, $contactName = null, $contactNumber = null)
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setDesireDate($desireDate = null)
    {
        // validation for constraint: string
        if (!is_null($desireDate) && !is_string($desireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($desireDate)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setCallNumber($callNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callNumber) && !is_string($callNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callNumber)), __LINE__);
        }
        $this->callNumber = $callNumber;
        return $this;
    }
    /**
     * Get extraNumbers value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getExtraNumbers()
    {
        return $this->extraNumbers;
    }
    /**
     * Set extraNumbers value
     * @param \PayPal\ArrayType\MyArrayOfStringType $extraNumbers
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setExtraNumbers(\PayPal\ArrayType\MyArrayOfStringType $extraNumbers = null)
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setStreetNumberExtra($streetNumberExtra = null)
    {
        // validation for constraint: string
        if (!is_null($streetNumberExtra) && !is_string($streetNumberExtra)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetNumberExtra)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setStreetType($streetType = null)
    {
        // validation for constraint: string
        if (!is_null($streetType) && !is_string($streetType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetType)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setBuilding($building = null)
    {
        // validation for constraint: string
        if (!is_null($building) && !is_string($building)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($building)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setStair($stair = null)
    {
        // validation for constraint: string
        if (!is_null($stair) && !is_string($stair)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stair)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setFloor($floor = null)
    {
        // validation for constraint: string
        if (!is_null($floor) && !is_string($floor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($floor)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setDoor($door = null)
    {
        // validation for constraint: string
        if (!is_null($door) && !is_string($door)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($door)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setContactName($contactName = null)
    {
        // validation for constraint: string
        if (!is_null($contactName) && !is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactName)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyPortabilityOrder
     */
    public function setContactNumber($contactNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contactNumber) && !is_string($contactNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactNumber)), __LINE__);
        }
        $this->contactNumber = $contactNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyPortabilityOrder
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
