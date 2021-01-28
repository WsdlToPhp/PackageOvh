<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSwitchPossibilityPriceStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSwitchPossibilityPriceStruct extends AbstractStructBase
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
     * Constructor method for telephonyLineSwitchPossibilityPriceStruct
     * @uses TelephonyLineSwitchPossibilityPriceStruct::setOffer()
     * @uses TelephonyLineSwitchPossibilityPriceStruct::setPrice()
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
     * @return \Ovh\StructType\TelephonyLineSwitchPossibilityPriceStruct
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
     * @return \Ovh\StructType\TelephonyLineSwitchPossibilityPriceStruct
     */
    public function setPrice($price = null)
    {
        // validation for constraint: string
        if (!is_null($price) && !is_string($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        return $this;
    }
}
