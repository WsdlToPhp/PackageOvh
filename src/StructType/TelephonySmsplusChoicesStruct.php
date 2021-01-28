<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusChoicesStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusChoicesStruct extends AbstractStructBase
{
    /**
     * The level
     * @var int
     */
    public $level;
    /**
     * The price
     * @var float
     */
    public $price;
    /**
     * The priceReversed
     * @var float
     */
    public $priceReversed;
    /**
     * The shortCodeCategory
     * @var int
     */
    public $shortCodeCategory;
    /**
     * The publicType
     * @var string
     */
    public $publicType;
    /**
     * The rates
     * @var string
     */
    public $rates;
    /**
     * The applicationTypes
     * @var \Ovh\ArrayType\MyArrayOfTelephonyApplicationTypeStructType
     */
    public $applicationTypes;
    /**
     * The shortCodes
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $shortCodes;
    /**
     * Constructor method for telephonySmsplusChoicesStruct
     * @uses TelephonySmsplusChoicesStruct::setLevel()
     * @uses TelephonySmsplusChoicesStruct::setPrice()
     * @uses TelephonySmsplusChoicesStruct::setPriceReversed()
     * @uses TelephonySmsplusChoicesStruct::setShortCodeCategory()
     * @uses TelephonySmsplusChoicesStruct::setPublicType()
     * @uses TelephonySmsplusChoicesStruct::setRates()
     * @uses TelephonySmsplusChoicesStruct::setApplicationTypes()
     * @uses TelephonySmsplusChoicesStruct::setShortCodes()
     * @param int $level
     * @param float $price
     * @param float $priceReversed
     * @param int $shortCodeCategory
     * @param string $publicType
     * @param string $rates
     * @param \Ovh\ArrayType\MyArrayOfTelephonyApplicationTypeStructType $applicationTypes
     * @param \Ovh\ArrayType\MyArrayOfStringType $shortCodes
     */
    public function __construct($level = null, $price = null, $priceReversed = null, $shortCodeCategory = null, $publicType = null, $rates = null, \Ovh\ArrayType\MyArrayOfTelephonyApplicationTypeStructType $applicationTypes = null, \Ovh\ArrayType\MyArrayOfStringType $shortCodes = null)
    {
        $this
            ->setLevel($level)
            ->setPrice($price)
            ->setPriceReversed($priceReversed)
            ->setShortCodeCategory($shortCodeCategory)
            ->setPublicType($publicType)
            ->setRates($rates)
            ->setApplicationTypes($applicationTypes)
            ->setShortCodes($shortCodes);
    }
    /**
     * Get level value
     * @return int|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param int $level
     * @return \Ovh\StructType\TelephonySmsplusChoicesStruct
     */
    public function setLevel($level = null)
    {
        // validation for constraint: int
        if (!is_null($level) && !(is_int($level) || ctype_digit($level))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->level = $level;
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
     * @return \Ovh\StructType\TelephonySmsplusChoicesStruct
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
     * @return \Ovh\StructType\TelephonySmsplusChoicesStruct
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
     * Get shortCodeCategory value
     * @return int|null
     */
    public function getShortCodeCategory()
    {
        return $this->shortCodeCategory;
    }
    /**
     * Set shortCodeCategory value
     * @param int $shortCodeCategory
     * @return \Ovh\StructType\TelephonySmsplusChoicesStruct
     */
    public function setShortCodeCategory($shortCodeCategory = null)
    {
        // validation for constraint: int
        if (!is_null($shortCodeCategory) && !(is_int($shortCodeCategory) || ctype_digit($shortCodeCategory))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shortCodeCategory, true), gettype($shortCodeCategory)), __LINE__);
        }
        $this->shortCodeCategory = $shortCodeCategory;
        return $this;
    }
    /**
     * Get publicType value
     * @return string|null
     */
    public function getPublicType()
    {
        return $this->publicType;
    }
    /**
     * Set publicType value
     * @param string $publicType
     * @return \Ovh\StructType\TelephonySmsplusChoicesStruct
     */
    public function setPublicType($publicType = null)
    {
        // validation for constraint: string
        if (!is_null($publicType) && !is_string($publicType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publicType, true), gettype($publicType)), __LINE__);
        }
        $this->publicType = $publicType;
        return $this;
    }
    /**
     * Get rates value
     * @return string|null
     */
    public function getRates()
    {
        return $this->rates;
    }
    /**
     * Set rates value
     * @param string $rates
     * @return \Ovh\StructType\TelephonySmsplusChoicesStruct
     */
    public function setRates($rates = null)
    {
        // validation for constraint: string
        if (!is_null($rates) && !is_string($rates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rates, true), gettype($rates)), __LINE__);
        }
        $this->rates = $rates;
        return $this;
    }
    /**
     * Get applicationTypes value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyApplicationTypeStructType|null
     */
    public function getApplicationTypes()
    {
        return $this->applicationTypes;
    }
    /**
     * Set applicationTypes value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyApplicationTypeStructType $applicationTypes
     * @return \Ovh\StructType\TelephonySmsplusChoicesStruct
     */
    public function setApplicationTypes(\Ovh\ArrayType\MyArrayOfTelephonyApplicationTypeStructType $applicationTypes = null)
    {
        $this->applicationTypes = $applicationTypes;
        return $this;
    }
    /**
     * Get shortCodes value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getShortCodes()
    {
        return $this->shortCodes;
    }
    /**
     * Set shortCodes value
     * @param \Ovh\ArrayType\MyArrayOfStringType $shortCodes
     * @return \Ovh\StructType\TelephonySmsplusChoicesStruct
     */
    public function setShortCodes(\Ovh\ArrayType\MyArrayOfStringType $shortCodes = null)
    {
        $this->shortCodes = $shortCodes;
        return $this;
    }
}
