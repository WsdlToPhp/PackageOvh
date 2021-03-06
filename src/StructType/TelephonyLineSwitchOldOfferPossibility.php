<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSwitchOldOfferPossibility StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSwitchOldOfferPossibility extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The numbers
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $numbers;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * Constructor method for telephonyLineSwitchOldOfferPossibility
     * @uses TelephonyLineSwitchOldOfferPossibility::setSession()
     * @uses TelephonyLineSwitchOldOfferPossibility::setNumbers()
     * @uses TelephonyLineSwitchOldOfferPossibility::setCountry()
     * @param string $session
     * @param \Ovh\ArrayType\MyArrayOfStringType $numbers
     * @param string $country
     */
    public function __construct($session = null, \Ovh\ArrayType\MyArrayOfStringType $numbers = null, $country = null)
    {
        $this
            ->setSession($session)
            ->setNumbers($numbers)
            ->setCountry($country);
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
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferPossibility
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get numbers value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getNumbers()
    {
        return $this->numbers;
    }
    /**
     * Set numbers value
     * @param \Ovh\ArrayType\MyArrayOfStringType $numbers
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferPossibility
     */
    public function setNumbers(\Ovh\ArrayType\MyArrayOfStringType $numbers = null)
    {
        $this->numbers = $numbers;
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
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferPossibility
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
}
