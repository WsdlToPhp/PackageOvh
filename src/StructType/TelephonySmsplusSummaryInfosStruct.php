<?php

namespace Ovh\StructType;

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
     * @return \Ovh\StructType\TelephonySmsplusSummaryInfosStruct
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsplusSummaryInfosStruct
     */
    public function setPriceReversed($priceReversed = null)
    {
        // validation for constraint: float
        if (!is_null($priceReversed) && !(is_float($priceReversed) || is_numeric($priceReversed))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceReversed, true), gettype($priceReversed)), __LINE__);
        }
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
     * @return \Ovh\StructType\TelephonySmsplusSummaryInfosStruct
     */
    public function setPrice($price = null)
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        return $this;
    }
}
