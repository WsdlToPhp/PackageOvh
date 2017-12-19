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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countrySuffixe)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyRateStruct
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
