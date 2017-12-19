<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAliasToSipOffer StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAliasToSipOffer extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The offer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $offer;
    /**
     * The delete
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $delete;
    /**
     * Constructor method for telephonyAliasToSipOffer
     * @uses TelephonyAliasToSipOffer::setSession()
     * @uses TelephonyAliasToSipOffer::setNumber()
     * @uses TelephonyAliasToSipOffer::setCountry()
     * @uses TelephonyAliasToSipOffer::setOffer()
     * @uses TelephonyAliasToSipOffer::setDelete()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $offer
     * @param bool $delete
     */
    public function __construct($session = null, $number = null, $country = null, $offer = null, $delete = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setOffer($offer)
            ->setDelete($delete);
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
     * @return \PayPal\StructType\TelephonyAliasToSipOffer
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
     * @return \PayPal\StructType\TelephonyAliasToSipOffer
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
     * @return \PayPal\StructType\TelephonyAliasToSipOffer
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
     * @return \PayPal\StructType\TelephonyAliasToSipOffer
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
     * Get delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->delete;
    }
    /**
     * Set delete value
     * @param bool $delete
     * @return \PayPal\StructType\TelephonyAliasToSipOffer
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($delete)), __LINE__);
        }
        $this->delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyAliasToSipOffer
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
