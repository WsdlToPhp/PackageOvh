<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyScreenListInfo StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyScreenListInfo extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The screenListType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $screenListType;
    /**
     * Constructor method for telephonyScreenListInfo
     * @uses TelephonyScreenListInfo::setSession()
     * @uses TelephonyScreenListInfo::setNumber()
     * @uses TelephonyScreenListInfo::setCountry()
     * @uses TelephonyScreenListInfo::setScreenListType()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $screenListType
     */
    public function __construct($session = null, $number = null, $country = null, $screenListType = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setScreenListType($screenListType);
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
     * @return \Ovh\StructType\TelephonyScreenListInfo
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
     * @return \Ovh\StructType\TelephonyScreenListInfo
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyScreenListInfo
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
     * Get screenListType value
     * @return string|null
     */
    public function getScreenListType()
    {
        return $this->screenListType;
    }
    /**
     * Set screenListType value
     * @param string $screenListType
     * @return \Ovh\StructType\TelephonyScreenListInfo
     */
    public function setScreenListType($screenListType = null)
    {
        // validation for constraint: string
        if (!is_null($screenListType) && !is_string($screenListType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($screenListType, true), gettype($screenListType)), __LINE__);
        }
        $this->screenListType = $screenListType;
        return $this;
    }
}
