<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyOfferInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyOfferInfoReturn extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The offer
     * @var string
     */
    public $offer;
    /**
     * The countryCode
     * @var string
     */
    public $countryCode;
    /**
     * The nextBillingDate
     * @var string
     */
    public $nextBillingDate;
    /**
     * The simultaneousLines
     * @var int
     */
    public $simultaneousLines;
    /**
     * The hardware
     * @var \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public $hardware;
    /**
     * The sipAccount
     * @var \PayPal\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public $sipAccount;
    /**
     * Constructor method for telephonyOfferInfoReturn
     * @uses TelephonyOfferInfoReturn::setNumber()
     * @uses TelephonyOfferInfoReturn::setDescription()
     * @uses TelephonyOfferInfoReturn::setOffer()
     * @uses TelephonyOfferInfoReturn::setCountryCode()
     * @uses TelephonyOfferInfoReturn::setNextBillingDate()
     * @uses TelephonyOfferInfoReturn::setSimultaneousLines()
     * @uses TelephonyOfferInfoReturn::setHardware()
     * @uses TelephonyOfferInfoReturn::setSipAccount()
     * @param string $number
     * @param string $description
     * @param string $offer
     * @param string $countryCode
     * @param string $nextBillingDate
     * @param int $simultaneousLines
     * @param \PayPal\StructType\TelephonyOfferInfoHardwareStruct $hardware
     * @param \PayPal\StructType\TelephonyOfferInfoSipAccountStruct $sipAccount
     */
    public function __construct($number = null, $description = null, $offer = null, $countryCode = null, $nextBillingDate = null, $simultaneousLines = null, \PayPal\StructType\TelephonyOfferInfoHardwareStruct $hardware = null, \PayPal\StructType\TelephonyOfferInfoSipAccountStruct $sipAccount = null)
    {
        $this
            ->setNumber($number)
            ->setDescription($description)
            ->setOffer($offer)
            ->setCountryCode($countryCode)
            ->setNextBillingDate($nextBillingDate)
            ->setSimultaneousLines($simultaneousLines)
            ->setHardware($hardware)
            ->setSipAccount($sipAccount);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \PayPal\StructType\TelephonyOfferInfoReturn
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \PayPal\StructType\TelephonyOfferInfoReturn
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
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
     * @return \PayPal\StructType\TelephonyOfferInfoReturn
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
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \PayPal\StructType\TelephonyOfferInfoReturn
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get nextBillingDate value
     * @return string|null
     */
    public function getNextBillingDate()
    {
        return $this->nextBillingDate;
    }
    /**
     * Set nextBillingDate value
     * @param string $nextBillingDate
     * @return \PayPal\StructType\TelephonyOfferInfoReturn
     */
    public function setNextBillingDate($nextBillingDate = null)
    {
        // validation for constraint: string
        if (!is_null($nextBillingDate) && !is_string($nextBillingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nextBillingDate)), __LINE__);
        }
        $this->nextBillingDate = $nextBillingDate;
        return $this;
    }
    /**
     * Get simultaneousLines value
     * @return int|null
     */
    public function getSimultaneousLines()
    {
        return $this->simultaneousLines;
    }
    /**
     * Set simultaneousLines value
     * @param int $simultaneousLines
     * @return \PayPal\StructType\TelephonyOfferInfoReturn
     */
    public function setSimultaneousLines($simultaneousLines = null)
    {
        // validation for constraint: int
        if (!is_null($simultaneousLines) && !is_numeric($simultaneousLines)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($simultaneousLines)), __LINE__);
        }
        $this->simultaneousLines = $simultaneousLines;
        return $this;
    }
    /**
     * Get hardware value
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct|null
     */
    public function getHardware()
    {
        return $this->hardware;
    }
    /**
     * Set hardware value
     * @param \PayPal\StructType\TelephonyOfferInfoHardwareStruct $hardware
     * @return \PayPal\StructType\TelephonyOfferInfoReturn
     */
    public function setHardware(\PayPal\StructType\TelephonyOfferInfoHardwareStruct $hardware = null)
    {
        $this->hardware = $hardware;
        return $this;
    }
    /**
     * Get sipAccount value
     * @return \PayPal\StructType\TelephonyOfferInfoSipAccountStruct|null
     */
    public function getSipAccount()
    {
        return $this->sipAccount;
    }
    /**
     * Set sipAccount value
     * @param \PayPal\StructType\TelephonyOfferInfoSipAccountStruct $sipAccount
     * @return \PayPal\StructType\TelephonyOfferInfoReturn
     */
    public function setSipAccount(\PayPal\StructType\TelephonyOfferInfoSipAccountStruct $sipAccount = null)
    {
        $this->sipAccount = $sipAccount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyOfferInfoReturn
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
