<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSetCodecs StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSetCodecs extends AbstractStructBase
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
     * The codecs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $codecs;
    /**
     * Constructor method for telephonyLineSetCodecs
     * @uses TelephonyLineSetCodecs::setSession()
     * @uses TelephonyLineSetCodecs::setNumber()
     * @uses TelephonyLineSetCodecs::setCountry()
     * @uses TelephonyLineSetCodecs::setCodecs()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $codecs
     */
    public function __construct($session = null, $number = null, $country = null, $codecs = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setCodecs($codecs);
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
     * @return \Ovh\StructType\TelephonyLineSetCodecs
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
     * @return \Ovh\StructType\TelephonyLineSetCodecs
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
     * @return \Ovh\StructType\TelephonyLineSetCodecs
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
     * Get codecs value
     * @return string|null
     */
    public function getCodecs()
    {
        return $this->codecs;
    }
    /**
     * Set codecs value
     * @param string $codecs
     * @return \Ovh\StructType\TelephonyLineSetCodecs
     */
    public function setCodecs($codecs = null)
    {
        // validation for constraint: string
        if (!is_null($codecs) && !is_string($codecs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codecs)), __LINE__);
        }
        $this->codecs = $codecs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyLineSetCodecs
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
