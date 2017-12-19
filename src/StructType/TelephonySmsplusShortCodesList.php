<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusShortCodesList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusShortCodesList extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The shortCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shortCode;
    /**
     * The shortCodeCategory
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $shortCodeCategory;
    /**
     * The publicType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $publicType;
    /**
     * The price
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $price;
    /**
     * The rates
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $rates;
    /**
     * Constructor method for telephonySmsplusShortCodesList
     * @uses TelephonySmsplusShortCodesList::setSession()
     * @uses TelephonySmsplusShortCodesList::setShortCode()
     * @uses TelephonySmsplusShortCodesList::setShortCodeCategory()
     * @uses TelephonySmsplusShortCodesList::setPublicType()
     * @uses TelephonySmsplusShortCodesList::setPrice()
     * @uses TelephonySmsplusShortCodesList::setRates()
     * @param string $session
     * @param string $shortCode
     * @param int $shortCodeCategory
     * @param string $publicType
     * @param float $price
     * @param string $rates
     */
    public function __construct($session = null, $shortCode = null, $shortCodeCategory = null, $publicType = null, $price = null, $rates = null)
    {
        $this
            ->setSession($session)
            ->setShortCode($shortCode)
            ->setShortCodeCategory($shortCodeCategory)
            ->setPublicType($publicType)
            ->setPrice($price)
            ->setRates($rates);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\TelephonySmsplusShortCodesList
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get shortCode value
     * @return string|null
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }
    /**
     * Set shortCode value
     * @param string $shortCode
     * @return \Ovh\StructType\TelephonySmsplusShortCodesList
     */
    public function setShortCode($shortCode = null)
    {
        // validation for constraint: string
        if (!is_null($shortCode) && !is_string($shortCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortCode)), __LINE__);
        }
        $this->shortCode = $shortCode;
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
     * @return \Ovh\StructType\TelephonySmsplusShortCodesList
     */
    public function setShortCodeCategory($shortCodeCategory = null)
    {
        // validation for constraint: int
        if (!is_null($shortCodeCategory) && !is_numeric($shortCodeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shortCodeCategory)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsplusShortCodesList
     */
    public function setPublicType($publicType = null)
    {
        // validation for constraint: string
        if (!is_null($publicType) && !is_string($publicType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publicType)), __LINE__);
        }
        $this->publicType = $publicType;
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
     * @return \Ovh\StructType\TelephonySmsplusShortCodesList
     */
    public function setPrice($price = null)
    {
        $this->price = $price;
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
     * @return \Ovh\StructType\TelephonySmsplusShortCodesList
     */
    public function setRates($rates = null)
    {
        // validation for constraint: string
        if (!is_null($rates) && !is_string($rates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rates)), __LINE__);
        }
        $this->rates = $rates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsplusShortCodesList
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
