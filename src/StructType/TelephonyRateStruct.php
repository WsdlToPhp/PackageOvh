<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyRateStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyRateStruct extends AbstractStructBase
{
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The countrySuffixe
     * @var string
     */
    public $countrySuffixe;
    /**
     * The price
     * @var float
     */
    public $price;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * Constructor method for telephonyRateStruct
     * @uses TelephonyRateStruct::setCountry()
     * @uses TelephonyRateStruct::setCountrySuffixe()
     * @uses TelephonyRateStruct::setPrice()
     * @uses TelephonyRateStruct::setType()
     * @param string $country
     * @param string $countrySuffixe
     * @param float $price
     * @param string $type
     */
    public function __construct($country = null, $countrySuffixe = null, $price = null, $type = null)
    {
        $this
            ->setCountry($country)
            ->setCountrySuffixe($countrySuffixe)
            ->setPrice($price)
            ->setType($type);
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
     * @return \Ovh\StructType\TelephonyRateStruct
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
     * Get countrySuffixe value
     * @return string|null
     */
    public function getCountrySuffixe()
    {
        return $this->countrySuffixe;
    }
    /**
     * Set countrySuffixe value
     * @param string $countrySuffixe
     * @return \Ovh\StructType\TelephonyRateStruct
     */
    public function setCountrySuffixe($countrySuffixe = null)
    {
        // validation for constraint: string
        if (!is_null($countrySuffixe) && !is_string($countrySuffixe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countrySuffixe, true), gettype($countrySuffixe)), __LINE__);
        }
        $this->countrySuffixe = $countrySuffixe;
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
     * @return \Ovh\StructType\TelephonyRateStruct
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\TelephonyRateStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
