<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryInfo StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryInfo extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The callNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callNumber;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $countryCode;
    /**
     * Constructor method for telephonyDirectoryInfo
     * @uses TelephonyDirectoryInfo::setSession()
     * @uses TelephonyDirectoryInfo::setCallNumber()
     * @uses TelephonyDirectoryInfo::setCountryCode()
     * @param string $session
     * @param string $callNumber
     * @param string $countryCode
     */
    public function __construct($session = null, $callNumber = null, $countryCode = null)
    {
        $this
            ->setSession($session)
            ->setCallNumber($callNumber)
            ->setCountryCode($countryCode);
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
     * @return \Ovh\StructType\TelephonyDirectoryInfo
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
     * Get callNumber value
     * @return string|null
     */
    public function getCallNumber()
    {
        return $this->callNumber;
    }
    /**
     * Set callNumber value
     * @param string $callNumber
     * @return \Ovh\StructType\TelephonyDirectoryInfo
     */
    public function setCallNumber($callNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callNumber) && !is_string($callNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callNumber, true), gettype($callNumber)), __LINE__);
        }
        $this->callNumber = $callNumber;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Ovh\StructType\TelephonyDirectoryInfo
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
}
