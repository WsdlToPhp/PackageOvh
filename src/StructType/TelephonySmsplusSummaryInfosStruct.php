<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusSummaryInfosStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusSummaryInfosStruct extends AbstractStructBase
{
    /**
     * The quantity
     * @var string
     */
    public $quantity;
    /**
     * The priceReversed
     * @var float
     */
    public $priceReversed;
    /**
     * The price
     * @var float
     */
    public $price;
    /**
     * Constructor method for telephonySmsplusSummaryInfosStruct
     * @uses TelephonySmsplusSummaryInfosStruct::setQuantity()
     * @uses TelephonySmsplusSummaryInfosStruct::setPriceReversed()
     * @uses TelephonySmsplusSummaryInfosStruct::setPrice()
     * @param string $quantity
     * @param float $priceReversed
     * @param float $price
     */
    public function __construct($quantity = null, $priceReversed = null, $price = null)
    {
        $this
            ->setQuantity($quantity)
            ->setPriceReversed($priceReversed)
            ->setPrice($price);
    }
    /**
     * Get quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param string $quantity
     * @return \PayPal\StructType\TelephonySmsplusSummaryInfosStruct
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get priceReversed value
     * @return float|null
     */
    public function getPriceReversed()
    {
        return $this->priceReversed;
    }
    /**
     * Set priceReversed value
     * @param float $priceReversed
     * @return \PayPal\StructType\TelephonySmsplusSummaryInfosStruct
     */
    public function setPriceReversed($priceReversed = null)
    {
        $this->priceReversed = $priceReversed;
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \PayPal\StructType\TelephonySmsplusSummaryInfosStruct
     */
    public function setPrice($price = null)
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsplusSummaryInfosStruct
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
