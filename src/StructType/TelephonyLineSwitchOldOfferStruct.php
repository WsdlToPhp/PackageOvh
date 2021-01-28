<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType
     */
    public $offers;
    /**
     * Constructor method for telephonyLineSwitchOldOfferStruct
     * @uses TelephonyLineSwitchOldOfferStruct::setNumber()
     * @uses TelephonyLineSwitchOldOfferStruct::setOffers()
     * @param string $number
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $offers
     */
    public function __construct($number = null, \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $offers = null)
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
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferStruct
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get offers value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * Set offers value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $offers
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferStruct
     */
    public function setOffers(\Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $offers = null)
    {
        $this->offers = $offers;
        return $this;
    }
}
