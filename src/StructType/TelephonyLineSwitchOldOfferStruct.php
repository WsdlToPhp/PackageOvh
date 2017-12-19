<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSwitchOldOfferStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSwitchOldOfferStruct extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The offers
     * @var \PayPal\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType
     */
    public $offers;
    /**
     * Constructor method for telephonyLineSwitchOldOfferStruct
     * @uses TelephonyLineSwitchOldOfferStruct::setNumber()
     * @uses TelephonyLineSwitchOldOfferStruct::setOffers()
     * @param string $number
     * @param \PayPal\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $offers
     */
    public function __construct($number = null, \PayPal\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $offers = null)
    {
        $this
            ->setNumber($number)
            ->setOffers($offers);
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
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferStruct
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
     * Get offers value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * Set offers value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $offers
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferStruct
     */
    public function setOffers(\PayPal\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $offers = null)
    {
        $this->offers = $offers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferStruct
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