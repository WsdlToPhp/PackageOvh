<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAliasToLinePossibilityPriceStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAliasToLinePossibilityPriceStruct extends AbstractStructBase
{
    /**
     * The offer
     * @var string
     */
    public $offer;
    /**
     * The price
     * @var string
     */
    public $price;
    /**
     * Constructor method for telephonyAliasToLinePossibilityPriceStruct
     * @uses TelephonyAliasToLinePossibilityPriceStruct::setOffer()
     * @uses TelephonyAliasToLinePossibilityPriceStruct::setPrice()
     * @param string $offer
     * @param string $price
     */
    public function __construct($offer = null, $price = null)
    {
        $this
            ->setOffer($offer)
            ->setPrice($price);
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
     * @return \PayPal\StructType\TelephonyAliasToLinePossibilityPriceStruct
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
     * Get price value
     * @return string|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param string $price
     * @return \PayPal\StructType\TelephonyAliasToLinePossibilityPriceStruct
     */
    public function setPrice($price = null)
    {
        // validation for constraint: string
        if (!is_null($price) && !is_string($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($price)), __LINE__);
        }
        $this->price = $price;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyAliasToLinePossibilityPriceStruct
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
