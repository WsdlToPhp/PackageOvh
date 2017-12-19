<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyTrunkExternalDisplayedNumberAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyTrunkExternalDisplayedNumberAdd extends AbstractStructBase
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
     * The externalDisplayedNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $externalDisplayedNumber;
    /**
     * The whiteLabel
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $whiteLabel;
    /**
     * Constructor method for telephonyTrunkExternalDisplayedNumberAdd
     * @uses TelephonyTrunkExternalDisplayedNumberAdd::setSession()
     * @uses TelephonyTrunkExternalDisplayedNumberAdd::setNumber()
     * @uses TelephonyTrunkExternalDisplayedNumberAdd::setCountry()
     * @uses TelephonyTrunkExternalDisplayedNumberAdd::setExternalDisplayedNumber()
     * @uses TelephonyTrunkExternalDisplayedNumberAdd::setWhiteLabel()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $externalDisplayedNumber
     * @param bool $whiteLabel
     */
    public function __construct($session = null, $number = null, $country = null, $externalDisplayedNumber = null, $whiteLabel = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setExternalDisplayedNumber($externalDisplayedNumber)
            ->setWhiteLabel($whiteLabel);
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
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAdd
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
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAdd
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
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAdd
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
     * Get externalDisplayedNumber value
     * @return string|null
     */
    public function getExternalDisplayedNumber()
    {
        return $this->externalDisplayedNumber;
    }
    /**
     * Set externalDisplayedNumber value
     * @param string $externalDisplayedNumber
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAdd
     */
    public function setExternalDisplayedNumber($externalDisplayedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($externalDisplayedNumber) && !is_string($externalDisplayedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalDisplayedNumber)), __LINE__);
        }
        $this->externalDisplayedNumber = $externalDisplayedNumber;
        return $this;
    }
    /**
     * Get whiteLabel value
     * @return bool|null
     */
    public function getWhiteLabel()
    {
        return $this->whiteLabel;
    }
    /**
     * Set whiteLabel value
     * @param bool $whiteLabel
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAdd
     */
    public function setWhiteLabel($whiteLabel = null)
    {
        // validation for constraint: boolean
        if (!is_null($whiteLabel) && !is_bool($whiteLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($whiteLabel)), __LINE__);
        }
        $this->whiteLabel = $whiteLabel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAdd
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
